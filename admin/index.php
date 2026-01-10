<?php
require_once __DIR__ . '/../models/products.php';

$productModel = new Product();
$products = $productModel->getAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1>Admin Dashboard</h1>
        <a href="./products/add_product.php" class="btn btn-primary mb-3">Add Product</a>

        <h2>Products List</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Images</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['id']) ?></td>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td>$<?= number_format($product['price'], 2) ?></td>
                    <td><?= htmlspecialchars($product['quantity']) ?></td>
                    <td><?= htmlspecialchars($product['brand']) ?></td>
                    <td><?= htmlspecialchars($product['category']) ?></td>
                    <td><?= htmlspecialchars($product['type']) ?></td>
                    <td><?= htmlspecialchars($product['description']) ?></td>
                    <td>
                        <?php
                                $images = json_decode($product['images'], true);
                                if (!empty($images)) {
                                    foreach ($images as $img) {
                                        echo '<img src="../assets/images/products/' . htmlspecialchars($img) . '" width="50" height="50" class="me-1">';
                                    }
                                } else {
                                    echo 'No images';
                                }
                                ?>
                    </td>
                    <td>
                        <a href="./products/edit_product.php?id=<?= $product['id'] ?>"
                            class="btn btn-warning btn-sm">Edit</a>
                        <form method="POST" action="../controllers/product_controller.php" style="display:inline;"
                            onsubmit="return confirm('Are you sure you want to delete this product?');">
                            <input type="hidden" name="delete_id" value="<?= $product['id'] ?>">
                            <button type="submit" name="btn_delete" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="11" class="text-center">No products found.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>