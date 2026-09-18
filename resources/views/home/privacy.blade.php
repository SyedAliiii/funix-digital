@extends('home.layout.master')

@section('title', 'Privacy Policy')

@section('header')
    @include('home.partials.header-alt')
@endsection

@section('style')
<style>
    .legal-page-wrapper {
        background-color: #0b0e14;
        position: relative;
        color: #b5b7c0;
    }
    .legal-card {
        background: #12161f;
        border: 1px solid rgba(255, 255, 255, 0.07);
        border-radius: 24px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    .legal-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(180deg, var(--theme-color, #45f882) 0%, transparent 100%);
        opacity: 0.8;
    }
    .legal-card:hover {
        border-color: rgba(69, 248, 130, 0.25);
        transform: translateY(-2px);
    }
    .legal-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(69, 248, 130, 0.1);
        color: var(--theme-color, #45f882);
        padding: 6px 16px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        border: 1px solid rgba(69, 248, 130, 0.2);
    }
    .legal-section-title {
        color: #ffffff;
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .legal-num-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: var(--theme-color, #45f882);
        color: #0b0e14;
        font-size: 16px;
        font-weight: 800;
        flex-shrink: 0;
    }
    .legal-list {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }
    .legal-list li {
        position: relative;
        padding-left: 32px;
        margin-bottom: 16px;
        line-height: 1.7;
        font-size: 15px;
        color: #cfd3dc;
    }
    .legal-list li:last-child {
        margin-bottom: 0;
    }
    .legal-list li i {
        position: absolute;
        left: 0;
        top: 4px;
        color: var(--theme-color, #45f882);
        font-size: 16px;
    }
    .legal-sub-box {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        padding: 20px 24px;
        margin-bottom: 16px;
    }
    .legal-sub-box:last-child {
        margin-bottom: 0;
    }
    .legal-sub-box h5 {
        color: #ffffff;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .legal-sub-box h5 i {
        color: var(--theme-color, #45f882);
    }
    .legal-sub-box p {
        margin: 0;
        font-size: 14px;
        line-height: 1.6;
        color: #cfd3dc;
    }
    .legal-nav-widget {
        background: #12161f;
        border: 1px solid rgba(255, 255, 255, 0.07);
        border-radius: 24px;
        padding: 30px;
        position: sticky;
        top: 100px;
    }
    .legal-nav-title {
        color: #ffffff;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }
    .legal-nav-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .legal-nav-links li {
        margin-bottom: 12px;
    }
    .legal-nav-links a {
        color: #9ea3ae;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 16px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.25s ease;
        background: rgba(255, 255, 255, 0.02);
    }
    .legal-nav-links a:hover, .legal-nav-links a.active {
        color: #0b0e14;
        background: var(--theme-color, #45f882);
        font-weight: 600;
        transform: translateX(4px);
    }
    .legal-nav-links a:hover i, .legal-nav-links a.active i {
        color: #0b0e14;
    }
    .contact-info-pill {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.07);
        border-radius: 14px;
        padding: 18px 22px;
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 15px;
    }
    .contact-info-pill i {
        font-size: 20px;
        color: var(--theme-color, #45f882);
        margin-top: 3px;
    }
    .contact-info-pill strong {
        color: #ffffff;
        display: block;
        margin-bottom: 4px;
        font-size: 15px;
    }
    .contact-info-pill p, .contact-info-pill a {
        color: #b5b7c0;
        margin: 0;
        font-size: 14px;
        text-decoration: none;
    }
    .contact-info-pill a:hover {
        color: var(--theme-color, #45f882);
    }
    @media (max-width: 991px) {
        .legal-card {
            padding: 25px;
        }
        .legal-section-title {
            font-size: 22px;
        }
    }
</style>
@endsection

@section('content')
<!--============================== Breadcrumb ============================== -->
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.png') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Privacy Policy</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </div>
</div>

<!--============================== Main Legal Content ============================== -->
<div class="legal-page-wrapper space">
    <div class="container">
        <div class="row">
            <!-- Left Side: Table of Contents & Switcher -->
            <div class="col-lg-4 col-xl-4 mb-4 mb-lg-0">
                <div class="legal-nav-widget">
                    <h3 class="legal-nav-title"><i class="fas fa-shield-alt text-theme me-2"></i> Quick Navigation</h3>
                    <ul class="legal-nav-links">
                        <li><a href="#collect"><i class="fas fa-database me-2"></i> 1. Info We Collect <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#use"><i class="fas fa-sliders me-2"></i> 2. How We Use Info <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#sharing"><i class="fas fa-share-nodes me-2"></i> 3. Sharing & Disclosure <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#security"><i class="fas fa-lock me-2"></i> 4. Data Security <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#choices"><i class="fas fa-user-gear me-2"></i> 5. Your Choices & Rights <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#contact"><i class="fas fa-headset me-2"></i> 6. Contact Information <i class="fas fa-chevron-right"></i></a></li>
                    </ul>

                    <div class="mt-4 pt-3 border-top border-secondary border-opacity-25">
                        <span class="text-white small fw-bold d-block mb-2"><i class="fas fa-link text-theme me-1"></i> Related Legal Pages:</span>
                        <a href="{{ route('terms') }}" class="th-btn btn-sm w-100 text-center">
                            <i class="fas fa-file-contract me-1"></i> View Terms & Conditions
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Full Privacy Policy Content -->
            <div class="col-lg-8 col-xl-8">
                <!-- Introduction Card -->
                <div class="legal-card">
                    <div class="legal-badge"><i class="fas fa-calendar-check"></i> Effective Date: September 10, 2026</div>
                    <h2 class="sec-title text-white mb-3">Funix Digital — Privacy Policy</h2>
                    <p class="mb-3 text-light">
                        <strong>Funix Digital</strong> ("we," "us," or "our") respects your privacy and is committed to protecting the personal information you share with us. This Privacy Policy outlines how we collect, use, and safeguard your information when you visit our website, communicate with us, or purchase our professional digital services and consulting.
                    </p>
                    <p class="mb-0 text-muted small">
                        Please take a moment to read this policy to understand our data privacy practices and your privacy rights.
                    </p>
                </div>

                <!-- Section 1 -->
                <div class="legal-card" id="collect">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">1</span> Information We Collect
                    </h3>
                    <p class="text-light mb-3">
                        We may collect personal and business information that you voluntarily provide to us when you request a service, pay an invoice, or communicate with us, including:
                    </p>

                    <div class="legal-sub-box">
                        <h5><i class="fas fa-id-card"></i> Contact Information</h5>
                        <p>Name, email address, phone number, and physical billing address.</p>
                    </div>

                    <div class="legal-sub-box">
                        <h5><i class="fas fa-credit-card"></i> Payment Information</h5>
                        <p>Transaction details, payment methods, and billing records processed securely through third-party gateways (such as Stripe and Cash App Pay). <em>Note: We do not store full credit card numbers or sensitive banking credentials on our own servers.</em></p>
                    </div>

                    <div class="legal-sub-box">
                        <h5><i class="fas fa-folder-open"></i> Project Details</h5>
                        <p>Business goals, brand assets, and communications related to the strategy and consulting services we provide to you.</p>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="legal-card" id="use">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">2</span> How We Use Your Information
                    </h3>
                    <p class="text-light mb-3">
                        We use the information we collect for legitimate business and operational purposes, including to:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Service Delivery:</strong> Provide, maintain, and deliver our professional design and strategic consulting services.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Billing & Invoices:</strong> Process invoices, manage payments, and send transaction receipts.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Client Communications:</strong> Communicate with you regarding project updates, deliverables, or billing inquiries.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Legal & Fraud Prevention:</strong> Comply with legal obligations, prevent fraud, and protect our business interests (such as responding to payment disputes or chargebacks).
                        </li>
                    </ul>
                </div>

                <!-- Section 3 -->
                <div class="legal-card" id="sharing">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">3</span> Data Sharing and Disclosure
                    </h3>
                    <p class="text-light mb-3">
                        We do not sell, rent, or trade your personal information to third parties. We may share your information only in the following limited circumstances:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Trusted Service Providers:</strong> With trusted third-party vendors who assist us in operating our business, such as payment processors (Stripe) and hosting providers, under strict confidentiality obligations.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Legal Requirements:</strong> If required to do so by law, court order, or government regulation, or to protect our rights, safety, and property (including submitting evidence to financial institutions during a chargeback dispute).
                        </li>
                    </ul>
                </div>

                <!-- Section 4 -->
                <div class="legal-card" id="security">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">4</span> Data Security
                    </h3>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-shield-alt"></i>
                            We implement reasonable administrative, technical, and physical security measures to protect your personal information from unauthorized access, loss, or misuse.
                        </li>
                        <li>
                            <i class="fas fa-info-circle"></i>
                            However, please note that no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.
                        </li>
                    </ul>
                </div>

                <!-- Section 5 -->
                <div class="legal-card" id="choices">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">5</span> Your Choices and Rights
                    </h3>
                    <p class="text-light mb-3">
                        You may contact us at any time to exercise the following rights regarding your personal data:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Update or correct your personal contact information.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Request confirmation of what data we hold regarding your active projects.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Opt out of non-essential communications and marketing notifications.
                        </li>
                    </ul>
                </div>

                <!-- Section 6: Contact -->
                <div class="legal-card" id="contact">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">6</span> Contact Us
                    </h3>
                    <p class="text-light mb-4">
                        If you have any questions or concerns about this Privacy Policy or how your data is handled, please reach out to us at:
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info-pill">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <strong>Email Inquiries</strong>
                                    <a href="mailto:info@funixdigital.com">info@funixdigital.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info-pill">
                                <i class="fas fa-building"></i>
                                <div>
                                    <strong>Company Name</strong>
                                    <p>Funix Digital</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contact-info-pill">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <strong>Office Location</strong>
                                    <p>24301 Brazos Town Crossing, Suite 500 PMB1053, Rosenberg, TX 77471 United States</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
