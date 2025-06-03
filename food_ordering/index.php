<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country & State Dropdown</title>
    <link rel="stylesheet" href="assets/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <label for="country">Select Country:</label>
    <select id="country">
        <option value="">Select Country</option>
        <?php
        include("db.php");
        $query = "SELECT * FROM countries";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='".$row['id']."'>".$row['name']."</option>";
        }
        ?>
    </select>

    <label for="state">Select State:</label>
    <select id="state">
        <option value="">Select State</option>
    </select>

    <script src="js/script.js"></script>
</body>
</html>
