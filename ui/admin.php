<?php
try {
    require_once __DIR__ . '/../models/products.php';

    $jsonData = file_get_contents(__DIR__ . '/../data/category_types.json');
    $data = json_decode($jsonData, true);
    $categories = $data['categories'];

    $productModel = new Product();

    // Get filters from GET
    $search = $_GET['search'] ?? '';
    $category = $_GET['category'] ?? '';
    $status = $_GET['status'] ?? '';
    $price = $_GET['price'] ?? '';
    $store = $_GET['store'] ?? '';
    $page = (int)($_GET['page'] ?? 1);
    $limit = 10;$offset = ($page - 1) * $limit;

    // For simplicity, get all products and filter in PHP
    $allProducts = $productModel->getAll();

    // Apply filters
    $filteredProducts = array_filter($allProducts, function($product) use ($search, $category, $status, $price) {
        if ($search && stripos($product['name'], $search) === false) return false;
        if ($category && $product['category'] !== $category) return false;
        if ($status && $product['status'] !== $status) return false;
        if ($price) {
            list($min, $max) = explode('-', $price);        if ($product['price'] < $min || $product['price'] > $max) return false;
        }
        // Store filter not implemented, perhaps skip or add logic
        return true;
    });

    // Pagination
    $total = count($filteredProducts);
    $totalPages = ceil($total / $limit);
    $products = array_slice($filteredProducts, $offset, $limit);

    // Count for categories
    $categoryCounts = [];
    foreach ($allProducts as $p) {
        $cat = $p['category'];
        $categoryCounts[$cat] = ($categoryCounts[$cat] ?? 0) + 1;
    }
    foreach ($categories as &$cat) {
        $cat['count'] = $categoryCounts[$cat['id']] ?? 0;
    }
} catch (Exception $e) {
    // Fallback data for UI testing when database fails
    $categories = [
        ['id' => 'bed', 'name' => 'Bed', 'count' => 1],
        ['id' => 'chair', 'name' => 'Chair', 'count' => 0],
        ['id' => 'lamp', 'name' => 'Lamp', 'count' => 0],
        ['id' => 'mirror', 'name' => 'Mirror', 'count' => 0],
        ['id' => 'sofa', 'name' => 'Sofa', 'count' => 0],
        ['id' => 'table', 'name' => 'Table', 'count' => 0]
    ];
    $products = [
        [
            'id' => 1,
            'name' => 'Sample Product',
            'price' => 99.99,
            'quantity' => 10,
            'status' => 'active'
        ]
    ];
    $totalPages = 1;
    $page = 1;
    $search = '';
    $category = '';
    $status = '';
    $price = '';
    $store = '';
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Product Management</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
    :root {
        --sidebar-width: 260px;
    }

    body {
        background-color: #f7f8fa;
    }

    .sidebar {
        width: var(--sidebar-width);
        min-height: 100vh;
        background: #0f172a;
        /* slate-900 */
        color: #cbd5e1;
        /* slate-300 */
        position: fixed;
        top: 0;
        left: 0;
        padding: 1.25rem 1rem;
    }

    .sidebar .brand {
        color: #fff;
        font-weight: 700;
        letter-spacing: 0.3px;
    }

    .sidebar .nav-link {
        color: #cbd5e1;
        border-radius: 8px;
        padding: 0.6rem 0.75rem;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
        color: #fff;
        background: #1f2937;
        /* slate-800 */
    }

    .content {
        margin-left: var(--sidebar-width);
        padding: 1.5rem;
    }

    .page-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .table thead th {
        font-weight: 600;
        color: #475569;
        /* slate-600 */
    }

    .table tbody td {
        vertical-align: middle;
    }

    .badge-soft {
        background: #ecfeff;
        color: #0e7490;
        border: 1px solid #a5f3fc;
    }

    .filter-bar .form-select,
    .filter-bar .form-control {
        background: #fff;
    }

    .search-input {
        max-width: 320px;
    }

    .avatar {
        width: 36px;
        height: 36px;
        object-fit: cover;
    }

    .card {
        border: 1px solid #e2e8f0;
        border-radius: 12px;
    }

    .btn-icon {
        padding: 0.375rem 0.5rem;
        border-radius: 8px;
    }

    .pagination .page-link {
        border-radius: 8px;
    }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <aside class="sidebar d-flex flex-column">
        <div class="d-flex align-items-center justify-content-between mb-3"> <span class="brand">Shodai</span> <button
                class="btn btn-sm btn-outline-light d-md-none">Menu</button>
        </div>

        <nav class="nav flex-column gap-1">
            <a class="nav-link active" href="#">Products</a>
        </nav>

        <div class="mt-auto pt-3 border-top border-secondary">
            <div class="d-flex align-items-center gap-2">
                <img src="https://i.pravatar.cc/72?img=12" alt="User" class="avatar" />
                <div>
                    <div class="text-white fw-semibold">Estiaq Noor</div>
                    <small class="text-secondary">Admin</small>
                </div>
            </div>
        </div>
    </aside>

    <!-- Content -->
    <main class="content">
        <!-- Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-1">Products</h4>
                <div class="text-secondary">Manage inventory, pricing, and visibility</div>
            </div>
            <div class="d-flex align-items-center gap-2">
                <form method="GET" class="d-flex gap-2">
                    <input type="search" class="form-control search-input" placeholder="Search products, SKU..."
                        name="search" value="<?php echo htmlspecialchars($search); ?>" />
                    <input type="hidden" name="category" value="<?php echo htmlspecialchars($category); ?>" />
                    <input type="hidden" name="status" value="<?php echo htmlspecialchars($status); ?>" />
                    <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>" />
                    <input type="hidden" name="store" value="<?php echo htmlspecialchars($store); ?>" />
                    <button type="submit" class="btn btn-outline-secondary">Search</button>
                </form>
                <button class="btn btn-outline-danger" id="bulkDeleteBtn" style="display:none;">Delete Selected</button>
                <a href="../admin/products/add_product.php" class="btn btn-primary">Add product</a>
            </div>
        </div>

        <!-- Filters -->
        <form method="GET" class="card mb-3">
            <div class="card-body filter-bar">
                <div class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <label class="form-label mb-1">Category</label>
                        <div class="d-flex align-items-center gap-2">
                            <select class="form-select" name="category" onchange="this.form.submit()">
                                <option value="" <?php echo $category == '' ? 'selected' : ''; ?>>All categories
                                </option>
                                <?php foreach ($categories as $cat): ?>
                                <option value="<?php echo htmlspecialchars($cat['id']); ?>"
                                    <?php echo $category == $cat['id'] ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($cat['name']); ?> (<?php echo $cat['count']; ?>)
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <button type="button" class="btn btn-outline-secondary btn-icon" title="Reset"
                                onclick="resetFilters()">
                                <i class="bi bi-arrow-repeat"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label mb-1">Status</label>
                        <select class="form-select" name="status" onchange="this.form.submit()">
                            <option value="" <?php echo $status == '' ? 'selected' : ''; ?>>All status</option>
                            <option value="active" <?php echo $status == 'active' ? 'selected' : ''; ?>>Active</option>
                            <option value="inactive" <?php echo $status == 'inactive' ? 'selected' : ''; ?>>Inactive
                            </option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label mb-1">Price</label>
                        <select class="form-select" name="price" onchange="this.form.submit()">
                            <option value="" <?php echo $price == '' ? 'selected' : ''; ?>>All prices</option>
                            <option value="0-50" <?php echo $price == '0-50' ? 'selected' : ''; ?>>$0–$50</option>
                            <option value="50-100" <?php echo $price == '50-100' ? 'selected' : ''; ?>>$50–$100</option>
                            <option value="100-200" <?php echo $price == '100-200' ? 'selected' : ''; ?>>$100–$200
                            </option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label mb-1">Store</label>
                        <select class="form-select" name="store" onchange="this.form.submit()">
                            <option value="" <?php echo $store == '' ? 'selected' : ''; ?>>All stores</option>
                            <option value="online" <?php echo $store == 'online' ? 'selected' : ''; ?>>Online</option>
                            <option value="outlet" <?php echo $store == 'outlet' ? 'selected' : ''; ?>>Outlet</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>

        <!-- Table -->
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-3"><input type="checkbox" id="selectAll"></th>
                                <th>Product name</th>
                                <th>Purchase unit price</th>
                                <th>Products</th>
                                <th>Views</th>
                                <th>Status</th>
                                <th class="text-end pe-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($products)): ?>
                            <?php foreach ($products as $product): ?>
                            <tr>
                                <td class="ps-3"><input type="checkbox" class="product-checkbox"
                                        value="<?php echo $product['id']; ?>"></td>
                                <td>
                                    <div class="fw-semibold"><?php echo htmlspecialchars($product['name']); ?></div>
                                    <small class="text-secondary">ID:
                                        <?php echo htmlspecialchars($product['id']); ?></small>
                                </td>
                                <td>$<?php echo number_format($product['price'], 2); ?></td>
                                <td><?php echo htmlspecialchars($product['quantity']); ?></td>
                                <td><?php echo rand(100, 20000); // Simulate views since not in DB ?></td>
                                <td><span class="badge badge-soft"><?php echo ucfirst($product['status']); ?></span>
                                </td>
                                <td class="text-end pe-3">
                                    <div class="btn-group">
                                        <a href="../admin/products/edit_product.php?id=<?php echo $product['id']; ?>"
                                            class="btn btn-sm btn-outline-secondary">Edit</a>
                                        <form method="POST" action="../controllers/product_controller.php"
                                            style="display:inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this product?');">
                                            <input type="hidden" name="delete_id" value="<?php echo $product['id']; ?>">
                                            <button type="submit" name="btn_delete"
                                                class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center">No products found.</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Footer: pagination -->
                <div class="d-flex align-items-center justify-content-between px-3 py-3 border-top">
                    <div class="text-secondary">
                        Showing <strong>Page <?php echo $page; ?></strong> of
                        <strong><?php echo $totalPages; ?></strong>
                    </div>
                    <nav>
                        <ul class="pagination mb-0">
                            <?php if ($page > 1): ?>
                            <li class="page-item">
                                <a class="page-link"
                                    href="?page=<?php echo $page - 1; ?>&search=<?php echo urlencode($search); ?>&category=<?php echo urlencode($category); ?>&status=<?php echo urlencode($status); ?>&price=<?php echo urlencode($price); ?>&store=<?php echo urlencode($store); ?>">Prev</a>
                            </li>
                            <?php endif; ?>
                            <?php for ($i = max(1, $page - 2); $i <= min($totalPages, $page + 2); $i++): ?>
                            <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                                <a class="page-link"
                                    href="?page=<?php echo $i; ?>&search=<?php echo urlencode($search); ?>&category=<?php echo urlencode($category); ?>&status=<?php echo urlencode($status); ?>&price=<?php echo urlencode($price); ?>&store=<?php echo urlencode($store); ?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            <?php if ($page < $totalPages): ?>
                            <li class="page-item">
                                <a class="page-link"
                                    href="?page=<?php echo $page + 1; ?>&search=<?php echo urlencode($search); ?>&category=<?php echo urlencode($category); ?>&status=<?php echo urlencode($status); ?>&price=<?php echo urlencode($price); ?>&store=<?php echo urlencode($store); ?>">Next</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Optional: Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <script>
    function resetFilters() {
        window.location.href = window.location.pathname;
    }

    // Bulk select functionality
    document.getElementById('selectAll').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.product-checkbox');
        checkboxes.forEach(checkbox => checkbox.checked = this.checked);
        toggleBulkDeleteBtn();
    });

    document.addEventListener('change', function(e) {
        if (e.target.classList.contains('product-checkbox')) {
            toggleBulkDeleteBtn();
            const selectAll = document.getElementById('selectAll');
            const checkboxes = document.querySelectorAll('.product-checkbox');
            const checkedBoxes = document.querySelectorAll('.product-checkbox:checked');
            selectAll.checked = checkboxes.length === checkedBoxes.length;
            selectAll.indeterminate = checkedBoxes.length > 0 && checkedBoxes.length < checkboxes.length;
        }
    });

    function toggleBulkDeleteBtn() {
        const checkedBoxes = document.querySelectorAll('.product-checkbox:checked');
        const bulkDeleteBtn = document.getElementById('bulkDeleteBtn');
        bulkDeleteBtn.style.display = checkedBoxes.length > 0 ? 'inline-block' : 'none';
    }

    document.getElementById('bulkDeleteBtn').addEventListener('click', function() {
        const checkedBoxes = document.querySelectorAll('.product-checkbox:checked');
        if (checkedBoxes.length === 0) return;

        const ids = Array.from(checkedBoxes).map(cb => cb.value);
        if (confirm(`Are you sure you want to delete ${ids.length} selected product(s)?`)) {
            // Create a form to submit bulk delete
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '../controllers/product_controller.php';

            ids.forEach(id => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'bulk_delete_ids[]';
                input.value = id;
                form.appendChild(input);
            });

            const btn = document.createElement('input');
            btn.type = 'hidden';
            btn.name = 'btn_bulk_delete';
            btn.value = '1';
            form.appendChild(btn);

            document.body.appendChild(form);
            form.submit();
        }
    });
    </script>
</body>

</html>