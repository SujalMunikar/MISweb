<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Form</title>
</head>
<body>
    <?php
    // Handle form submission
    if (isset($_POST['submit'])) {
        $target_dir = "uploads/"; // Specify the directory where the file will be saved
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is an actual image or fake image
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check === false) {
            echo "Error: File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Error: File already exists.";
            $uploadOk = 0;
        }

        // Check file size (adjust as needed)
        if ($_FILES["file"]["size"] > 500000) {
            echo "Error: File is too large.";
            $uploadOk = 0;
        }

        // Allow only specific file formats (e.g., jpg, jpeg, png, gif)
        if ($imageFileType !== "jpg" && $imageFileType !== "jpeg" && $imageFileType !== "png" && $imageFileType !== "gif") {
            echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
            $uploadOk = 0;
        }

        // If all checks pass, move the uploaded file to the specified directory
        if ($uploadOk) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "File has been uploaded successfully.";
            } else {
                echo "Error uploading file.";
            }
        }
    }
    ?>

    <!-- HTML form for image upload -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Select image to upload:</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>


// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Product Image Upload Form</title>
// </head>
// <body>
//     <?php
//     // Include your config file (config.php)
//     @include 'config.php';
//     $productSaved = false;

//     if (isset($_POST['submit'])) {
//         $errors = array();

//         // Validate product name
//         if (empty($_POST['name'])) {
//             $errors[] = 'Please enter the product name';
//         }

//         // Validate product price
//         if (empty($_POST['price'])) {
//             $errors[] = 'Please enter the product price';
//         }

//         // Create the 'uploads' directory if it doesn't exist
//         if (!is_dir(UPLOAD)) {
//             mkdir(UPLOAD, 0777, true);
//         }

//         $file_name = $_FILES['file']['name'];

//         if (empty($errors)) {
//             // Insert product details into the database
//             $insert_product = mysqli_query($conn, "INSERT INTO products(name, price, image) VALUES('$product_Name', '$product_Price', '$file_name')");

//             if ($insert_product) {
//                 // Move the uploaded file to the 'uploads' directory
//                 move_uploaded_file($_FILES['file']['tmp_name'], UPLOAD . '/' . $file_name);
//                 $productSaved = true;
//                 $message[] = 'Product added successfully';
//             } else {
//                 $message[] = 'Error adding product';
//             }
//         }
//     }
//     ?>

//     <!-- HTML form for product image upload -->
//     <form action="" method="post" enctype="multipart/form-data">
//         <label for="name">Name</label>
//         <input type="text" id="name" name="name" value="<?php echo isset($product_Name) ? $product_Name : ''; ?>">
//         <label for="price">Price</label>
//         <input type="number" id="price" name="price" min="0" value="<?php echo isset($product_Price) ? $product_Price : ''; ?>">
//         <label for="file">Image</label>
//         <input type="file" id="file" name="file">
//         <button type="submit" id="submit" name="submit" class="button">
//             Submit
//         </button>
//     </form>
// </body>
// </html>
