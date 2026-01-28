<?php
// --- PHP: Load product upfront ---
require_once __DIR__ . '/../models/products.php';

$productModel = new Product();
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = $productModel->getById($id);

if (!$product) {
    http_response_code(404);
    // Minimal HTML fallback
    echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Product not found</title></head><body><p style='text-align:center'>Product not found.</p></body></html>";
    exit;
}

// Images decoding with safe default
$images = [];
if (!empty($product['images'])) {
    $decoded = json_decode($product['images'], true);
    if (is_array($decoded)) {
        $images = array_values(array_filter($decoded));
    }
}
// Fallback image if none provided
$hasImages = count($images) > 0;
$firstImage = $hasImages ? "../assets/images/products/" . htmlspecialchars($images[0]) : "https://picsum.photos/800/800?grayscale";
?>
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
    .brand-font,
    .navbar-brand {
        font-family: 'Playfair Display', serif;
    }

    .navbar {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid #eee;
    }

    .nav-link {
        font-size: 0.85rem;
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 1px;
        color: var(--luxury-black) !important;
        margin: 0 10px;
    }

    .navbar-brand {
        font-size: 1.5rem;
        letter-spacing: 2px;
        font-weight: 700;
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
    }

    .product-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .thumbnail-list img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        margin-bottom: 10px;
        cursor: pointer;
        border: 1px solid #eee;
        opacity: 0.7;
        transition: opacity 0.2s, border-color 0.2s;
    }

    .thumbnail-list img:hover,
    .thumbnail-list img.active {
        opacity: 1;
        border-color: var(--luxury-black);
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

    .quantity-value {
        min-width: 36px;
        text-align: center;
        display: inline-block;
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
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">LUXURY</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a href="./views/auth/login.php" class="text-dark">
                        <i data-lucide="user" size="20"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <header class="hero-banner text-center">
            <div class="container">
                <h1 class="display-3 mb-0">PRODUCT DETAIL</h1>
            </div>
        </header>

        <!-- Product Section -->
        <section class="container mb-5">
            <div class="row g-5">
                <!-- Left: Images -->
                <div class="col-lg-7">
                    <div class="row g-3">
                        <!-- Thumbnails -->
                        <div class="col-md-2 thumbnail-list">
                            <?php if ($hasImages): ?>
                            <?php foreach ($images as $idx => $img): ?>
                            <?php
                                        $src = "../assets/images/products/" . htmlspecialchars($img);
                                        $active = $idx === 0 ? 'active' : '';
                                    ?>
                            <img src="<?= $src ?>" alt="thumbnail <?= $idx+1 ?>" class="<?= $active ?>"
                                onclick="changeImage(this)">
                            <?php endforeach; ?>
                            <?php else: ?>
                            <!-- Optional: show placeholder thumbnails -->
                            <img src="https://picsum.photos/200/200?random=1" alt="placeholder 1" class="active"
                                onclick="changeImage(this)">
                            <img src="https://picsum.photos/200/200?random=2" alt="placeholder 2"
                                onclick="changeImage(this)">
                            <img src="https://picsum.photos/200/200?random=3" alt="placeholder 3"
                                onclick="changeImage(this)">
                            <?php endif; ?>
                        </div>

                        <!-- Main Image -->
                        <div class="col-md-10">
                            <div class="product-image-container rounded">
                                <img id="mainImage" src="<?= $firstImage ?>" alt="main product">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Details -->
                <div class="col-lg-5">
                    <h2 class="display-5 mb-3"><?= htmlspecialchars($product['name']) ?></h2>

                    <div class="mb-4">
                        <span class="fs-2 fw-bold">$<?= number_format((float)$product['price'], 2) ?></span>
                    </div>

                    <?php if (!empty($product['description'])): ?>
                    <p class="text-muted mb-4">
                        <?= nl2br(htmlspecialchars($product['description'])) ?>
                    </p>
                    <?php endif; ?>

                    <!-- (Optional) Size/Color selectors (kept hidden if you don't need them) -->
                    <!--
                    <div class="mb-3">
                        <span class="size-badge">S</span>
                        <span class="size-badge">M</span>
                        <span class="size-badge">L</span>
                    </div>
                    <div class="mb-4">
                        <span class="color-dot" style="background:#000"></span>
                        <span class="color-dot" style="background:#a52a2a"></span>
                        <span class="color-dot" style="background:#2f4f4f"></span>
                    </div>
                    -->

                    <!-- Quantity + Add to Cart -->
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="quantity-control">
                            <button type="button" aria-label="Decrease quantity" onclick="decrement()">−</button>
                            <span id="qty" class="quantity-value">1</span>
                            <button type="button" aria-label="Increase quantity" onclick="increment()">＋</button>
                        </div>
                        <form action="cart.php" method="GET" class="m-0">
                            <input type="hidden" name="id" value="<?= (int)$product['id'] ?>">
                            <input type="hidden" name="qty" id="qtyInput" value="1">
                            <button type="submit" class="btn btn-luxury">Add to Cart</button>
                        </form>
                    </div>

                    <!-- (Optional) Outline button -->
                    <a href="shop.php" class="btn btn-outline-luxury w-100">Continue Shopping</a>
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
                <a href="shop.php"
                    class="text-dark fw-bold text-decoration-none small text-uppercase border-bottom border-dark">View
                    All</a>
            </div>

            <div class="row row-cols-2 row-cols-md-4 g-4">
                <div class="col">
                    <div class="product-card">
                        <div class="product-image-container rounded">
                            <img src="https://picsum.photos/500/600?random=10" alt="item">
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="fs-6 mb-1">Oak Side Table</h3>
                            <p class="fw-bold mb-0">$340.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-image-container rounded">
                            <img src="https://picsum.photos/500/600?random=11" alt="item">
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="fs-6 mb-1">Minimalist Lamp</h3>
                            <p class="fw-bold mb-0">$180.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-image-container rounded">
                            <img src="https://picsum.photos/500/600?random=12" alt="item">
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="fs-6 mb-1">Velvet Cushion</h3>
                            <p class="fw-bold mb-0">$85.00</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-image-container rounded">
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
                        <input type="email" class="form-control border-0 rounded-0" placeholder="Your email address"
                            aria-label="Email">
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
    // Initialize Lucide icons after DOM is ready
    document.addEventListener('DOMContentLoaded', () => {
        if (window.lucide && typeof lucide.createIcons === 'function') {
            lucide.createIcons();
        }
    });

    // Quantity logic
    let qty = 1;
    const qtyEl = document.getElementById('qty');
    const qtyInput = document.getElementById('qtyInput');

    function updateQtyDisplay() {
        qtyEl.textContent = String(qty);
        if (qtyInput) qtyInput.value = String(qty);
    }

    function increment() {
        qty++;
        updateQtyDisplay();
    }

    function decrement() {
        if (qty > 1) {
            qty--;
            updateQtyDisplay();
        }
    }

    // Expose functions if needed globally
    window.increment = increment;
    window.decrement = decrement;

    // Thumbnail -> main image
    function changeImage(imgEl) {
        const main = document.getElementById('mainImage');
        if (!main || !imgEl) return;
        main.src = imgEl.src;

        // Toggle active class
        document.querySelectorAll('.thumbnail-list img').forEach(t => t.classList.remove('active'));
        imgEl.classList.add('active');
    }
    window.changeImage = changeImage;

    // Optional: size/color toggles if you enable them
    document.querySelectorAll('.size-badge').forEach(badge => {
        badge.addEventListener('click', function() {
            document.querySelectorAll('.size-badge').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });

    document.querySelectorAll('.color-dot').forEach(dot => {
        dot.addEventListener('click', function() {
            document.querySelectorAll('.color-dot').forEach(d => d.classList.remove('active'));
            this.classList.add('active');
        });
    });
    </script>
</body>

</html>