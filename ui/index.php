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

    .navbar .nav-link {
        font-size: 0.85rem;
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 1px;
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
    <section class="hero-section">
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
        <td>
        </td>
        <ul class="nav product-tabs justify-content-center mb-5 border-bottom">
            <li class="nav-item"><button class="nav-link">All</button></li>
            <?php
                    $jsonPath = __DIR__ . '/../data/category_types.json';
                    $jsonData = file_get_contents($jsonPath);
                    $data = json_decode($jsonData, true);
                    ?>
            <?php foreach ($data['categories'] as $cat): ?>
            <li class="nav-item"><button class="nav-link">
                    <?= htmlspecialchars($cat['name'])
                    ?></button></li>
            <?php endforeach; ?>
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
        <?php
require_once __DIR__ . '/../models/products.php';

$productModel = new Product();
$products = $productModel->getAll();
?>

        <div class="row g-5">
            <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="product-card">

                    <div class="img-container">
                        <?php
            $images = json_decode($product['images'], true);
            if (!empty($images)) {
                $firstImage = reset($images);
                echo '<img src="../assets/images/products/' . htmlspecialchars($firstImage) . '" 
                      alt="' . htmlspecialchars($product['name']) . '">';
            } else {
                echo '<img src="../assets/images/no-image.png" alt="No image">';
            }
            ?>

                        <a href="buy.php?id=<?= htmlspecialchars($product['id']) ?>" class="btn-quick-view">
                            Quick View
                        </a>
                    </div>

                    <h6 class="product-title mt-3">
                        <?= htmlspecialchars($product['name']) ?>
                    </h6>

                    <p class="product-brand small text-muted mb-1">
                        <?= htmlspecialchars($product['brand']) ?>
                    </p>

                    <p class="product-price fw-bold">
                        $<?= htmlspecialchars($product['price']) ?>
                    </p>

                </div>
            </div>

            <?php endforeach; ?>
            <?php else: ?>
            <p>No products found.</p>
            <?php endif; ?>
        </div>

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
    lucide.createIcons();
    </script>
</body>

</html>