<!DOCTYPE html>
<html lang="en">
<!-- price brand type tranding -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Furniture</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Lucide Icons (via CDN) -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
    body {
        font-family: 'Inter', sans-serif;
        color: #212529;
    }

    .navbar-brand {
        font-weight: 700;
        letter-spacing: -0.5px;
    }

    .hero-section {
        background-color: #e9ecef;
        height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .hero-text {
        font-weight: 300;
        letter-spacing: 0.5rem;
        text-transform: uppercase;
    }

    .category-grid img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .category-grid .img-wrapper:hover img {
        transform: scale(1.05);
    }

    .category-grid .img-wrapper {
        overflow: hidden;
        border-radius: 4px;
    }

    .category-grid .title-block {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .yellow-line {
        width: 50px;
        height: 4px;
        background-color: #ffc107;
        margin-bottom: 1.5rem;
    }

    .product-tabs .nav-link {
        border: none;
        color: #adb5bd;
        font-weight: 600;
        font-size: 0.9rem;
        padding-bottom: 1rem;
    }

    .product-tabs .nav-link.active {
        color: #000;
        border-bottom: 2px solid #000;
    }

    .product-card {
        border: none;
        text-align: center;
    }

    .product-card .img-container {
        aspect-ratio: 4/5;
        background-color: #f8f9fa;
        position: relative;
        overflow: hidden;
        margin-bottom: 1rem;
    }

    .product-card .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .product-card:hover .img-container img {
        transform: scale(1.05);
    }

    .btn-quick-view {
        position: absolute;
        bottom: 15px;
        left: 15px;
        right: 15px;
        background: white;
        border: none;
        padding: 8px;
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0;
        transition: opacity 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .product-card:hover .btn-quick-view {
        opacity: 1;
    }

    .contact-header {
        background-color: #e9ecef;
        padding: 100px 0;
        text-align: center;
    }

    .contact-header h1 {
        font-size: 4rem;
        font-weight: 700;
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

    .social-icons i {
        margin-right: 1rem;
        color: #adb5bd;
        cursor: pointer;
    }

    .social-icons i:hover {
        color: #000;
    }
    </style>
</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">LUXURY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link px-3 active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#">Shop</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#">Contact</a></li>
                </ul>
                <div class="d-flex align-items-center gap-4">
                    <i data-lucide="search" size="20"></i>
                    <i data-lucide="user" size="20"></i>
                    <i data-lucide="heart" size="20"></i>
                    <i data-lucide="shopping-cart" size="20"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero-section">
        <div class="text-center">
            <h1 class="display-1 hero-text text-secondary">Auto scroll</h1>
            <p class="text-muted mt-3">Discover our curated collection of luxury furniture pieces.</p>
        </div>
    </section>

    <!-- Categories -->
    <section class="container py-5 mt-5">
        <div class="row g-4 category-grid">
            <!-- Title Column -->
            <div class="col-lg-3 title-block">
                <h2 class="fw-bold mb-3">Shop <br>by categories</h2>
                <div class="yellow-line"></div>
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light p-3 rounded me-3">
                        <i data-lucide="layout-grid" class="text-secondary"></i>
                    </div>
                    <div>
                        <div class="fw-bold small">200+</div>
                        <div class="text-muted" style="font-size: 0.7rem;">Unique products</div>
                    </div>
                </div>
                <a href="#" class="text-dark fw-bold text-uppercase small text-decoration-none">
                    All Categories <i data-lucide="arrow-right" size="14" class="ms-1"></i>
                </a>
            </div>

            <!-- Squares Row 1 -->
            <div class="col-lg-3">
                <div class="img-wrapper">
                    <img src="https://picsum.photos/seed/cat1/500/500" alt="Category">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="img-wrapper">
                    <img src="https://picsum.photos/seed/cat2/500/500" alt="Category">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="img-wrapper">
                    <img src="https://picsum.photos/seed/cat3/500/500" alt="Category">
                </div>
            </div>

            <!-- Rectangles Row 2 -->
            <div class="col-lg-6">
                <div class="img-wrapper" style="height: 300px;">
                    <img src="https://picsum.photos/seed/cat4/1000/600" alt="Category" style="height: 300px;">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-wrapper" style="height: 300px;">
                    <img src="https://picsum.photos/seed/cat5/1000/600" alt="Category" style="height: 300px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="container py-5">
        <!-- Tabs -->
        <ul class="nav product-tabs justify-content-center mb-5 border-bottom">
            <li class="nav-item"><button class="nav-link">Sofa</button></li>
            <li class="nav-item"><button class="nav-link active">Bed</button></li>
            <li class="nav-item"><button class="nav-link">Chair</button></li>
            <li class="nav-item"><button class="nav-link">Mirror</button></li>
            <li class="nav-item"><button class="nav-link">Table</button></li>
        </ul>

        <!-- Filters -->
        <div class="row g-3 mb-5">
            <div class="col-md-3">
                <select class="form-select form-select-sm text-uppercase fw-bold text-muted letter-spacing-1">
                    <option selected>Categories</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select form-select-sm text-uppercase fw-bold text-muted letter-spacing-1">
                    <option selected>Color</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select form-select-sm text-uppercase fw-bold text-muted letter-spacing-1">
                    <option selected>Size</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select form-select-sm text-uppercase fw-bold text-muted letter-spacing-1">
                    <option selected>Price</option>
                </select>
            </div>
        </div>

        <!-- Grid -->
        <div class="row g-5">
            <!-- Product Item -->
            <div class="col-sm-6 col-lg-3">
                <div class="product-card">
                    <div class="img-container">
                        <img src="https://picsum.photos/seed/p1/500/600" alt="Product">
                        <button class="btn-quick-view">Quick View</button>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase small fw-bold mb-1">Double Bed</h6>
                        <div class="text-warning mb-1" style="font-size: 10px;">
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" size="12"></i>
                        </div>
                        <p class="text-danger fw-bold small">$799</p>
                    </div>
                </div>
            </div>
            <!-- Repeat Items -->
            <div class="col-sm-6 col-lg-3">
                <div class="product-card">
                    <div class="img-container">
                        <img src="https://picsum.photos/seed/p2/500/600" alt="Product">
                        <button class="btn-quick-view">Quick View</button>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase small fw-bold mb-1">Modern Frame</h6>
                        <div class="text-warning mb-1" style="font-size: 10px;">
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                        </div>
                        <p class="text-danger fw-bold small">$899</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="product-card">
                    <div class="img-container">
                        <img src="https://picsum.photos/seed/p3/500/600" alt="Product">
                        <button class="btn-quick-view">Quick View</button>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase small fw-bold mb-1">Luxury Suite</h6>
                        <div class="text-warning mb-1" style="font-size: 10px;">
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" size="12"></i>
                            <i data-lucide="star" size="12"></i>
                        </div>
                        <p class="text-danger fw-bold small">$1,299</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="product-card">
                    <div class="img-container">
                        <img src="https://picsum.photos/seed/p4/500/600" alt="Product">
                        <button class="btn-quick-view">Quick View</button>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase small fw-bold mb-1">Minimalist Bed</h6>
                        <div class="text-warning mb-1" style="font-size: 10px;">
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" fill="currentColor" size="12"></i>
                            <i data-lucide="star" size="12"></i>
                        </div>
                        <p class="text-danger fw-bold small">$650</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Header -->
    <section class="contact-header mt-5">
        <h1 class="text-uppercase">Contact</h1>
    </section>

    <!-- Contact Section -->
    <section class="container py-5 mb-5">
        <div class="mb-5">
            <h3 class="fw-bold mb-3">We'd Love to Hear From You</h3>
            <p class="text-muted small col-md-8">
                Whether you're looking for the perfect piece to complete your home, have questions about an order,
                or just want to say hello, our team is here to help.
            </p>
        </div>

        <div class="row g-5">
            <div class="col-lg-6">
                <form class="mb-5">
                    <div class="mb-3">
                        <label class="form-label text-uppercase small fw-bold text-muted letter-spacing-1">Name</label>
                        <input type="text" class="form-control rounded-0" placeholder="Value">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-uppercase small fw-bold text-muted letter-spacing-1">Email</label>
                        <input type="email" class="form-control rounded-0" placeholder="Value">
                    </div>
                    <div class="mb-4">
                        <label
                            class="form-label text-uppercase small fw-bold text-muted letter-spacing-1">Message</label>
                        <textarea class="form-control rounded-0" rows="5" placeholder="Value"></textarea>
                    </div>
                    <button type="submit"
                        class="btn btn-dark w-100 rounded-0 py-3 text-uppercase small fw-bold letter-spacing-1">Submit</button>
                </form>

                <div class="mt-5">
                    <p class="text-uppercase small fw-bold text-muted letter-spacing-1 mb-3">Social Media</p>
                    <div class="social-icons d-flex">
                        <i data-lucide="facebook"></i>
                        <i data-lucide="twitter"></i>
                        <i data-lucide="youtube"></i>
                        <i data-lucide="instagram"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mb-4">
                    <p class="text-uppercase small fw-bold text-muted letter-spacing-1 mb-1">Our Location</p>
                    <h5 class="fw-bold">(Real World Name)</h5>
                    <p class="text-muted small mb-0">123 Main Street</p>
                    <p class="text-muted small">Phnom Penh, Cambodia</p>
                </div>
                <div class="bg-light d-flex align-items-center justify-content-center"
                    style="height: 300px; position: relative;">
                    <img src="https://picsum.photos/seed/map/800/600"
                        class="w-100 h-100 object-fit-cover opacity-50 grayscale" alt="Map">
                    <div class="position-absolute text-uppercase text-secondary h2 fw-light letter-spacing-2">Map</div>
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

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Initialize icons
    lucide.createIcons();
    </script>
</body>

</html>