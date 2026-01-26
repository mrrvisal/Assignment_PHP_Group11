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
        border-bottom: 1px solid #e2e8f0;
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
        border-radius: 50%;
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
        <div class="d-flex align-items-center justify-content-between mb-3">
            <span class="brand">Shodai</span>
            <button class="btn btn-sm btn-outline-light d-md-none">Menu</button>
        </div>

        <nav class="nav flex-column gap-1">
            <a class="nav-link" href="#">Dashboard</a>
            <a class="nav-link" href="#">Orders</a>
            <a class="nav-link" href="#">Customers</a>
            <a class="nav-link" href="#">Messages</a>
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
                <input type="search" class="form-control search-input" placeholder="Search products, SKU..." />
                <button class="btn btn-outline-secondary">Export</button>
                <button class="btn btn-primary w-75">Add product</button>
            </div>
        </div>

        <!-- Filters -->
        <div class="card mb-3">
            <div class="card-body filter-bar">
                <div class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <label class="form-label mb-1">Category</label>
                        <div class="d-flex align-items-center gap-2">
                            <select class="form-select">
                                <option selected>Jackets (132)</option>
                                <option>Coats</option>
                                <option>Blazers</option>
                            </select>
                            <button class="btn btn-outline-secondary btn-icon" title="Reset">
                                <i class="bi bi-arrow-repeat"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label mb-1">Status</label>
                        <select class="form-select">
                            <option selected>All status</option>
                            <option>Active</option>
                            <option>Draft</option>
                            <option>Archived</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label mb-1">Price</label>
                        <select class="form-select">
                            <option selected>$50–$100</option>
                            <option>$0–$50</option>
                            <option>$100–$200</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label mb-1">Store</label>
                        <select class="form-select">
                            <option selected>All store</option>
                            <option>Online</option>
                            <option>Outlet</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-3">Product name</th>
                                <th>Purchase unit price</th>
                                <th>Products</th>
                                <th>Views</th>
                                <th>Status</th>
                                <th class="text-end pe-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 1 -->
                            <tr>
                                <td class="ps-3">
                                    <div class="fw-semibold">Gabriela Cashmere Blazer</div>
                                    <small class="text-secondary">SKU: T14196</small>
                                </td>
                                <td>$113.99</td>
                                <td>1113</td>
                                <td>14,012</td>
                                <td><span class="badge badge-soft">Active</span></td>
                                <td class="text-end pe-3">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr>
                                <td class="ps-3">
                                    <div class="fw-semibold">Loewe blend Jacket - Blue</div>
                                    <small class="text-secondary">SKU: T14196</small>
                                </td>
                                <td>$113.99</td>
                                <td>721</td>
                                <td>13,212</td>
                                <td><span class="badge badge-soft">Active</span></td>
                                <td class="text-end pe-3">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr>
                                <td class="ps-3">
                                    <div class="fw-semibold">Sandro - Jacket - Black</div>
                                    <small class="text-secondary">SKU: T14196</small>
                                </td>
                                <td>$113.99</td>
                                <td>407</td>
                                <td>8,201</td>
                                <td><span class="badge badge-soft">Active</span></td>
                                <td class="text-end pe-3">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 4 -->
                            <tr>
                                <td class="ps-3">
                                    <div class="fw-semibold">Adidas By Stella McCartney</div>
                                    <small class="text-secondary">SKU: T14196</small>
                                </td>
                                <td>$113.99</td>
                                <td>1203</td>
                                <td>1,002</td>
                                <td><span class="badge badge-soft">Active</span></td>
                                <td class="text-end pe-3">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 5 -->
                            <tr>
                                <td class="ps-3">
                                    <div class="fw-semibold">Meteo Hooded Wool Jacket</div>
                                    <small class="text-secondary">SKU: T14196</small>
                                </td>
                                <td>$113.99</td>
                                <td>306</td>
                                <td>807</td>
                                <td><span class="badge badge-soft">Active</span></td>
                                <td class="text-end pe-3">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 6 -->
                            <tr>
                                <td class="ps-3">
                                    <div class="fw-semibold">Hida Down Ski Jacket - Red</div>
                                    <small class="text-secondary">SKU: T14196</small>
                                </td>
                                <td>$113.99</td>
                                <td>201</td>
                                <td>406</td>
                                <td><span class="badge badge-soft">Active</span></td>
                                <td class="text-end pe-3">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 7 -->
                            <tr>
                                <td class="ps-3">
                                    <div class="fw-semibold">Dolce &amp; Gabbana</div>
                                    <small class="text-secondary">SKU: T14196</small>
                                </td>
                                <td>$113.99</td>
                                <td>108</td>
                                <td>204</td>
                                <td><span class="badge badge-soft">Active</span></td>
                                <td class="text-end pe-3">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Footer: pagination -->
                <div class="d-flex align-items-center justify-content-between px-3 py-3 border-top">
                    <div class="text-secondary">
                        Showing <strong>Page 3</strong> of <strong>24</strong>
                    </div>
                    <nav>
                        <ul class="pagination mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
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
</body>

</html>