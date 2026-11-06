# Synex Digital — Namecheap Shared Hosting CI/CD Deployment Guide (`DEPLOYMENT.md`)

This document outlines the zero-downtime, automated deployment strategy designed specifically for **Namecheap Shared Hosting** (cPanel environment: 2 GB RAM limit, 40 concurrent entry processes, and **no Node.js/npm runtime available on the server terminal**).

---

## 1. Hosting Architecture & Directory Layout

On Namecheap shared hosting, the web root accessible to the public is typically `~/public_html`. To prevent sensitive files (`.env`, `composer.json`, `storage/`, `vendor/`) from being exposed directly to the internet, we recommend the following root separation:

```text
/home/cpanelusername/
├── synex-app/                  <-- Full Laravel Application Root (Private, non-web-accessible)
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   │   └── database.sqlite     <-- Persistent SQLite Database (Excluded from deploy overwrites)
│   ├── public/                 <-- Original Laravel public folder
│   │   ├── build/              <-- Pre-compiled Vite assets (manifest.json, CSS, JS)
│   │   ├── fonts/              <-- Pre-loaded self-hosted Switzer font assets
│   │   ├── index.php
│   │   └── .htaccess
│   ├── resources/
│   ├── routes/
│   ├── storage/                <-- Persistent storage (uploads, logs, sessions)
│   ├── vendor/                 <-- Optimized PHP dependencies
│   ├── .env                    <-- Production environment file (Preserved)
│   └── artisan
│
└── public_html/                <-- Symlink pointing directly to /home/cpanelusername/synex-app/public
```

### Initial Server Symlink Setup (Run Once via cPanel Terminal or SSH)
```bash
# 1. Back up empty public_html
mv ~/public_html ~/public_html_backup

# 2. Symlink public_html to the Laravel public directory
ln -s ~/synex-app/public ~/public_html
```

---

## 2. Zero-NPM Architecture (Why Assets are Built in GitHub Actions)

- **Namecheap Shared Server Limitation:** Shared cPanel servers have low memory limits (2 GB) and no global or daemonized Node.js runtime for building assets. Attempting to run `npm run build` or Vite on shared hosting leads to out-of-memory (OOM) errors and process killing by CloudLinux LVE.
- **The Solution:** The GitHub Actions runner handles all heavy lifting:
  1. Installs Node 22 and runs `npm ci`.
  2. Compiles production assets into `public/build/` with asset hashing and `manifest.json`.
  3. Installs Composer `--no-dev` dependencies.
  4. Runs PHPUnit test suite to guarantee zero regressions.
  5. Rsyncs the release package (including `public/build`) directly to the server.
  6. Executes lightweight Artisan cache commands:
     - `php artisan config:cache`
     - `php artisan route:cache`
     - `php artisan view:cache`

---

## 3. Required GitHub Secrets Configuration

Before live deployment, add the following secrets in GitHub (**Settings > Secrets and variables > Actions > New repository secret**):

| Secret Name | Description | Example Value |
|---|---|---|
| `SSH_HOST` | Namecheap server IP or hostname | `cpanel123.namecheaphosting.com` or `198.54.115.x` |
| `SSH_PORT` | Namecheap SSH Port | `21098` (Standard Namecheap cPanel SSH Port) |
| `SSH_USER` | cPanel username | `synexusr` |
| `SSH_PRIVATE_KEY` | Private SSH Key generated in cPanel | `-----BEGIN OPENSSH PRIVATE KEY-----...` |
| `REMOTE_PATH` | Full absolute server path to Laravel root | `/home/synexusr/synex-app` |

---

## 4. Safeguarded Files & Persistence Policy

The Rsync deployment rule strictly excludes the following from ever being overwritten on the server:
- `.env` (Never overwritten, keeping production `APP_KEY` and credentials intact).
- `database/database.sqlite` (Preserves all live database records).
- `storage/app/public/*` (Preserves user uploads and media).
- `storage/logs/*` and sessions (Preserves system runtime diagnostics).

---

## 5. Rollback & Emergency Procedures

If a deployment ever introduces an unforeseen issue:
1. SSH into the server:
   ```bash
   ssh -p 21098 synexusr@cpanel123.namecheaphosting.com
   ```
2. Clear Artisan caches:
   ```bash
   cd ~/synex-app
   php artisan optimize:clear
   ```
3. In GitHub, revert the offending commit on `main`; GitHub Actions will automatically rebuild and deploy the prior verified state.
