<?php
require_once __DIR__ . "/../models/products.php";

$productModel = new Product();

// Handle DELETE request
if (isset($_POST['btn_delete'])) {
    $delete_id = $_POST['delete_id'];
    error_log("Attempting to delete product ID: " . $delete_id);

    // Get product to delete its images
    $product = $productModel->getById($delete_id);
    if ($product) {
        $uploadDir = __DIR__ . "/../assets/images/products/";
        $images = json_decode($product['images'] ?? '[]', true);

        // Delete each image file
        if (!empty($images)) {
            foreach ($images as $image) {
                $imagePath = $uploadDir . $image;
                if (file_exists($imagePath)) {
                    if (unlink($imagePath)) {
                        error_log("Deleted image: " . $imagePath);
                    } else {
                        error_log("Failed to delete image: " . $imagePath);
                    }
                }
            }
        }
    }

    if ($productModel->delete($delete_id)) {
        error_log("Delete successful for ID: " . $delete_id);
        header("Location: ../ui/admin.php");
        exit();
    } else {
        error_log("Delete failed for ID: " . $delete_id);
        echo "❌ Error deleting product. ID: " . $delete_id;
    }
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Handle bulk delete
    if (isset($_POST['btn_bulk_delete'])) {
        $delete_ids = $_POST['bulk_delete_ids'] ?? [];
        if (!empty($delete_ids)) {
            foreach ($delete_ids as $delete_id) {
                error_log("Attempting to delete product ID: " . $delete_id);

                // Get product to delete its images
                $product = $productModel->getById($delete_id);
                if ($product) {
                    $uploadDir = __DIR__ . "/../assets/images/products/";
                    $images = json_decode($product['images'] ?? '[]', true);

                    // Delete each image file
                    if (!empty($images)) {
                        foreach ($images as $image) {
                            $imagePath = $uploadDir . $image;
                            if (file_exists($imagePath)) {
                                if (unlink($imagePath)) {
                                    error_log("Deleted image: " . $imagePath);
                                } else {
                                    error_log("Failed to delete image: " . $imagePath);
                                }
                            }
                        }
                    }
                }

                if (!$productModel->delete($delete_id)) {
                    error_log("Delete failed for ID: " . $delete_id);
                    echo "❌ Error deleting product ID: " . $delete_id;
                }
            }
            header("Location: ../ui/admin.php");
            exit();
        }
    }

    $name = $_POST['txt_name_product'] ?? '';
    $price = $_POST['price_product'] ?? 0;
    $quantity = $_POST['qty_product'] ?? 0;
    $brand = $_POST['txt_brand_product'] ?? '';
    $category = $_POST['txt_size'] ?? '';
    $type = $_POST['txt_type_product'] ?? '';
    $description = $_POST['txt_description_product'] ?? '';
    $edit_id = $_POST['edit_id'] ?? 0; // For update operations

    // Upload image - centralized handler
    $uploadDir = __DIR__ . "/../assets/images/products/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $imageNames = [];

    // Handle single file upload (add product)
    if (!empty($_FILES['image_product']['name']) && !is_array($_FILES['image_product']['name'])) {
        if (isset($_FILES['image_product']['error']) && $_FILES['image_product']['error'] === UPLOAD_ERR_OK) {
            $imageName = $_FILES['image_product']['name'];
            $destination = $uploadDir . $imageName;
            if (move_uploaded_file($_FILES['image_product']['tmp_name'], $destination)) {
                error_log("Image uploaded successfully: " . $destination);
                $imageNames[] = $imageName;
            }
        }
    }
    // Handle multiple file upload (edit product)
    elseif (!empty($_FILES['image_product']['name'][0])) {
        foreach ($_FILES['image_product']['tmp_name'] as $key => $tmpName) {
            if ($_FILES['image_product']['error'][$key] === UPLOAD_ERR_OK) {
                $originalName = $_FILES['image_product']['name'][$key];
                $ext = pathinfo($originalName, PATHINFO_EXTENSION);
                $newName = uniqid("img_") . "." . $ext;

                if (move_uploaded_file($tmpName, $uploadDir . $newName)) {
                    error_log("Image uploaded successfully: " . $uploadDir . $newName);
                    $imageNames[] = $newName;
                }
            }
        }
    }

    // Build data array
    $data = [
        "name" => $name,
        "price" => $price,
        "quantity" => $quantity,
        "brand" => $brand,
        "category" => $category,
        "type" => $type,
        "description" => $description
    ];

    // Handle images based on operation type
    if (!empty($edit_id)) {
        // Update operation - keep existing images or add new ones
        $product = $productModel->getById($edit_id);
        $existingImages = json_decode($product['images'] ?? '[]', true);

        if (!empty($imageNames)) {
            // Add new images to existing ones
            $allImages = array_merge($existingImages, $imageNames);
            $data['images'] = json_encode($allImages);
        } else {
            $data['images'] = $product['images'];
        }

        if ($productModel->update($edit_id, $data)) {
            header("Location: ../ui/admin.php");
            exit();
        } else {
            echo "❌ Error updating product.";
        }
    } else {
        // Create operation
        $data['images'] = json_encode($imageNames);

        if ($productModel->create($data)) {
            header("Location: ../ui/admin.php");
        } else {
            echo "❌ Error adding product.";
        }
    }
}