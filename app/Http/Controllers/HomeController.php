<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the Synex Digital homepage.
     */
    public function index(): View
    {
        $services = [
            [
                'id' => 'ecommerce',
                'title' => 'Custom eCommerce Development',
                'category' => 'Commerce Systems',
                'summary' => 'High-converting, scalable commerce architectures tailored for brands that have outgrown off-the-shelf templates.',
                'problem' => 'Slow checkout flows, inflexible plugin dependencies, and ERP sync bottlenecks restricting revenue expansion.',
                'solution' => 'Headless Shopify Plus, custom Laravel/Medusa backends, optimized high-throughput checkouts, and custom inventory integrations.',
                'deliverables' => [
                    'Headless storefronts with sub-second page loads',
                    'Custom payment gateways and subscription logic',
                    'ERP, WMS, and multi-warehouse bidirectional sync',
                    'High-concurrency flash sale & spike management',
                ],
                'tech' => ['Laravel', 'Shopify Plus', 'Medusa.js', 'Redis', 'PostgreSQL'],
            ],
            [
                'id' => 'ai-development',
                'title' => 'Applied AI & Workflow Automation',
                'category' => 'Machine Intelligence',
                'summary' => 'Deterministic, production-ready AI pipelines designed for real enterprise workflows, not novelty chatbots.',
                'problem' => 'Hallucination risks, unstructured data chaos, and fragile prototypes that cannot survive enterprise compliance or load.',
                'solution' => 'Context-grounded RAG pipelines, automated document extraction, private LLM orchestration, and deterministic business logic guards.',
                'deliverables' => [
                    'Retrieval-Augmented Generation (RAG) over private repositories',
                    'Automated unstructured data parsing & normalization',
                    'Semantic search engines and recommendation vectors',
                    'Evaluation harnesses and guardrail enforcement',
                ],
                'tech' => ['Python', 'LangChain', 'pgvector', 'OpenAI API', 'FastAPI'],
            ],
            [
                'id' => 'web-app',
                'title' => 'Full-Stack Web & Application Engineering',
                'category' => 'Software Engineering',
                'summary' => 'Resilient web applications, SaaS platforms, and internal tools engineered for reliability, security, and velocity.',
                'problem' => 'Accumulated technical debt, unmaintainable monoliths, and feature release cycles dragging down growth.',
                'solution' => 'Clean domain-driven design, scalable Laravel and TypeScript architectures, automated CI/CD, and robust test suites.',
                'deliverables' => [
                    'Multi-tenant SaaS application backends',
                    'High-performance reactive frontends',
                    'Role-based access control (RBAC) and audit trails',
                    'Monolith-to-modular service modernization',
                ],
                'tech' => ['Laravel', 'TypeScript', 'Tailwind CSS', 'MySQL', 'Docker'],
            ],
            [
                'id' => 'ui-ux',
                'title' => 'UI/UX Design & Design Systems',
                'category' => 'Product Architecture',
                'summary' => 'Intuitive, accessible digital product interfaces built on reusable token systems that streamline engineering execution.',
                'problem' => 'Visual fragmentation across products, confusing onboarding drop-offs, and design files detached from code realities.',
                'solution' => 'Rigorous design systems, tested interaction architectures, WCAG AA compliance, and pixel-exact developer handoffs.',
                'deliverables' => [
                    'Comprehensive component libraries and token architectures',
                    'User journey mapping and conversion funnel optimization',
                    'Interactive, click-through high-fidelity prototypes',
                    'Accessibility compliance audits and remediation',
                ],
                'tech' => ['Figma', 'Design Tokens', 'WCAG 2.1 AA', 'Tailwind Specs'],
            ],
            [
                'id' => 'api-integration',
                'title' => 'API Development & Enterprise Integration',
                'category' => 'Systems Integration',
                'summary' => 'Secure, idempotent APIs and event-driven data pipelines uniting legacy backbones with modern digital touchpoints.',
                'problem' => 'Siloed database records, unreliable webhooks, dropped events, and undocumented spaghetti interfaces.',
                'solution' => 'Contract-first RESTful and GraphQL APIs, asynchronous event queues, robust retry mechanisms, and live OpenAPI specs.',
                'deliverables' => [
                    'High-throughput REST and GraphQL API gateways',
                    'Event-driven asynchronous workers (SQS / Redis)',
                    'Third-party connector pipelines (Stripe, HubSpot, Salesforce)',
                    'Comprehensive OpenAPI / Swagger contract documentation',
                ],
                'tech' => ['RESTful', 'GraphQL', 'Redis Queues', 'OpenAPI', 'Postman'],
            ],
        ];

        $engineeringStandards = [
            [
                'title' => 'Type Safety & Static Analysis',
                'description' => 'We enforce strict typing and deep static verification across both backend and frontend layers to catch regressions before they reach staging.',
                'detail' => 'PHPStan / Larastan at strict levels, TypeScript strict mode, and automated linters running on every pull request.',
            ],
            [
                'title' => 'High-Efficiency Caching & Database Indexing',
                'description' => 'Speed is an architectural property. We analyze query execution plans, eliminate N+1 queries, and deploy multi-tiered Redis cache strategies.',
                'detail' => 'Sub-100ms server response goals, connection pooling, and optimized read/write separation architectures.',
            ],
            [
                'title' => 'OWASP Security & Secret Isolation',
                'description' => 'Zero-trust development principles. Every input is strictly sanitized, CSRF/XSS vectors are systematically neutralized, and secrets stay out of source control.',
                'detail' => 'Encrypted environment vaults, least-privilege database roles, and secure session management by default.',
            ],
            [
                'title' => 'Continuous Integration & Reproducible Builds',
                'description' => 'Deterministic build pipelines that compile assets, execute test suites, and deploy release artifacts without server-side surprises.',
                'detail' => 'Automated GitHub Actions pipelines, atomic zero-downtime releases, and instant rollback safety nets.',
            ],
        ];

        $processSteps = [
            [
                'step' => '01',
                'name' => 'Technical Discovery & Architecture',
                'timeline' => 'Sprint 1',
                'summary' => 'We deep-dive into your business constraints, data schemas, compliance needs, and infrastructure requirements to deliver an unambiguous engineering specification.',
                'outputs' => ['Architecture blueprint & schema models', 'API contract specifications', 'Milestone timeline & sprint roadmap'],
            ],
            [
                'step' => '02',
                'name' => 'Foundation & Sprint Zero',
                'timeline' => 'Sprint 2',
                'summary' => 'Setting up production-grade foundations: Git repositories, automated CI/CD runners, staging environments, design token scaffolding, and baseline test suites.',
                'outputs' => ['Live staging environment', 'Automated build pipeline', 'Core database migrations & seeders'],
            ],
            [
                'step' => '03',
                'name' => 'Iterative Build & Demo Cycles',
                'timeline' => 'Ongoing 2-Week Sprints',
                'summary' => 'Agile feature execution with bi-weekly sprint demos. You test functioning, deployed software at the end of every single sprint cycle—no blind spots.',
                'outputs' => ['Working software updates every 14 days', 'Sprint retro & velocity reports', 'Direct Slack/Teams engineer communication'],
            ],
            [
                'step' => '04',
                'name' => 'Hardening, Deployment & Handover',
                'timeline' => 'Final Sprint',
                'summary' => 'Comprehensive load testing, vulnerability scanning, SEO/analytics verification, zero-downtime production launch, and complete documentation transfer.',
                'outputs' => ['Zero-downtime cutover plan', 'Complete technical handover docs', 'Post-launch 30-day warranty support'],
            ],
        ];

        $engagementModels = [
            [
                'title' => 'Dedicated Engineering Pod',
                'target' => 'Growth-stage companies & product teams needing sustained velocity',
                'description' => 'A cross-functional pod of senior software engineers and designers dedicated to your roadmap, functioning as an integrated extension of your internal team.',
                'features' => [
                    'Direct communication in your Slack or Teams',
                    'Aligned with US working hours (EST / CST / PST)',
                    'Sprint-based planning with flexible backlog reprioritization',
                    'Transparent time and velocity accounting',
                ],
                'cta' => 'Inquire About Pod Availability',
            ],
            [
                'title' => 'Fixed-Scope Delivery',
                'target' => 'Defined MVPs, specific platform rebuilds & greenfield apps',
                'description' => 'A defined-milestone contract with a locked scope, fixed investment, and guaranteed delivery schedule. Ideal when requirements and deliverables are fully scoped.',
                'features' => [
                    'Definitive scope, architecture, and timeline upfront',
                    'Milestone-based billing tied to verified acceptance criteria',
                    'Zero hidden overages or surprise hourly creep',
                    'Post-launch stabilization and warranty included',
                ],
                'cta' => 'Request Fixed-Scope Proposal',
            ],
            [
                'title' => 'Technical Audit & Modernization',
                'target' => 'Enterprises struggling with tech debt or scaling bottlenecks',
                'description' => 'A rigorous 2 to 4-week architectural evaluation that inspects your code quality, security posture, database bottlenecks, and delivers a concrete remediation plan.',
                'features' => [
                    'Deep-dive code review and security vulnerability scan',
                    'Database query bottleneck profiling and caching plan',
                    'Step-by-step modernization roadmap with ROI prioritization',
                    'Executive summary for CTOs and board stakeholders',
                ],
                'cta' => 'Book Architecture Audit',
            ],
        ];

        $faqs = [
            [
                'question' => 'Who owns the intellectual property and source code?',
                'answer' => 'You do. 100% of all code, architecture diagrams, design systems, and deployment configurations belong to your company from the moment they are written. We do not retain proprietary lock-in licenses or shared libraries.',
            ],
            [
                'question' => 'How do you coordinate with US-based teams and stakeholders?',
                'answer' => 'Our engineering schedules provide guaranteed daily overlap with US Eastern, Central, and Pacific working hours. We participate directly in your daily standups, sprint reviews, and planning sessions via Slack, Teams, Linear, or Jira.',
            ],
            [
                'question' => 'How do you guarantee engineering quality without account managers in the middle?',
                'answer' => 'Every client is paired directly with a Senior Technical Lead who codes and oversees the architectural integrity of the project. You speak directly to the engineers building your software, eliminating translation errors and bureaucratic delays.',
            ],
            [
                'question' => 'Can you work with our existing codebase and deployment infrastructure?',
                'answer' => 'Yes. We routinely work inside existing client repositories (GitHub, GitLab, Bitbucket) and deploy into client cloud infrastructure (AWS, DigitalOcean, Google Cloud, Docker). We adopt your branching strategies and coding conventions on day one.',
            ],
            [
                'question' => 'What is the typical timeline to kick off a project?',
                'answer' => 'Following an initial technical discovery session and mutual agreement on scope or pod requirements, we can typically mobilize and begin Sprint Zero within 5 to 10 business days.',
            ],
            [
                'question' => 'How are project changes and scope adjustments managed?',
                'answer' => 'For dedicated pods, scope is managed dynamically within the 2-week sprint backlog without contract amendments. For fixed-scope projects, any requested feature changes are evaluated through an upfront, transparent change-request process before execution.',
            ],
        ];

        return view('home', compact(
            'services',
            'engineeringStandards',
            'processSteps',
            'engagementModels',
            'faqs'
        ));
    }
}
