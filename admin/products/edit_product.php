<?php
require_once __DIR__ . '/../../models/products.php';

$productModel = new Product();
$id = $_GET['id'] ?? 0;
$product = $productModel->getById($id);

if (!$product) {
    die("Product not found!");
}

// Handle form submission - now handled by product_controller.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1>Edit Product</h1>
        <a href="../index.php" class="btn btn-secondary mb-3">Back to List</a>

        <form method="POST" action="../../controllers/product_controller.php" enctype="multipart/form-data">
            <input type="hidden" name="edit_id" value="<?= htmlspecialchars($id) ?>">
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="txt_name_product" value="<?= htmlspecialchars($product['name']) ?>"
                            class="form-control" required></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="number" name="price_product" value="<?= htmlspecialchars($product['price']) ?>"
                            class="form-control" required></td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td><input type="number" name="qty_product" value="<?= htmlspecialchars($product['quantity']) ?>"
                            class="form-control" required></td>
                </tr>
                <tr>
                    <td>Brand</td>
                    <td><input type="text" name="txt_brand_product" value="<?= htmlspecialchars($product['brand']) ?>"
                            class="form-control" required></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select id="category" name="txt_size" class="form-select" required>
                            <?php
                            $jsonData = file_get_contents(__DIR__ . '/../../data/category_types.json');
                            $data = json_decode($jsonData, true);
                            foreach ($data['categories'] as $cat): ?>
                            <option value="<?= htmlspecialchars($cat['id']) ?>"
                                <?= $product['category'] == $cat['id'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($cat['name']) ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td>
                        <select id="type" name="txt_type_product" class="form-select" required>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="txt_description_product" class="form-control"
                            required><?= htmlspecialchars($product['description']) ?></textarea></td>
                </tr>
                <tr>
                    <td>Current Images</td>
                    <td>
                        <?php
                        $images = json_decode($product['images'], true);
                        if (!empty($images)) {
                            foreach ($images as $img) {
                                echo '<img src="../../assets/images/products/' . htmlspecialchars($img) . '" width="80" height="80" class="me-2 mb-2">';
                            }
                        } else {
                            echo 'No images';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>New Images (optional)</td>
                    <td><input type="file" name="image_product[]" multiple accept="image/*" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Update Product" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>

    <?php
    $jsonData = file_get_contents(__DIR__ . '/../../data/category_types.json');
    $data = json_decode($jsonData, true);
    $currentType = $product['type'] ?? '';
    $currentCategory = $product['category'] ?? '';
    ?>
    <script>
    const categorySelect = document.getElementById("category");
    const typeSelect = document.getElementById("type");

    // Type data from JSON file
    const typeData = <?= json_encode($data['types']) ?>;
    const currentType = "<?= htmlspecialchars($currentType) ?>";

    // Function to populate type dropdown
    function populateTypes(category, selectedType = '') {
        typeSelect.innerHTML = '<option selected disabled>Select type</option>';
        if (typeData[category]) {
            typeData[category].forEach(type => {
                const option = document.createElement("option");
                option.value = type;
                option.textContent = type;
                if (type === selectedType) {
                    option.selected = true;
                }
                typeSelect.appendChild(option);
            });
        }
    }

    // Populate types on page load based on current category
    populateTypes("<?= htmlspecialchars($currentCategory) ?>", currentType);

    // Update types when category changes
    categorySelect.addEventListener("change", function() {
        const category = this.value;
        populateTypes(category);
    });
    </script>
</body>

</html>