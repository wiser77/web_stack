<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $image_name = "uploads/" . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $image_name);

    $title = $_POST["title"];
    $query = "INSERT INTO images (image, title) VALUES ('$image_name', '$title')";
    mysqli_query($conn, $query);

    echo "Image uploaded successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>
    <h2>Upload Image</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <input type="text" name="title" placeholder="Image Title" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
