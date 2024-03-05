<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "id21959468_shawn21in";
$password = "0840621oO@";
$dbname = "id21959468_shawn21in";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("連線錯誤" . mysqli_connect_error());
}

$sql = "SELECT * FROM `hoteldata`";
$result = mysqli_query($conn, $sql);

$HotelData = array();
while ($row = mysqli_fetch_assoc($result)) {
    //echo ($row['name'] . "<br />");
    $HotelData[] = $row;
}

echo json_encode($HotelData);

mysqli_close($conn);
