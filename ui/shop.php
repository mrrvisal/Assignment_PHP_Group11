<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUXURY | Minimalist Furniture Store</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet">
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

    .navbar {
        background-color: white;
        border-bottom: 1px solid #eee;
        padding: 1rem 0;
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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">LUXURY</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <a href="#" class="text-dark"><i class="bi bi-search"></i></a>
                    <a href="#" class="text-dark"><i class="bi bi-person"></i></a>
                    <a href="#" class="text-dark"><i class="bi bi-heart"></i></a>
                    <a href="#" class="text-dark position-relative">
                        <i class="bi bi-bag"></i>
                        <span class="badge rounded-pill bg-dark cart-badge">0</span>
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
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="productGrid">
            <!-- Products will be injected here by JS -->
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

    <!-- Custom Script -->
    <script>
    const products = [{
            id: 1,
            name: 'Velvet Sofa Gray',
            category: 'Sofa',
            price: 1200,
            oldPrice: 1500,
            img: 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=400&q=80'
        },
        {
            id: 2,
            name: 'Double BED Ash',
            category: 'Bed',
            price: 700,
            oldPrice: 900,
            img: 'https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=400&q=80'
        },
        {
            id: 3,
            name: 'Oak Side Table',
            category: 'Table',
            price: 350,
            oldPrice: 450,
            img: 'https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&w=400&q=80'
        },
        {
            id: 4,
            name: 'Nordic Lounge Chair',
            category: 'Chair',
            price: 550,
            oldPrice: 650,
            img: 'https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?auto=format&fit=crop&w=400&q=80'
        },
        {
            id: 5,
            name: 'Circular Wall Mirror',
            category: 'Mirror',
            price: 180,
            oldPrice: 220,
            img: 'https://images.unsplash.com/photo-1618220179428-22790b461013?auto=format&fit=crop&w=400&q=80'
        },
        {
            id: 6,
            name: 'Luxury King Bed',
            category: 'Bed',
            price: 1500,
            oldPrice: 1800,
            img: 'https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format&fit=crop&w=400&q=80'
        },
        {
            id: 7,
            name: 'Modern Dining Chair',
            category: 'Chair',
            price: 220,
            oldPrice: 300,
            img: 'https://images.unsplash.com/photo-1592078615290-033ee584e267?auto=format&fit=crop&w=400&q=80'
        },
        {
            id: 8,
            name: 'Marble Coffee Table',
            category: 'Table',
            price: 890,
            oldPrice: 1100,
            img: 'https://images.unsplash.com/photo-1577140917449-399e98fd5924?auto=format&fit=crop&w=400&q=80'
        }
    ];

    function renderProducts(filter = 'All') {
        const grid = document.getElementById('productGrid');
        grid.innerHTML = '';

        const filteredProducts = filter === 'All' ?
            products :
            products.filter(p => p.category === filter);

        filteredProducts.forEach(product => {
            const card = `
                    <div class="col">
                        <div class="product-card">
                            <div class="product-img-container">
                                <img src="${product.img}" alt="${product.name}">
                            </div>
                            <div class="text-center">
                                <h3 class="product-title">${product.name}</h3>
                                <div class="product-price">
                                    <span class="old-price">$${product.oldPrice}</span>
                                    <span class="new-price">$${product.price}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            grid.innerHTML += card;
        });
    }

    // Initialize grid
    renderProducts();

    // Handle filtering
    document.getElementById('categoryFilter').addEventListener('click', (e) => {
        if (e.target.classList.contains('filter-btn')) {
            // Remove active class from all
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            // Add active to current
            e.target.classList.add('active');
            // Render filtered products
            renderProducts(e.target.dataset.category);
        }
    });
    </script>
</body>

</html>