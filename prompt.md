Act as a senior web designer, conversion copywriter and Laravel frontend engineer. Design and implement a distinctive homepage for Synex Digital, a custom software development agency.

BUSINESS
- Target clients and markets: CXO, Decision Makers, United States.
- Core services: eCommerce development, AI development, Web & App development, UI/UX design, API development and integration.
- References: attached brand-system.html, Synex logo folder
- Goal: generate qualified project enquiries from organic search and PPC.
- Language: clear, professional English with specific, persuasive copy.

STACK & SCOPE
Use Laravel + Blade + Tailwind CSS + vanilla JavaScript + Vite. SQLite and backend features come later.

Inspect project instructions and existing files; preserve existing work. Build only the homepage and reusable Blade components. Defer CMS, authentication, database and email integrations. Keep this a dynamic, server-rendered Laravel application.

BRANDING
Read brand-system.html before designing. Preserve its colours and supplied logo artwork:
- Primary: #4555FD; hover: #3744E0.
- Background: #0A0E1A; surfaces: #141C2E and #1B243B.
- Cyan: #00E5FF for selective highlights.
- Emerald: #10B981 primarily for meaningful success/status states.

Override the reference typography: use Switzer only, weights 400/500/600/700. Use system monospace only for actual code. Load only required font assets and retain their licence.

Treat the file as a brand reference, not a homepage template. Check referenced logo files; report missing assets and use a temporary text wordmark rather than recreating the logo.

DESIGN WORKFLOW
Use Impeccable (https://github.com/pbakaus/impeccable?utm_source=chatgpt.com) guidance for design and Anti Slop (https://github.com/miqdadbadjuber/anti-slop?utm_source=chatgpt.com) for reviewing generic UI and copy. If unavailable, report that and proceed using this brief.

Priority: this brief → supplied branding and approved direction → tool defaults. Preserve the chosen stack, fonts and colours.

Briefly explain the visual direction, record reusable design tokens and principles in DESIGN.md, then implement.

Create strong typography, deliberate spacing, varied section compositions and relevant visuals. Apply gradients, cyan, glow and glass effects sparingly. Avoid decorative blobs, fake dashboards, repeated identical card grids and terminal-style section labels. Build a recognisable agency identity without sacrificing clarity or performance.

CONTENT
Create a persuasive flow covering:
- Clear offer, target audience and primary enquiry CTA.
- Services connected to recognisable business problems.
- Genuine project evidence, where supplied.
- Delivery process and collaboration expectations.
- Relevant FAQs.
- Closing enquiry CTA and footer.

Adapt the composition to the content. Avoid buzzwords, vague promises and keyword stuffing. Never invent clients, testimonials, certifications, metrics or outcomes—including examples in the branding file. Omit unsupported proof and identify missing business content.

QUALITY
- Render meaningful content in Blade with semantic HTML, one descriptive H1 and appropriate metadata.
- Make layouts responsive, readable and accessible, including keyboard navigation, visible focus and verified contrast.
- Use lightweight interactions, optimised images, reserved media dimensions and reduced-motion support.
- Make mobile navigation, anchor links and accordions work.
- Avoid links to unbuilt pages and fake form success; identify frontend-only forms.
- Keep content separate from repeated markup for future CMS integration.
- Add dependencies only when justified; the branding file’s GSAP, Font Awesome and shadcn references are not requirements.

DEPLOYMENT CONSTRAINTS
Hosting: Namecheap shared hosting, 2 GB RAM, 40 entry processes, with no Node.js/npm available in the server terminal.

The deployment target is automatic publishing after a push to GitHub’s main branch:
1. GitHub Actions installs compatible PHP/Node dependencies, builds Vite/Tailwind assets and runs checks.
2. It deploys the production artifact, including public/build and its manifest, through SSH/SFTP.
3. It runs appropriate Laravel deployment commands.

Require no npm commands or continuously running Node.js process on production. Do not commit generated build assets to the source branch.

Keep credentials in GitHub Secrets, verify the SSH host, serialize deployments and block deployment when checks fail. Preserve the production .env, SQLite database, uploads and persistent storage.

For this homepage phase, document the deployment plan and required configuration. Implement live deployment when repository access, server details and secrets are configured.

VALIDATION & DELIVERY
Run the production build. If browser tools are available, inspect at 390px, 768px and 1440px; fix layout, readability and interaction issues.

Review with Anti Slop, then critique and polish with Impeccable, preserving intentional brand choices. Clearly report unavailable tools and unverified checks.

Deliver the implemented homepage, a brief design rationale, verification results and remaining content/backend requirements.