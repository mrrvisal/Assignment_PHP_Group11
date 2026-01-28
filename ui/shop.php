<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUXURY | Minimalist Furniture Store</title>
    <!-- Bootstrap 5 CSS -->
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
        --luxury-black: #1a1a1a;
        --luxury-gray: #f8f9fa;
        --luxury-text-muted: #6c757d;
        --accent-color: #004d40;
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

    /* Hero Carousel */
    .carousel-item {
        height: 500px;
        background-color: #e9ecef;
    }

    .carousel-caption {
        bottom: 20%;
        text-align: left;
        color: var(--luxury-black);
    }

    .carousel-caption h2 {
        font-size: 3.5rem;
        margin-bottom: 1rem;
    }

    /* Category Filter */
    .filter-tabs {
        border-bottom: 1px solid #eee;
        margin-bottom: 3rem;
    }

    .filter-btn {
        background: none;
        border: none;
        padding: 10px 20px;
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--luxury-text-muted);
        position: relative;
        transition: color 0.3s;
    }

    .filter-btn.active {
        color: var(--luxury-black);
    }

    .filter-btn.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: var(--luxury-black);
    }

    /* Product Cards */
    .product-card {
        border: none;
        margin-bottom: 2rem;
        transition: transform 0.3s ease;
    }

    .product-img-container {
        aspect-ratio: 4/5;
        background-color: var(--luxury-gray);
        overflow: hidden;
        position: relative;
    }

    .product-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-card:hover img {
        transform: scale(1.05);
    }

    .product-title {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
        margin-top: 1rem;
    }

    .product-price {
        font-size: 0.9rem;
    }

    .old-price {
        text-decoration: line-through;
        color: var(--luxury-text-muted);
        margin-right: 8px;
    }

    .new-price {
        color: #d32f2f;
        font-weight: 700;
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

    .cart-badge {
        font-size: 0.6rem;
        position: absolute;
        top: 0;
        right: -5px;
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

                    <a href="login.php" class="text-dark">
                        <i data-lucide="user" size="20"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Carousel -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container h-100 d-flex align-items-center">
                    <div class="carousel-caption d-none d-md-block">
                        <span class="text-uppercase text-muted ls-1 small fw-bold">New Collection 2024</span>
                        <h2>Minimalist Living</h2>
                        <p class="w-50">Discover our new range of artisan crafted furniture designed for the modern
                            sanctuary.</p>
                        <button class="btn btn-dark rounded-0 px-4 py-2 mt-3 text-uppercase small ls-1">Discover
                            More</button>
                    </div>
                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=1600&q=80"
                        class="d-block w-100 opacity-25 position-absolute top-0 start-0 h-100"
                        style="object-fit:cover; z-index:-1" alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="container h-100 d-flex align-items-center">
                    <div class="carousel-caption d-none d-md-block">
                        <span class="text-uppercase text-muted ls-1 small fw-bold">Scandinavian Design</span>
                        <h2>The Art of Comfort</h2>
                        <p class="w-50">Functional elegance meets timeless aesthetics in every piece we create.</p>
                        <button class="btn btn-dark rounded-0 px-4 py-2 mt-3 text-uppercase small ls-1">Shop
                            Now</button>
                    </div>
                    <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=1600&q=80"
                        class="d-block w-100 opacity-25 position-absolute top-0 start-0 h-100"
                        style="object-fit:cover; z-index:-1" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container my-5">
        <!-- Filter Tabs -->
        <div class="d-flex justify-content-center filter-tabs gap-2 flex-wrap" id="categoryFilter">
            <button class="filter-btn active" data-category="All">All</button>
            <button class="filter-btn" data-category="Bed">Bed</button>
            <button class="filter-btn" data-category="Sofa">Sofa</button>
            <button class="filter-btn" data-category="Chair">Chair</button>
            <button class="filter-btn" data-category="Table">Table</button>
            <button class="filter-btn" data-category="Mirror">Mirror</button>
        </div>

        <!-- Product Grid -->
        <?php
require_once __DIR__ . '/../models/products.php';

$productModel = new Product();
$products = $productModel->getAll();
?>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>

            <div class="col">
                <div class="product-card" id="<?= htmlspecialchars($product['id']) ?>"
                    data-quantity="<?= htmlspecialchars($product['quantity']) ?>">

                    <div class="product-img-container">
                        <?php
                        $images = json_decode($product['images'], true);
                        if (!empty($images)) {
                            $firstImage = reset($images);
                            echo '<img src="../assets/images/products/' . htmlspecialchars($firstImage) . '" 
                                  alt="' . htmlspecialchars($product['name']) . '">';
                        } else {
                            echo '<img src="../assets/images/no-image.png" 
                                  alt="No image">';
                        }
                        ?>
                    </div>

                    <div class="text-center">
                        <h3 class="product-title">
                            <?= htmlspecialchars($product['name']) ?>
                        </h3>

                        <div class="product-price">
                            <?php if (!empty($product['old_price'])): ?>
                            <span class="old-price">
                                $<?= htmlspecialchars($product['old_price']) ?>
                            </span>
                            <?php endif; ?>

                            <span class="new-price">
                                $<?= htmlspecialchars($product['price']) ?>
                            </span>
                        </div>

                        <a href="buy.php?id=<?= htmlspecialchars($product['id']) ?>"
                            class="btn btn-dark rounded-0 px-3 py-1 mt-2 small">
                            Quick View
                        </a>
                    </div>

                </div>
            </div>

            <?php endforeach; ?>
            <?php else: ?>
            <p class="text-center">No products found.</p>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-5">
            <nav>
                <ul class="pagination">
                    <li class="page-item active"><a class="page-link rounded-0 bg-dark border-dark text-white"
                            href="#">1</a></li>
                    <li class="page-item"><a class="page-link rounded-0 border-muted text-dark" href="#">2</a></li>
                    <li class="page-item"><a class="page-link rounded-0 border-muted text-dark" href="#"><i
                                class="bi bi-chevron-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="navbar-brand mb-4 d-block">LUXURY</div>
                    <p class="small text-muted mb-4">Crafting environments that inspire and endure. Our furniture is
                        made with the finest materials and timeless craftsmanship.</p>
                    <div class="d-flex gap-3 text-muted">
                        <i class="bi bi-instagram cursor-pointer"></i>
                        <i class="bi bi-facebook cursor-pointer"></i>
                        <i class="bi bi-twitter-x cursor-pointer"></i>
                        <i class="bi bi-linkedin cursor-pointer"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-heading">Shop</h4>
                    <ul class="footer-links">
                        <li><a href="#">Living Room</a></li>
                        <li><a href="#">Bedroom</a></li>
                        <li><a href="#">Office</a></li>
                        <li><a href="#">Outdoor</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-heading">Support</h4>
                    <ul class="footer-links">
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Returns & Refunds</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-heading">Newsletter</h4>
                    <p class="small text-muted mb-3">Subscribe to get special offers and once-in-a-lifetime deals.</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control rounded-0 border-end-0 small" placeholder="Your email">
                        <button class="btn btn-dark rounded-0 px-3" type="button">Join</button>
                    </div>
                </div>
            </div>
            <hr class="my-5 opacity-25">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small text-muted mb-0">© 2024 Luxury Furniture. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" height="15"
                        class="me-3 grayscale opacity-50" alt="paypal">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" height="20"
                        class="grayscale opacity-50" alt="mastercard">
                </div>
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