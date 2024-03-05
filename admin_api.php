<?php
$servername="localhost";
$username="id21959468_shawn21in";
$password="0840621oO@";
$dbname="id21959468_shawn21in";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("資料庫爆炸:".mysqli_connect_error());//die終止連線()內是顯示的地方類似echo();
}

$sql="SELECT * FROM `admin`";

$result=mysqli_query($conn,$sql);
$adminData = array();
while($row = mysqli_fetch_assoc($result)){
    $adminData[] = $row;

}

echo json_encode($adminData);

mysqli_close($conn);



?>