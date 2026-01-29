<?php
session_start();

// Handle adding to cart via GET (from buy.php)
if (isset($_GET['id']) && isset($_GET['qty'])) {
    $id = (int)$_GET['id'];
    $qty = (int)$_GET['qty'];
    if ($qty > 0) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] += $qty;
        } else {
            $_SESSION['cart'][$id] = $qty;
        }
    }
    // Redirect to remove GET params
    header("Location: cart.php");
    exit;
}

// Handle updates via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update_cart'])) {
        foreach ($_POST['qty'] as $id => $qty) {
            $id = (int)$id;
            $qty = (int)$qty;
            if ($qty > 0) {
                $_SESSION['cart'][$id] = $qty;
            } else {
                unset($_SESSION['cart'][$id]);
            }
        }
    } elseif (isset($_POST['delete_item'])) {
        $id = (int)$_POST['delete_item'];
        unset($_SESSION['cart'][$id]);
    }
}

// Load products for cart
require_once __DIR__ . '/../models/products.php';
$productModel = new Product();
$cartItems = [];
$total = 0;
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $id => $qty) {
        $product = $productModel->getById($id);
        if ($product) {
            $product['qty'] = $qty;
            $product['subtotal'] = $product['price'] * $qty;
            $cartItems[] = $product;
            $total += $product['subtotal'];
        }
    }
}
$itemCount = count($cartItems);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cart</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
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
        --brand-dark: #1f2937;
        --brand-muted: #6b7280;
        --brand-border: #e5e7eb;
        --brand-accent: #111827;
    }

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

    a {
        text-decoration: none;
        color: white;
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

    body {
        background: #f8fafc;
    }

    .cart-card {
        border: 1px solid var(--brand-border);
        border-radius: 12px;
        background: #fff;
    }

    .cart-item {
        border-bottom: 1px solid var(--brand-border);
    }

    .cart-item:last-child {
        border-bottom: 0;
    }

    .product-img {
        width: 84px;
        height: 84px;
        border-radius: 10px;
        object-fit: cover;
        background: #f3f4f6;
    }

    .qty-input {
        width: 88px;
    }

    .muted {
        color: var(--brand-muted);
    }

    .total {
        font-weight: 600;
        color: var(--brand-accent);
    }

    .btn-dark {
        background: var(--brand-dark);
        border-color: var(--brand-dark);
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        padding: 0.5rem 0;
    }

    .summary-row+.summary-row {
        border-top: 1px dashed var(--brand-border);
    }

    .discount {
        color: #ef4444;
    }

    .delete-btn {
        color: var(--brand-muted);
    }

    .delete-btn:hover {
        color: #ef4444;
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

    <div class="container py-5">
        <div class="row g-4">
            <div class="">
                <button class="btn btn-dark"><a href="index.php">Back</a></button>
            </div>
            <!-- CART ITEMS -->
            <div class="col-lg-8">
                <div class="cart-card p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="mb-0">Shopping Cart</h5>
                        <span class="muted"><?php echo $itemCount; ?>
                            item<?php echo $itemCount !== 1 ? 's' : ''; ?></span>
                    </div>

                    <?php if (empty($cartItems)): ?>
                    <p class="text-center text-muted">Your cart is empty.</p>
                    <?php else: ?>
                    <form method="POST">
                        <?php foreach ($cartItems as $item): ?>
                        <div class="cart-item py-3">
                            <div class="row align-items-center g-3">
                                <div class="col-auto">
                                    <?php
                                    $firstImage = '';
                                    if (!empty($item['images'])) {
                                        $images = json_decode($item['images'], true);
                                        if (is_array($images) && !empty($images)) {
                                            $firstImage = "../assets/images/products/" . htmlspecialchars($images[0]);
                                        }
                                    }
                                    if (!$firstImage) $firstImage = "https://via.placeholder.com/84x84?text=No+Image";
                                    ?>
                                    <img src="<?php echo $firstImage; ?>" class="product-img" />
                                </div>
                                <div class="col">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <strong><?php echo htmlspecialchars($item['name']); ?></strong>
                                            <div class="muted small"><?php echo htmlspecialchars($item['brand']); ?>
                                            </div>
                                        </div>
                                        <button type="submit" name="delete_item" value="<?php echo $item['id']; ?>"
                                            class="btn btn-link p-0 delete-btn">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="d-flex align-items-center qty-input">
                                            <input type="number" name="qty[<?php echo $item['id']; ?>]"
                                                class="form-control text-center" value="<?php echo $item['qty']; ?>"
                                                min="1" style="width: 60px" />
                                        </div>
                                        <div class="ms-auto total">$<?php echo number_format($item['subtotal'], 2); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                        <div class="text-end mt-4">
                            <button type="submit" name="update_cart" class="btn btn-dark">Update Cart</button>
                        </div>
                    </form>
                    <?php endif; ?>
                </div>
            </div>

            <!-- ORDER SUMMARY -->
            <div class="col-lg-4">
                <div class="cart-card p-4">
                    <h5 class="mb-3">Order Summary</h5>

                    <div class="input-group mb-3">
                        <input class="form-control" placeholder="Discount code" />
                        <button class="btn btn-outline-secondary">Apply</button>
                    </div>

                    <div class="summary-row">
                        <span>Sub Total</span>
                        <span>$<?php echo number_format($total, 2); ?></span>
                    </div>
                    <div class="summary-row">
                        <span>Discount (10%)</span>
                        <span class="discount">−$<?php echo number_format($total * 0.1, 2); ?></span>
                    </div>
                    <div class="summary-row">
                        <span>Delivery Fee</span>
                        <span>$50.00</span>
                    </div>
                    <div class="summary-row fw-bold">
                        <span>Total</span>
                        <span>$<?php echo number_format($total * 0.9 + 50, 2); ?></span>
                    </div>

                    <div class="d-grid mt-4">
                        <a href="payment.php" class="btn btn-dark">Checkout Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    lucide.createIcons();
    </script>
</body>

</html>