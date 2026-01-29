<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luxury — Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Lucide Icons (via CDN) -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <style>
    :root {
        --luxury-bg: #ffffff;
        --luxury-text: #111111;
        --luxury-muted: #6c757d;
        --luxury-border: #e9ecef;
        --luxury-accent: #111111;
    }

    body {
        font-family: 'Inter', sans-serif;
        color: var(--luxury-black);
        overflow-x: hidden;
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

    .navbar .nav-link {
        font-size: 0.85rem;
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 1px;
    }

    .navbar i {
        cursor: pointer;
    }

    .hero {
        padding: 64px 0 24px;
    }

    .hero h1 {
        font-weight: 700;
        letter-spacing: -0.02em;
    }

    .lead {
        color: var(--luxury-muted);
    }

    .card {
        border-color: var(--luxury-border);
    }

    .form-control {
        border-color: var(--luxury-border);
    }

    .btn-dark {
        background: var(--luxury-accent);
        border-color: var(--luxury-accent);
    }

    .section-title {
        font-weight: 600;
    }

    .map-placeholder {
        border: 1px dashed var(--luxury-border);
        border-radius: 8px;
        height: 220px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--luxury-muted);
        background: #fafafa;
    }

    .social a {
        color: var(--luxury-text);
        border: 1px solid var(--luxury-border);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        transition: background .2s, color .2s;
    }

    .social a:hover {
        background: var(--luxury-text);
        color: #fff;
    }

    /* Footer */
    footer {
        background-color: white;
        padding: 5rem 0 2rem;
        border-top: 1px solid #eee;
        margin-top: 4rem;
    }

    .footer-heading {
        font-size: 0.9rem;
        font-weight: 700;
        text-transform: uppercase;
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
        color: var(--luxury-text-muted);
        text-decoration: none;
        font-size: 0.85rem;
        transition: color 0.3s;
    }

    .footer-links a:hover {
        color: var(--luxury-black);
    }
    </style>
</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">LUXURY</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3 active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="about.php">About Us</a>
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
    <section class="hero">
        <div class="container">
            <h1 class="display-5 mb-3">Contact</h1>
            <p class="lead mb-0">
                We’d love to hear from you. Whether you’re looking for the perfect piece to complete your home,
                have questions about an order, or just want to say hello, our team is here to help.
            </p>
        </div>
    </section>

    <!-- Contact + Location -->
    <section class="py-4">
        <div class="container">
            <div class="row g-4">
                <!-- Contact form -->
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="section-title h4 mb-3">Send us a message</h2>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Value">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Value">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="5" placeholder="Value"></textarea>
                                </div>
                                <button type="submit" class="btn btn-dark px-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Location -->
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="section-title h4 mb-3">Our location</h2>
                            <p class="mb-1 fw-semibold">Your Brand Name</p>
                            <p class="mb-1">123 Main Street</p>
                            <p class="mb-3">Phnom Penh, Cambodia</p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.502986608757!2d104.92736972452724!3d11.587444543712145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095157d40fffff%3A0x7545c526597af0d3!2zTWVkaWNhbCBCdWlsZGluZyAoTm9ydG9uIFVuaXZlcnNpdHkpIOGeouGeguGetuGemkg!5e0!3m2!1sen!2skh!4v1769624433991!5m2!1sen!2skh"
                                width="590" height="310" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social -->
            <div class="mt-4">
                <h3 class="h5 mb-3">Social media</h3>
                <div class="social">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
                    <h6 class="footer-title">Use Cases</h6>
                    <ul class="footer-links">
                        <li><a href="#">UI design</a></li>
                        <li><a href="#">UX design</a></li>
                        <li><a href="#">Wireframing</a></li>
                        <li><a href="#">Diagramming</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title">Explore</h6>
                    <ul class="footer-links">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Prototyping</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Collaboration</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title">Resources</h6>
                    <ul class="footer-links">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Best practices</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Developers</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-5 text-center">
                <p class="text-muted text-uppercase" style="font-size: 0.6rem; letter-spacing: 2px;">© 2025 Luxury
                    Furniture. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    lucide.createIcons();
    </script>
</body>

</html>