<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury | Premium E-Commerce</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap"
        rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
    :root {
        --luxury-black: #1a1a1a;
        --luxury-gold: #d4af37;
        --luxury-gray: #f8f9fa;
    }

    body {
        font-family: 'Inter', sans-serif;
        color: var(--luxury-black);
        background-color: #ffffff;
        overflow-x: hidden;
    }

    h1,
    h2,
    h3,
    .brand-font {
        font-family: 'Playfair Display', serif;
    }

    .navbar {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid #eee;
    }

    .nav-link {
        font-weight: 500;
        color: var(--luxury-black) !important;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: opacity 0.2s;
    }

    .nav-link:hover {
        opacity: 0.6;
    }

    .hero-banner {
        background-color: var(--luxury-gray);
        padding: 100px 0;
        margin-bottom: 60px;
    }

    .product-card {
        border: none;
        transition: transform 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
    }

    .product-image-container {
        background-color: var(--luxury-gray);
        aspect-ratio: 1/1;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .product-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .btn-luxury {
        background-color: var(--luxury-black);
        color: white;
        border-radius: 0;
        padding: 12px 30px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: 1px solid var(--luxury-black);
        transition: all 0.3s ease;
    }

    .btn-luxury:hover {
        background-color: white;
        color: var(--luxury-black);
    }

    .btn-outline-luxury {
        background-color: transparent;
        color: var(--luxury-black);
        border-radius: 0;
        padding: 12px 30px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: 1px solid #ddd;
        transition: all 0.3s ease;
    }

    .btn-outline-luxury:hover {
        border-color: var(--luxury-black);
    }

    .quantity-control {
        display: inline-flex;
        align-items: center;
        border: 1px solid #ddd;
        background: #fff;
    }

    .quantity-control button {
        border: none;
        background: none;
        padding: 8px 15px;
        cursor: pointer;
    }

    .size-badge {
        cursor: pointer;
        border: 1px solid #ddd;
        padding: 8px 20px;
        margin-right: 10px;
        font-size: 0.85rem;
        transition: all 0.2s;
    }

    .size-badge.active {
        background-color: var(--luxury-black);
        color: white;
        border-color: var(--luxury-black);
    }

    .color-dot {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 10px;
        cursor: pointer;
        border: 2px solid transparent;
    }

    .color-dot.active {
        border-color: var(--luxury-black);
        box-shadow: 0 0 0 2px white inset;
    }

    footer {
        background-color: #fff;
        border-top: 1px solid #eee;
        padding-top: 80px;
        padding-bottom: 40px;
    }

    .footer-title {
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 25px;
    }

    .footer-link {
        color: #666;
        text-decoration: none;
        font-size: 0.9rem;
        display: block;
        margin-bottom: 12px;
        transition: color 0.2s;
    }

    .footer-link:hover {
        color: var(--luxury-black);
    }

    .thumbnail-list img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        margin-bottom: 10px;
        cursor: pointer;
        border: 1px solid #eee;
        opacity: 0.7;
        transition: opacity 0.2s;
    }

    .thumbnail-list img:hover,
    .thumbnail-list img.active {
        opacity: 1;
        border-color: var(--luxury-black);
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top py-3">
        <div class="container">
            <a class="navbar-brand brand-font fs-3" href="#">LUXURY</a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i data-lucide="menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link mx-2" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link mx-2" href="#">Shop</a></li>
                    <li class="nav-item"><a class="nav-link mx-2" href="#">Collections</a></li>
                    <li class="nav-item"><a class="nav-link mx-2" href="#">About</a></li>
                </ul>
                <div class="d-flex align-items-center gap-4">
                    <a href="#" class="text-dark"><i data-lucide="search" size="20"></i></a>
                    <a href="#" class="text-dark"><i data-lucide="user" size="20"></i></a>
                    <a href="#" class="text-dark position-relative">
                        <i data-lucide="shopping-bag" size="20"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark"
                            style="font-size: 0.6rem;">2</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <header class="hero-banner text-center">
            <div class="container">
                <h1 class="display-3 mb-0 uppercase tracking-widest">PRODUCT DETAIL</h1>
            </div>
        </header>

        <!-- Product Section -->
        <section class="container mb-5">
            <div class="row g-5">
                <!-- Left: Images -->
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-2 d-none d-md-block thumbnail-list">
                            <img src="https://picsum.photos/400/400?random=1" class="active img-fluid" alt="thumb">
                            <img src="https://picsum.photos/400/400?random=2" class="img-fluid" alt="thumb">
                            <img src="https://picsum.photos/400/400?random=3" class="img-fluid" alt="thumb">
                            <img src="https://picsum.photos/400/400?random=4" class="img-fluid" alt="thumb">
                        </div>
                        <div class="col-md-10">
                            <div class="bg-light rounded overflow-hidden">
                                <img src="https://picsum.photos/800/800?random=1" class="img-fluid w-100"
                                    alt="main product">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Details -->
                <div class="col-lg-5">
                    <div class="ps-lg-4">
                        <nav aria-label="breadcrumb" class="mb-4">
                            <ol class="breadcrumb" style="font-size: 0.8rem;">
                                <li class="breadcrumb-item"><a href="#" class="text-muted text-decoration-none">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"
                                        class="text-muted text-decoration-none">Furniture</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modern Bed</li>
                            </ol>
                        </nav>

                        <h2 class="display-5 mb-3">Velvet Dream Bed</h2>

                        <div class="d-flex align-items-center mb-4 text-warning">
                            <i data-lucide="star" fill="currentColor" size="16"></i>
                            <i data-lucide="star" fill="currentColor" size="16"></i>
                            <i data-lucide="star" fill="currentColor" size="16"></i>
                            <i data-lucide="star" fill="currentColor" size="16"></i>
                            <i data-lucide="star" size="16"></i>
                            <span class="ms-2 text-muted small">(124 Reviews)</span>
                        </div>

                        <div class="mb-4">
                            <span class="fs-2 fw-bold text-dark">$1,299.00</span>
                            <span class="ms-3 text-muted text-decoration-line-through">$1,599.00</span>
                        </div>

                        <p class="text-muted mb-5 leading-relaxed">
                            Crafted with premium Italian velvet and a solid oak frame, the Velvet Dream Bed combines
                            timeless elegance with unparalleled comfort. Perfect for modern minimalist spaces.
                        </p>

                        <!-- Options -->
                        <div class="mb-4">
                            <label class="d-block mb-3 small fw-bold text-uppercase tracking-wider">Color</label>
                            <div class="d-flex">
                                <span class="color-dot active" style="background-color: #1a1a1a;"></span>
                                <span class="color-dot" style="background-color: #2c3e50;"></span>
                                <span class="color-dot" style="background-color: #95a5a6;"></span>
                                <span class="color-dot" style="background-color: #7f8c8d;"></span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="d-block mb-3 small fw-bold text-uppercase tracking-wider">Size</label>
                            <div class="d-flex">
                                <span class="size-badge">Single</span>
                                <span class="size-badge active">Queen</span>
                                <span class="size-badge">King</span>
                            </div>
                        </div>

                        <div class="row g-3 mb-5">
                            <div class="col-md-4">
                                <div class="quantity-control w-100 justify-content-between">
                                    <button onclick="decrement()"><i data-lucide="minus" size="14"></i></button>
                                    <span id="qty" class="fw-bold">1</span>
                                    <button onclick="increment()"><i data-lucide="plus" size="14"></i></button>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <button class="btn btn-luxury w-100">Add to Cart</button>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-luxury w-100">Quick Buy</button>
                            </div>
                        </div>

                        <div class="border-top pt-4">
                            <div class="d-flex align-items-center gap-3 text-muted small mb-2">
                                <i data-lucide="truck" size="16"></i>
                                <span>Free worldwide shipping on orders over $2000</span>
                            </div>
                            <div class="d-flex align-items-center gap-3 text-muted small">
                                <i data-lucide="shield-check" size="16"></i>
                                <span>2 Year limited warranty</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recommended Section -->
        <section class="container py-5">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <h2 class="mb-1">You May Also Like</h2>
                    <p class="text-muted small mb-0">Specially curated pieces for your home</p>
                </div>
                <a href="#"
                    class="text-dark fw-bold text-decoration-none small text-uppercase tracking-wider border-bottom border-dark">View
                    All</a>
            </div>

            <div class="row row-cols-2 row-cols-md-4 g-4">
                <!-- Related Item 1 -->
                <div class="col">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="https://picsum.photos/500/600?random=10" alt="item">
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="fs-6 mb-1">Oak Side Table</h3>
                            <p class="fw-bold mb-0">$340.00</p>
                        </div>
                    </div>
                </div>
                <!-- Related Item 2 -->
                <div class="col">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="https://picsum.photos/500/600?random=11" alt="item">
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="fs-6 mb-1">Minimalist Lamp</h3>
                            <p class="fw-bold mb-0">$180.00</p>
                        </div>
                    </div>
                </div>
                <!-- Related Item 3 -->
                <div class="col">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="https://picsum.photos/500/600?random=12" alt="item">
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="fs-6 mb-1">Velvet Cushion</h3>
                            <p class="fw-bold mb-0">$85.00</p>
                        </div>
                    </div>
                </div>
                <!-- Related Item 4 -->
                <div class="col">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="https://picsum.photos/500/600?random=13" alt="item">
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="fs-6 mb-1">Silk Bedding Set</h3>
                            <p class="fw-bold mb-0">$450.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <a class="navbar-brand brand-font fs-3 d-block mb-4" href="#">LUXURY</a>
                    <p class="text-muted small mb-4 pe-lg-5">
                        Experience the ultimate in high-end living with our curated collection of luxury furniture and
                        lifestyle goods.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-dark"><i data-lucide="instagram" size="20"></i></a>
                        <a href="#" class="text-dark"><i data-lucide="facebook" size="20"></i></a>
                        <a href="#" class="text-dark"><i data-lucide="twitter" size="20"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <h4 class="footer-title">Shop</h4>
                    <a href="#" class="footer-link">New Arrivals</a>
                    <a href="#" class="footer-link">Best Sellers</a>
                    <a href="#" class="footer-link">Living Room</a>
                    <a href="#" class="footer-link">Bedroom</a>
                </div>
                <div class="col-6 col-lg-2">
                    <h4 class="footer-title">Help</h4>
                    <a href="#" class="footer-link">Shipping</a>
                    <a href="#" class="footer-link">Returns</a>
                    <a href="#" class="footer-link">Order Tracking</a>
                    <a href="#" class="footer-link">Contact Us</a>
                </div>
                <div class="col-lg-4">
                    <h4 class="footer-title">Newsletter</h4>
                    <p class="text-muted small mb-4">Subscribe to receive updates on our latest collections.</p>
                    <div class="input-group mb-3 border">
                        <input type="text" class="form-control border-0 rounded-0" placeholder="Your email address">
                        <button class="btn btn-dark rounded-0 px-4" type="button">Join</button>
                    </div>
                </div>
            </div>
            <div class="mt-5 pt-4 border-top text-center">
                <p class="text-muted extra-small">© 2024 Luxury Co. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Initialize Lucide icons
    lucide.createIcons();

    // Simple interactive functions
    let qty = 1;
    const qtyEl = document.getElementById('qty');

    function increment() {
        qty++;
        qtyEl.innerText = qty;
    }

    function decrement() {
        if (qty > 1) {
            qty--;
            qtyEl.innerText = qty;
        }
    }

    // Handle Size selection
    document.querySelectorAll('.size-badge').forEach(badge => {
        badge.addEventListener('click', function() {
            document.querySelectorAll('.size-badge').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Handle Color selection
    document.querySelectorAll('.color-dot').forEach(dot => {
        dot.addEventListener('click', function() {
            document.querySelectorAll('.color-dot').forEach(d => d.classList.remove('active'));
            this.classList.add('active');
        });
    });
    </script>
    <!-- Entry point script for the environment -->
    <script type="module" src="index.tsx"></script>
</body>

</html>