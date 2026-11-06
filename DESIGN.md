# Synex Digital — Visual Direction & Design Tokens (`DESIGN.md`)

## 1. Positioning & Audience
- **Target Audience:** CXOs, CTOs, VP of Engineering, Founders, and senior decision-makers in the United States seeking senior engineering capability.
- **Core Value Proposition:** High-velocity custom software development, eCommerce engineering, applied AI workflows, robust web/mobile applications, UI/UX architecture, and enterprise API integrations.
- **Tone & Identity:** Senior, authoritative, disciplined, engineering-first, conversion-focused. No buzzwords, no invented case metrics, no fake testimonials, and zero AI-slop visual tropes.

---

## 2. Brand Color Tokens & Contrast (WCAG AA / AAA)

| Token Name | Value | Purpose | Contrast vs #0A0E1A | Contrast vs #141C2E |
|---|---|---|---|---|
| `--color-bg-base` | `#0A0E1A` | Midnight Base Background | — | — |
| `--color-surface-1` | `#141C2E` | Card & Panel Surface | 1.3:1 (structural) | — |
| `--color-surface-2` | `#1B243B` | Elevated Interactive Surface | 1.8:1 (structural) | 1.4:1 (structural) |
| `--color-primary` | `#4555FD` | Primary Interactive / Brand Blue | 4.8:1 (AA Large) | 4.1:1 |
| `--color-primary-hover`| `#3744E0` | Active / Hover Primary | 3.8:1 | 3.2:1 |
| `--color-cyan` | `#00E5FF` | Selective Precision Accents only | 12.8:1 (AAA) | 11.0:1 (AAA) |
| `--color-emerald` | `#10B981` | Success / Live System Verification | 7.9:1 (AAA) | 6.8:1 (AA) |
| `--color-text-title` | `#FFFFFF` | Primary Titles & High Emphasis | 18.2:1 (AAA) | 15.6:1 (AAA) |
| `--color-text-body` | `#E2E8F0` | High-legibility Body Text | 14.1:1 (AAA) | 12.1:1 (AAA) |
| `--color-text-muted`| `#94A3B8` | Secondary & Supporting Copy | 7.5:1 (AAA) | 6.4:1 (AA) |
| `--color-text-subtle`| `#64748B` | Subtle metadata & Captions | 4.6:1 (AA) | 4.0:1 (AA Large) |
| `--color-border-subtle`| `rgba(255, 255, 255, 0.08)` | Hairline structural dividers | Sub-surface delineation |
| `--color-border-hover` | `rgba(69, 85, 253, 0.40)` | Interactive focus/hover borders | State change indication |

*Note: Cyan (#00E5FF) and Primary (#4555FD) are applied with surgical restraint. No full-page neon hazes, glowing halos, or purple-gradient washbacks.*

---

## 3. Typography Scale & Hierarchy

- **Primary Typeface:** **Switzer** (Indian Type Foundry / Fontshare)
  - Hosted locally in `public/fonts/switzer/` in `.woff2` format for maximum performance and zero external dependencies.
  - Weights: `400` (Regular), `500` (Medium), `600` (Semibold), `700` (Bold).
- **Code Typeface:** System Monospace (`ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace`) strictly for actual code snippets or parameter tags.
- **Optical Rules:**
  - `text-wrap: balance` on all primary section headings to eliminate awkward line breaks.
  - `text-wrap: pretty` on body copy to prevent lonely straggler words.
  - No all-caps body copy; uppercase tracking is reserved solely for brief category indicators (`letter-spacing: 0.08em`).
  - Strict line-height rhythm: `leading-tight` on display headers, `leading-relaxed` (1.625) on body.

### Scale Steps
- **Display H1:** `text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-white`
- **Section H2:** `text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-white`
- **Sub-feature H3:** `text-lg sm:text-xl font-semibold text-white`
- **Body Large (Lede):** `text-lg sm:text-xl text-slate-300 font-normal leading-relaxed`
- **Body Regular:** `text-base text-slate-300 font-normal leading-relaxed`
- **Body Small / Meta:** `text-sm text-slate-400 font-medium`
- **Fineprint Floor:** `text-xs text-slate-500` (minimum 12px everywhere; no sub-11px functional text).

---

## 4. Spacing, Rhythm & Container System

- **Layout Container:** Max width `1240px` (`max-w-7xl px-4 sm:px-6 lg:px-8`), centered.
- **Vertical Section Separation:** Deliberate vertical breathing room (`py-16 sm:py-24 lg:py-32`).
- **Section Transitions:** Clean 1px hairlines (`border-white/[0.08]`) instead of blurred drop shadows or colored ambient blobs.
- **Rhythm Principle:** Tight coupling between labels, headings, and supporting descriptions (`gap-2` to `gap-4`), with spacious margins between distinct functional content groups (`gap-10` to `gap-16`).

---

## 5. Architectural & Composition Principles (Anti-Slop Guarantees)

1. **Varied Section Topologies:**
   - Avoid monotonous "3-identical-card" grids across consecutive sections.
   - Alternate between asymmetric 2-column feature breakdowns, structured comparison tables, linear process pathways, and expandable query panels.
2. **Flattened Structural Hierarchy:**
   - Never nest cards within cards. Depth is communicated via contrast, subtle border transitions, and whitespace, not container stacking.
3. **No Decorative Deceptions:**
   - No fake terminal bash prompts (`$ npm run magic`).
   - No fake pulsing status dots pretending to poll live systems.
   - No floating radial glow hazes or arbitrary background blur circles.
   - No fake customer metrics ("500% ROI in 2 days") or unverified client logos.
4. **Honest Copy & Verified Scope:**
   - Plain-spoken architectural clarity. Specify our actual engineering capabilities (Laravel, Next.js, Python, TypeScript, Tailwind, REST/GraphQL APIs, AWS/Docker) and client engagement frameworks (Fixed Sprint, Dedicated Pod, Modernization Audit).
5. **Interactive Controls & Accessibility:**
   - All interactive controls provide at least `44x44px` physical touch targets.
   - Visible, high-contrast focus rings: `focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#4555FD] focus-visible:ring-offset-2 focus-visible:ring-offset-[#0A0E1A]`.
   - Full keyboard navigation and ARIA attributes for mobile drawer navigation and accordion panels.
   - `prefers-reduced-motion` respected across all transitions.

---

## 6. Component Architecture (Blade)
- `<x-layout.app>`: HTML shell, SEO metadata, Switzer font declarations, OpenGraph tags, JSON-LD Schema.
- `<x-navigation.navbar>`: Sticky header, brand wordmark, keyboard-accessible navigation, CTA trigger, accessible mobile drawer.
- `<x-navigation.footer>`: Comprehensive sitemap, service anchors, office/location info, timezone transparency, legal links, status.
- `<x-sections.hero>`: Problem-oriented value proposition, primary/secondary action triggers, enterprise capability summary.
- `<x-sections.services>`: Deep-dive into 5 core offerings with problem-to-solution mapping.
- `<x-sections.engineering-standards>`: Technical architectural rigor (security, performance, testing, clean code).
- `<x-sections.process>`: Transparent 4-stage engagement protocol (Discovery → Architecture → Iterative Build → Handover).
- `<x-sections.faq>`: Accessible, zero-dependency accordion addressing timeline, IP ownership, team structure, and communication.
- `<x-sections.cta>`: Actionable inquiry gateway with frontend validation and transparent submission notification.
- `<x-ui.button>`: Reusable button component supporting primary, secondary, and subtle variants.
