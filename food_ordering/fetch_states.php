<?php
include("db.php");

if (isset($_POST['country_id'])) {
    $country_id = $_POST['country_id'];
    $query = "SELECT * FROM states WHERE country_id = '$country_id'";
    $result = mysqli_query($conn, $query);

    echo "<option value=''>Select State</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='".$row['id']."'>".$row['name']."</option>";
    }
}
?>
