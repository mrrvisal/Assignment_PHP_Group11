<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luxury — Contact</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    :root {
        --luxury-bg: #ffffff;
        --luxury-text: #111111;
        --luxury-muted: #6c757d;
        --luxury-border: #e9ecef;
        --luxury-accent: #111111;
    }

    body {
        background: var(--luxury-bg);
        color: var(--luxury-text);
    }

    .navbar {
        border-bottom: 1px solid var(--luxury-border);
    }

    .nav-link {
        color: var(--luxury-text);
    }

    .nav-link.active {
        font-weight: 600;
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

    footer {
        border-top: 1px solid var(--luxury-border);
    }

    footer a {
        color: var(--luxury-text);
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Luxury</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link px-3 active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="shop.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="contact.php">Contact</a></li>
                </ul>
                <div class="d-flex gap-3">
                    <a href="#" class="text-dark"><i class="bi bi-search"></i></a>
                    <a href="#" class="text-dark"><i class="bi bi-person"></i></a>
                    <a href="#" class="text-dark position-relative">
                        <i class="bi bi-bag"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">0</span>
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
                            <div class="map-placeholder">Map</div>
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
    <footer class="py-5 mt-4 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="mb-3">Use cases</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">UI design</a></li>
                        <li><a href="#">UX design</a></li>
                        <li><a href="#">Wireframing</a></li>
                        <li><a href="#">Brainstorming</a></li>
                        <li><a href="#">Online whiteboard</a></li>
                        <li><a href="#">Team collaboration</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">Explore</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Prototyping</a></li>
                        <li><a href="#">Development features</a></li>
                        <li><a href="#">Design systems</a></li>
                        <li><a href="#">Collaboration features</a></li>
                        <li><a href="#">Plugins</a></li>
                        <li><a href="#">Figma community</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">Resources</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Best practices</a></li>
                        <li><a href="#">Colors</a></li>
                        <li><a href="#">Color wheel</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Resource library</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>