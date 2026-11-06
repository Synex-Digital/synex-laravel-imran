<x-layout.app
    title="Synex Digital — Custom Software Engineering & Applied AI Agency"
    description="Dedicated software engineering capacity, custom eCommerce development, web applications, and applied AI systems for US founders and enterprise decision-makers."
>
    <!-- Hero Section -->
    <x-sections.hero />

    <!-- Core Services Deep Dive -->
    <x-sections.services :services="$services" />

    <!-- Engineering Standards & Technical Rigor -->
    <x-sections.standards :engineeringStandards="$engineeringStandards" />

    <!-- 4-Phase Delivery Protocol -->
    <x-sections.process :processSteps="$processSteps" />

    <!-- Engagement Frameworks -->
    <x-sections.engagement :engagementModels="$engagementModels" />

    <!-- Enterprise Confidentiality & Proof Transparency Notice -->
    <x-sections.evidence-notice />

    <!-- Decision-Maker FAQ Accordion -->
    <x-sections.faq :faqs="$faqs" />

    <!-- Closing Inquiry Gateway -->
    <x-sections.cta />
</x-layout.app>
