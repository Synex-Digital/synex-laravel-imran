# Synex Digital — Custom Software Development Agency

Enterprise-grade custom software development, eCommerce engineering, full-stack web applications, and applied AI systems built for US founders and decision-makers.

## Tech Stack & Architecture

- **Backend:** Laravel 11/12 (PHP >= 8.2), Blade server-rendered templates, Domain-Driven Controller architecture
- **Frontend & Styling:** Tailwind CSS v4, Vanilla JavaScript (zero external dependencies)
- **Asset Pipeline:** Vite with automated asset hashing and manifest generation
- **Typography:** Self-hosted **Switzer** (Indian Type Foundry / Fontshare) in WOFF2 format (`weights: 400, 500, 600, 700`)
- **Testing:** PHPUnit / Pest automated test suites
- **CI/CD:** GitHub Actions workflow with zero-NPM production deployment for shared hosting (Namecheap cPanel)

---

## Local Development Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Synex-Digital/synex-laravel-imran.git
   cd synex-laravel-imran
   ```

2. **Install PHP and Node dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Compile frontend assets & start development server:**
   ```bash
   npm run build
   php artisan serve
   ```
   Open `http://127.0.0.1:8000` in your browser.

5. **Run test suite:**
   ```bash
   php artisan test
   ```

---

## Design System & Anti-Slop Audits

- Visual design tokens, type scales, contrast ratios, and anti-pattern prevention principles are documented in [`DESIGN.md`](./DESIGN.md).
- Automated anti-slop and accessibility verification is powered by [`pbakaus/impeccable`](https://github.com/pbakaus/impeccable). Run locally with:
  ```bash
  npx impeccable detect http://localhost:8000
  ```

---

## Deployment to Namecheap Shared Hosting

Complete step-by-step documentation for production automated publishing via GitHub Actions is available in [`DEPLOYMENT.md`](./DEPLOYMENT.md).
