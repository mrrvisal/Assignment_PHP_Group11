<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add product</h1>
    <form method="POST" action="../../controllers/product_controller.php" enctype="multipart/form-data">
        <table border="0" cellspacing="20">
            <tr>
                <td>Name</td>
                <td><input type="text" name="txt_name_product" placeholder="Enter Products"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="number" step="1" name="price_product" placeholder="Enter Price"></td>
            </tr>
            <tr>
                <td>Quantity</td>

                <td><input type="number" name="qty_product" placeholder="Enter Quantity"></td>
            </tr>
            <tr>
                <td>Brand</td>
                <td><input type="text" name="txt_brand_product" placeholder="Enter Brand"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                    <?php
                    $jsonPath = __DIR__ . '/../../data/category_types.json';
                    $jsonData = file_get_contents($jsonPath);
                    $data = json_decode($jsonData, true);
                    ?>
                    <select id="category" name="txt_size">
                        <option selected disabled>Select option</option>
                        <?php foreach ($data['categories'] as $cat): ?>
                        <option value="<?= htmlspecialchars($cat['id']) ?>">
                            <?= htmlspecialchars($cat['name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Type</td>
                <td>
                    <select id="type" name="txt_type_product">
                        <option selected disabled>Please select Category</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Description</td>
                <td><textarea type="text" name="txt_description_product" placeholder="Enter Description"></textarea>
                </td>
            </tr>
            <tr>
                <td>Image</td>
                <td>
                    <input type="file" name="image_product[]" multiple accept="image/*">
                </td>
            </tr>

            <tr>
                <td colspan=2><input type="submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <script>
    const categorySelect = document.getElementById("category");
    const typeSelect = document.getElementById(
        "type"
    ); // Pass PHP data into JS
    const typeData = <?= json_encode($data['types']) ?>;
    categorySelect.addEventListener("change", function() {
        const category = this.value;
        typeSelect.innerHTML = '<option selected disabled>Select type</option>';
        if (typeData[category]) {
            typeData[category].forEach(type => {
                const option = document.createElement("option");
                option.value = type;
                option.textContent = type;
                typeSelect.appendChild(option);
            });
        }
    });
    </script>

</body>

</html>