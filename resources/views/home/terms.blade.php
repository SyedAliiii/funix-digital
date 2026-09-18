@extends('home.layout.master')

@section('title', 'Terms and Conditions')

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
    .legal-callout {
        background: rgba(69, 248, 130, 0.05);
        border: 1px solid rgba(69, 248, 130, 0.2);
        border-radius: 16px;
        padding: 24px;
        margin: 25px 0;
    }
    .legal-callout-title {
        color: #ffffff;
        font-size: 17px;
        font-weight: 600;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .legal-callout-title i {
        color: var(--theme-color, #45f882);
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
            <h1 class="breadcumb-title">Terms & Conditions</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Terms & Conditions</li>
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
                    <h3 class="legal-nav-title"><i class="fas fa-file-contract text-theme me-2"></i> Quick Navigation</h3>
                    <ul class="legal-nav-links">
                        <li><a href="#scope"><i class="fas fa-cube me-2"></i> 1. Scope of Services <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#payments"><i class="fas fa-credit-card me-2"></i> 2. Payments & Invoicing <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#intellectual-property"><i class="fas fa-shield-halved me-2"></i> 3. Intellectual Property <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#refund-cancellation"><i class="fas fa-rotate-left me-2"></i> 4. Refunds & Cancellation <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#liability"><i class="fas fa-scale-balanced me-2"></i> 5. Limitation of Liability <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#disputes"><i class="fas fa-handshake me-2"></i> 6. Disputes & Chargebacks <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#contact"><i class="fas fa-headset me-2"></i> 7. Contact Information <i class="fas fa-chevron-right"></i></a></li>
                    </ul>

                    <div class="mt-4 pt-3 border-top border-secondary border-opacity-25">
                        <span class="text-white small fw-bold d-block mb-2"><i class="fas fa-link text-theme me-1"></i> Related Legal Pages:</span>
                        <a href="{{ route('privacy') }}" class="th-btn btn-sm w-100 text-center">
                            <i class="fas fa-user-shield me-1"></i> View Privacy Policy
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Full Terms and Conditions Content -->
            <div class="col-lg-8 col-xl-8">
                <!-- Introduction Card -->
                <div class="legal-card">
                    <div class="legal-badge"><i class="fas fa-calendar-check"></i> Effective Date: September 10, 2026</div>
                    <h2 class="sec-title text-white mb-3">Funix Digital — Terms and Conditions</h2>
                    <p class="mb-3 text-light">
                        Welcome to <strong>Funix Digital</strong> ("Company," "we," "us," or "our"). By accessing our website, purchasing our services, or paying an invoice issued by us, you ("Client" or "you") agree to be bound by these Terms and Conditions. Please review them carefully before engaging our services.
                    </p>
                    <p class="mb-0 text-muted small">
                        These Terms apply to all visitors, clients, and partners who access or use our design, consulting, and digital development services.
                    </p>
                </div>

                <!-- Section 1 -->
                <div class="legal-card" id="scope">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">1</span> Scope of Services
                    </h3>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Comprehensive Solutions:</strong> Funix Digital provides professional design consulting, strategic advisory, digital product development, and conceptual brand solutions.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Project Definition:</strong> Each project or service engagement is defined by its specific invoice, statement of work, or project scope agreed upon by both parties.
                        </li>
                    </ul>
                </div>

                <!-- Section 2 -->
                <div class="legal-card" id="payments">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">2</span> Payments and Invoicing
                    </h3>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Due Dates:</strong> All invoices issued by Funix Digital (including payments processed via Stripe, Cash App Pay, or other electronic gateways) are due by the specified due date on the invoice.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Payment Authorization:</strong> By submitting payment, you confirm that you are authorized to use the designated payment method and that you approve the charges for the itemized services listed.
                        </li>
                    </ul>
                </div>

                <!-- Section 3 -->
                <div class="legal-card" id="intellectual-property">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">3</span> Intellectual Property and Delivery
                    </h3>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Ownership Retention:</strong> Unless otherwise agreed in a separate written contract, all intellectual property, strategic frameworks, and conceptual designs remain the property of Funix Digital until full payment is received.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Usage Rights:</strong> Upon full payment, the client receives rights to use the specific final deliverables for their business use as outlined in the project scope.
                        </li>
                    </ul>
                </div>

                <!-- Section 4: Refund and Cancellation Policy -->
                <div class="legal-card" id="refund-cancellation">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">4</span> Refund and Cancellation Policy
                    </h3>
                    <p class="text-light mb-3">
                        Funix Digital specializes in professional design consulting, strategic advisory, and custom digital services. Because our work involves specialized labor, strategic research, and intellectual development, our policy regarding refunds and cancellations is strictly enforced:
                    </p>

                    <div class="legal-callout">
                        <div class="legal-callout-title">
                            <i class="fas fa-ban"></i> Digital Services & Professional Labor
                        </div>
                        <p class="mb-0 text-light small">
                            All purchases of digital services, brand identity development, and positioning strategy consulting are non-refundable once the project has been initiated, consultation has occurred, or initial digital deliverables have been provided. Because professional labor and expertise cannot be returned, we do not offer refunds for completed advisory sessions or customized strategy documents.
                        </p>
                    </div>

                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Project Cancellations:</strong> If you wish to cancel a project before work has begun or before any deliverables have been sent, you must notify us in writing via email at <a href="mailto:info@funixdigital.com" class="text-theme">info@funixdigital.com</a>. Cancellations requested prior to the start of work may be eligible for a partial or full refund, minus any administrative or transaction processing fees incurred.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Mutual Cancellations:</strong> Mutual cancellations requested prior to the commencement of work are evaluated on a case-by-case basis at the sole discretion of Funix Digital.
                        </li>
                    </ul>
                </div>

                <!-- Section 5 -->
                <div class="legal-card" id="liability">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">5</span> Limitation of Liability
                    </h3>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Consulting Outcomes:</strong> Funix Digital provides professional consulting and strategic advice in good faith. We do not guarantee specific financial results, market growth, or revenue outcomes from our brand identity and positioning strategies.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Maximum Liability:</strong> To the maximum extent permitted by law, Funix Digital’s total liability for any claims arising under an invoice or service agreement shall not exceed the total amount paid by the client for that specific service.
                        </li>
                    </ul>
                </div>

                <!-- Section 6 -->
                <div class="legal-card" id="disputes">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">6</span> Dispute Resolution and Chargebacks
                    </h3>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Direct Amicable Resolution:</strong> In the event of any billing questions or discrepancies, clients agree to contact us directly at <a href="mailto:info@funixdigital.com" class="text-theme">info@funixdigital.com</a> to seek an amicable resolution before filing a payment dispute or chargeback with their financial institution.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Contested Chargebacks:</strong> Filing an unauthorized chargeback for services that have been fully rendered in good faith constitutes a breach of these terms. We reserve the right to submit all project records, invoices, delivery proofs, and communication logs to payment processors and card networks to heavily contest any unauthorized chargeback.
                        </li>
                    </ul>
                </div>

                <!-- Section 7: Contact -->
                <div class="legal-card" id="contact">
                    <h3 class="legal-section-title">
                        <span class="legal-num-badge">7</span> Contact Information
                    </h3>
                    <p class="text-light mb-4">
                        If you have any questions, clarifications, or concerns regarding these Terms and Conditions or your project status, please reach out to our team:
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
