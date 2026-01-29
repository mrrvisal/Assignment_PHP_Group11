<?php
// ==== Bootstrap page data (categories + selected + products) ====

$selectedCategory = isset($_GET['category']) ? trim($_GET['category']) : '';

// Load categories from JSON once (for tabs & dropdown)
$jsonPath = __DIR__ . '/../data/category_types.json';
$categories = [];
if (file_exists($jsonPath)) {
    $jsonData = file_get_contents($jsonPath);
    $data = json_decode($jsonData, true);
    if (json_last_error() === JSON_ERROR_NONE && isset($data['categories']) && is_array($data['categories'])) {
        $categories = $data['categories']; // each: ['name' => '...']
    }
}

// Get products with optional category filter
require_once __DIR__ . '/../models/products.php';
$productModel = new Product();
$products = $productModel->getAll($selectedCategory);
?>
<!DOCTYPE html>
<html lang="en">
<!-- price brand type tranding -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Furniture</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Playfair Display for headings -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <!-- Lucide Icons (via CDN) -->
    <script src="https://unpkg.com/lucide@latest"></script>
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

    * {
        color: black;
        text-decoration: none;
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

    .navbar .nav-link {
        font-size: 0.85rem;
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 1px;
    }

    .navbar i {
        cursor: pointer;
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

    .nav-link {
        font-size: 0.85rem;
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 1px;
        color: var(--luxury-black) !important;
        margin: 0 10px;
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

    .product-title {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
    }

    .product-brand {
        font-size: 0.75rem;
    }

    .product-price {
        font-size: 0.9rem;
    }

    .btn-quick-view {
        text-align: center;
        color: #000;
        text-decoration: none;
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
    </style>
</head>

<body>

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
    <section class="container-fluid p-0">
        <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=1600&q=80"
            class="w-100" style="height: 60vh; object-fit: cover;">
    </section>

    <!-- Categories -->
    <section class="container py-5 mt-1">
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
                <a href="?" class="text-dark fw-bold text-uppercase small text-decoration-none">
                    All Categories <i data-lucide="arrow-right" size="14" class="ms-1"></i>
                </a>
            </div>

            <!-- Squares Row 1 -->
            <div class="col-lg-3">
                <div class="img-wrapper">
                    <img src="https://i.pinimg.com/1200x/4d/0f/59/4d0f59f91788e20be1a6e4e0a74fc5a4.jpg" alt="Category">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="img-wrapper">
                    <img src="https://i.pinimg.com/1200x/82/aa/3f/82aa3ff5adb00734adbc30fca9c93c35.jpg" alt="Category">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="img-wrapper">
                    <img src="https://i.pinimg.com/1200x/84/cb/57/84cb57b1d01e7858b22f508af9b6cf7c.jpg" alt="Category">
                </div>
            </div>

            <!-- Rectangles Row 2 -->
            <div class="col-lg-6">
                <div class="img-wrapper" style="height: 300px;">
                    <img src="https://i.pinimg.com/1200x/ff/76/f1/ff76f105267e87566d1d476d380cf445.jpg" alt="Category"
                        style="height: 300px;">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-wrapper" style="height: 300px;">
                    <img src="https://i.pinimg.com/1200x/4a/87/57/4a8757699a1cfd62c20b50998a342c32.jpg" alt="Category"
                        style="height: 300px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="container py-5">

        <!-- Tabs -->
        <ul class="nav product-tabs justify-content-center mb-5 border-bottom">
            <li class="nav-item">
                <a class="nav-link <?= $selectedCategory === '' ? 'active' : '' ?>" href="?">All</a>
            </li>
            <?php foreach ($categories as $cat): 
                $name = isset($cat['name']) ? (string)$cat['name'] : '';
                $isActive = ($selectedCategory === $name) ? 'active' : '';
            ?>
            <li class="nav-item">
                <a class="nav-link <?= $isActive ?>" href="?category=<?= urlencode($name) ?>">
                    <?= htmlspecialchars($name) ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>

        <!-- Filters -->
        <div class="row g-3 mb-5">
            <!-- Category dropdown (auto-submits via GET) -->
            <div class="col-md-3">
                <form id="filtersForm" method="get" class="m-0">
                    <select name="category"
                        class="form-select form-select-sm text-uppercase fw-bold text-muted letter-spacing-1"
                        onchange="document.getElementById('filtersForm').submit();">
                        <option value="">All Categories</option>
                        <?php foreach ($categories as $cat): 
                            $name = isset($cat['name']) ? (string)$cat['name'] : '';
                            $isSelected = ($selectedCategory !== '' && $selectedCategory === $name) ? 'selected' : '';
                        ?>
                        <option value="<?= htmlspecialchars($name) ?>" <?= $isSelected ?>>
                            <?= htmlspecialchars($name) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </form>
            </div>

            <!-- Future filters: color/size/price (placeholders) -->
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
            <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="product-card">
                    <div class="img-container">
                        <?php
                            $firstImageTag = '<img src="../assets/images/no-image.png" alt="No image">';
                            if (!empty($product['images'])) {
                                $images = json_decode($product['images'], true);
                                if (json_last_error() === JSON_ERROR_NONE && is_array($images) && !empty($images)) {
                                    $firstImage = reset($images);
                                    $firstImageTag = '<img src="../assets/images/products/' . htmlspecialchars($firstImage) . '" alt="' . htmlspecialchars($product['name']) . '">';
                                }
                            }
                            echo $firstImageTag;
                            ?>
                        <a href="buy.php?id=<?= htmlspecialchars($product['id']) ?>" class="btn-quick-view">
                            Quick View
                        </a>
                    </div>

                    <h6 class="product-title mt-3"><?= htmlspecialchars($product['name']) ?></h6>
                    <p class="product-brand small text-muted mb-1"><?= htmlspecialchars($product['brand']) ?></p>
                    <p class="product-price fw-bold">$<?= htmlspecialchars($product['price']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
            <div class="col-12">
                <p class="text-center text-muted">No products found.</p>
            </div>
            <?php endif; ?>
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
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.502986608757!2d104.92736972452724!3d11.587444543712145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095157d40fffff%3A0x7545c526597af0d3!2zTWVkaWNhbCBCdWlsZGluZyAoTm9ydG9uIFVuaXZlcnNpdHkpIOGeouGeguGetuGemkg!5e0!3m2!1sen!2skh!4v1769624433991!5m2!1sen!2skh"
                        width="620" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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

    <!-- Bootstrap 5 JS Bundle (single, matching CSS version) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script>
    lucide.createIcons();
    </script>
</body>

</html>