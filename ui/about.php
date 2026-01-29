<?php
// about.php — LUXURY | About Us

// (Optional) You could reuse your category/products includes if needed,
// but this page is static and focused on brand story/content.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LUXURY | About Us</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
    :root {
        --luxury-black: #1a1a1a;
        --luxury-gray: #f8f9fa;
        --luxury-text-muted: #6c757d;
        --accent-color: #004d40;
        /* deep green accent (kept same) */
        --gold: #c9a227;
    }

    body {
        font-family: 'Inter', sans-serif;
        color: var(--luxury-black);
        overflow-x: hidden;
        background-color: #fff;
    }

    h1,
    h2,
    h3,
    .navbar-brand {
        font-family: 'Playfair Display', serif;
    }

    .navbar-brand {
        font-size: 1.5rem;
        letter-spacing: 2px;
        font-weight: 700;
    }

    .nav-link {
        font-size: 0.85rem;
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 1px;
        color: var(--luxury-black) !important;
        margin: 0 10px;
    }

    .hero-mini {
        background-color: #e9ecef;
        min-height: 45vh;
        display: grid;
        place-items: center;
        position: relative;
        text-align: center;
    }

    .hero-mini .overlay {
        position: absolute;
        inset: 0;
        background: rgba(255, 255, 255, 0.35);
    }

    .hero-mini .content {
        position: relative;
        z-index: 2;
    }

    .eyebrow {
        letter-spacing: 0.25rem;
        text-transform: uppercase;
        font-size: 0.75rem;
        color: var(--luxury-text-muted);
        font-weight: 700;
    }

    .divider-gold {
        width: 60px;
        height: 3px;
        background-color: var(--gold);
        margin: 1rem auto 0;
    }

    .lead-wide {
        max-width: 720px;
        margin: 1rem auto 0;
        color: #333;
    }

    .section {
        padding: 80px 0;
    }

    .values-card {
        background: #fff;
        border: 1px solid #eee;
        padding: 28px;
        height: 100%;
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .values-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
    }

    .values-card i {
        color: var(--accent-color);
    }

    .story-img {
        width: 100%;
        height: 420px;
        object-fit: cover;
        border-radius: 6px;
    }

    .quote {
        border-left: 3px solid var(--luxury-black);
        padding-left: 1rem;
        font-style: italic;
    }

    .kpi {
        text-align: center;
    }

    .kpi h3 {
        font-size: 2.25rem;
        font-weight: 800;
        margin-bottom: .25rem;
    }

    .badge-soft {
        background-color: #f3f6f5;
        color: var(--accent-color);
        border: 1px solid #e3efec;
        font-weight: 600;
        letter-spacing: .5px;
    }

    .list-check {
        list-style: none;
        padding-left: 0;
    }

    .list-check li {
        display: flex;
        align-items: center;
        gap: .5rem;
        margin-bottom: .5rem;
        color: #333;
    }

    .list-check li i {
        color: var(--accent-color);
    }

    .testi-card {
        background: #fff;
        border: 1px solid #eee;
        padding: 24px;
        height: 100%;
    }

    .faq .accordion-button {
        font-weight: 600;
        letter-spacing: .3px;
    }

    footer {
        background-color: white;
        padding: 5rem 0 2rem;
        border-top: 1px solid #eee;
        margin-top: 4rem;
    }

    .footer-title {
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 1.5rem;
    }

    .footer-links {
        list-style: none;
        padding: 0;
    }

    .footer-links li {
        margin-bottom: 0.5rem;
    }

    .footer-links a {
        text-decoration: none;
        color: #6c757d;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .footer-links a:hover {
        color: #000;
    }
    </style>
</head>

<body>
    <!-- Header (same navbar) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">LUXURY</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 active" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="contact.php">Contact</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-4">
                    <i data-lucide="search" size="20"></i>
                    <i data-lucide="heart" size="20"></i>

                    <a href="cart.php" class="text-dark position-relative">
                        <i data-lucide="shopping-cart" size="20"></i>
                    </a>

                    <a href="../views/auth/login.php" class="text-dark">
                        <i data-lucide="user" size="20"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero-mini">
        <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=1600&q=80"
            alt="Brand Mood" class="position-absolute top-0 start-0 w-100 h-100"
            style="object-fit:cover; filter: grayscale(10%); opacity:.28;">
        <div class="overlay"></div>
        <div class="content container">
            <div class="eyebrow">Since 2019</div>
            <h1 class="display-5 fw-bold mt-2">Crafting Calm, One Piece at a Time</h1>
            <div class="divider-gold"></div>
            <p class="lead lead-wide">
                At LUXURY, we design minimalist furniture and decor that elevate everyday living—quietly refined,
                sustainably made, and built to last.
            </p>
        </div>
    </section>

    <!-- Brand Story -->
    <section class="section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img class="story-img"
                        src="https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=1400&q=80"
                        alt="Workshop">
                </div>
                <div class="col-lg-6">
                    <span class="eyebrow">Our Story</span>
                    <h2 class="mt-2">Design with Intention</h2>
                    <p class="text-muted">
                        What began as a small studio has grown into a multi-disciplinary team of designers and artisans
                        united by a simple idea:
                        create timeless furniture that blends seamlessly into modern homes—beautiful, durable, and
                        responsible.
                    </p>
                    <div class="quote my-3">
                        “We believe luxury is quiet confidence—the details you feel every day, not the ones shouting for
                        attention.”
                    </div>
                    <div class="row g-3 mt-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3">
                                <i data-lucide="palette" size="22"></i>
                                <div>
                                    <h6 class="mb-1">Timeless Aesthetics</h6>
                                    <p class="mb-0 text-muted small">Neutral palettes, clean lines, and thoughtful
                                        proportions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3">
                                <i data-lucide="recycle" size="22"></i>
                                <div>
                                    <h6 class="mb-1">Responsible Materials</h6>
                                    <p class="mb-0 text-muted small">FSC-certified wood and low-impact finishes wherever
                                        possible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="shop.php" class="btn btn-dark rounded-0 mt-4 px-4">Explore the Collection</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="section" style="background-color: var(--luxury-gray);">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow">What We Stand For</span>
                <h2 class="mt-2">Our Values</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="values-card">
                        <i data-lucide="ruler" size="24"></i>
                        <h6 class="mt-3 mb-2">Precision</h6>
                        <p class="text-muted small mb-0">Every radius, seam, and joint is carefully considered.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="values-card">
                        <i data-lucide="leaf" size="24"></i>
                        <h6 class="mt-3 mb-2">Sustainability</h6>
                        <p class="text-muted small mb-0">Materials and processes chosen for a lighter footprint.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="values-card">
                        <i data-lucide="shield" size="24"></i>
                        <h6 class="mt-3 mb-2">Durability</h6>
                        <p class="text-muted small mb-0">Pieces designed to age gracefully with your home.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="values-card">
                        <i data-lucide="hand" size="24"></i>
                        <h6 class="mt-3 mb-2">Craft</h6>
                        <p class="text-muted small mb-0">Built by skilled makers who care about the details.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Craftsmanship + Sustainability split -->
    <section class="section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <span class="eyebrow">Craftsmanship</span>
                    <h3 class="mt-2">From Workshop to Home</h3>
                    <p class="text-muted">
                        We partner with small-batch workshops to ensure quality at every step—from kiln-dried hardwood
                        selection to hand-finished surfaces.
                    </p>
                    <ul class="list-check mt-3">
                        <li><i data-lucide="check-circle" size="18"></i> FSC-certified solid wood & veneers</li>
                        <li><i data-lucide="check-circle" size="18"></i> Non-toxic, low-VOC finishes</li>
                        <li><i data-lucide="check-circle" size="18"></i> Precision joinery & stress testing</li>
                    </ul>
                    <span class="badge badge-soft rounded-pill mt-3 px-3 py-2 d-inline-block">Lifetime Support</span>
                </div>
                <div class="col-lg-6">
                    <img class="story-img"
                        src="https://images.unsplash.com/photo-1503602642458-232111445657?auto=format&fit=crop&w=1400&q=80"
                        alt="Materials">
                </div>
            </div>

            <div class="row g-5 align-items-center mt-5">
                <div class="col-lg-6 order-lg-2">
                    <span class="eyebrow">Sustainability</span>
                    <h3 class="mt-2">Design That Respects the Future</h3>
                    <p class="text-muted">
                        Responsible sourcing and modular design help extend product life and reduce waste.
                    </p>
                    <ul class="list-check mt-3">
                        <li><i data-lucide="check-circle" size="18"></i> Repairable components & spare parts</li>
                        <li><i data-lucide="check-circle" size="18"></i> Recyclable packaging with minimal ink</li>
                        <li><i data-lucide="check-circle" size="18"></i> Ethical supply chain audits</li>
                    </ul>
                    <a href="contact.php" class="btn btn-outline-dark rounded-0 mt-3 px-4">Ask About Materials</a>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <img class="story-img"
                        src="https://images.unsplash.com/photo-1615800002234-05c6a3e0f1fe?auto=format&fit=crop&w=1400&q=80"
                        alt="Sustainability">
                </div>
            </div>
        </div>
    </section>

    <!-- Numbers / KPIs -->
    <section class="section" style="background-color: var(--luxury-gray);">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3 kpi">
                    <h3>50+</h3>
                    <p class="text-muted small mb-0">Artisan Partners</p>
                </div>
                <div class="col-6 col-md-3 kpi">
                    <h3>18k</h3>
                    <p class="text-muted small mb-0">Pieces Delivered</p>
                </div>
                <div class="col-6 col-md-3 kpi">
                    <h3>96%</h3>
                    <p class="text-muted small mb-0">Customer Satisfaction</p>
                </div>
                <div class="col-6 col-md-3 kpi">
                    <h3>100%</h3>
                    <p class="text-muted small mb-0">FSC Sources</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow">Testimonials</span>
                <h2 class="mt-2">Loved by Design-Led Homes</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="testi-card h-100">
                        <div class="d-flex align-items-center gap-3">
                            <i data-lucide="quote" size="20"></i>
                            <strong>Minimalist Dream</strong>
                        </div>
                        <p class="mt-3 mb-0 text-muted">
                            “The quality is unreal. It feels premium without being flashy—exactly what we wanted.”
                        </p>
                        <p class="small text-uppercase text-muted mt-3 mb-0">— Dara S.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testi-card h-100">
                        <div class="d-flex align-items-center gap-3">
                            <i data-lucide="quote" size="20"></i>
                            <strong>Built to Last</strong>
                        </div>
                        <p class="mt-3 mb-0 text-muted">
                            “We’ve moved twice and our sideboard still looks brand new. Solid craftsmanship.”
                        </p>
                        <p class="small text-uppercase text-muted mt-3 mb-0">— Chantha M.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testi-card h-100">
                        <div class="d-flex align-items-center gap-3">
                            <i data-lucide="quote" size="20"></i>
                            <strong>Effortless</strong>
                        </div>
                        <p class="mt-3 mb-0 text-muted">
                            “Delivery was smooth, assembly was quick, and the design elevates our living room.”
                        </p>
                        <p class="small text-uppercase text-muted mt-3 mb-0">— Sreyna K.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section faq" style="background-color: var(--luxury-gray);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <span class="eyebrow d-block text-center">FAQ</span>
                    <h2 class="text-center mt-2 mb-4">Good to Know</h2>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#a1" aria-expanded="true">
                                    What’s your delivery timeline?
                                </button>
                            </h2>
                            <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Most in-stock items ship within 3–5 business days. Made-to-order pieces vary by
                                    workshop and will display lead times at checkout.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#a2">
                                    Do you offer assembly?
                                </button>
                            </h2>
                            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes—white-glove delivery and assembly are available in select regions at checkout.
                                    Self-assembly pieces include clear instructions and required hardware.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#a3">
                                    What is your return policy?
                                </button>
                            </h2>
                            <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Returns are accepted within 14 days of delivery for unused items in original
                                    packaging. Custom pieces are final sale unless defective.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#a4">
                                    How do you source materials?
                                </button>
                            </h2>
                            <div id="a4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We prioritize FSC-certified wood, recycled metal, and low-VOC finishes. Detailed
                                    specs are available on each product page.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="contact.php" class="btn btn-dark rounded-0 px-4">Still have questions?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <h3 class="mb-2">Visit Our Showroom</h3>
                    <p class="text-muted mb-0">Experience materials, proportions, and finishes in person. Our team will
                        help you find the right piece for your space.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="contact.php" class="btn btn-outline-dark rounded-0 px-4">Book an Appointment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (same style as your existing page) -->
    <footer class="border-top py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <h5 class="navbar-brand mb-4">LUXURY</h5>
                    <div class="d-flex gap-3 text-muted">
                        <i data-lucide="share-2" size="18"></i>
                        <i data-lucide="globe" size="18"></i>
                        <i data-lucide="youtube" size="18"></i>
                        <i data-lucide="linkedin" size="18"></i>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="text-uppercase small fw-bold mb-3">Use Cases</h6>
                    <ul class="footer-links list-unstyled">
                        <li><a href="#">UI design</a></li>
                        <li><a href="#">UX design</a></li>
                        <li><a href="#">Wireframing</a></li>
                        <li><a href="#">Diagramming</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="text-uppercase small fw-bold mb-3">Explore</h6>
                    <ul class="footer-links list-unstyled">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Prototyping</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Collaboration</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="text-uppercase small fw-bold mb-3">Resources</h6>
                    <ul class="footer-links list-unstyled">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Best practices</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Developers</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-5 text-center">
                <p class="text-muted text-uppercase" style="font-size: 0.6rem; letter-spacing: 2px;">
                    © 2025 Luxury Furniture. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script>
    lucide.createIcons();
    </script>
</body>

</html>
``