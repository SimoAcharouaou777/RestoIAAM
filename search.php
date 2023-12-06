<?php
include("./include/cnx.php");

$search = mysqli_real_escape_string($connect, $_GET['q']);
$sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
$result = mysqli_query($connect, $sql);

$searchResults = [];

if (mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $searchResults[] = $row['name'];
    }
}

echo json_encode($searchResults);
?>
