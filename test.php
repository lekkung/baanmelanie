<meta charset="UTF-8">
<?php
/*
$serverName = "localhost";
$userName = "baanmela_root";
$userPassword = "[hkog,]kou";
$dbName = "baanmela_db";
*/

function ConDB(){
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "1234";
	$dbName = "baanmelanie";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($conn,"utf8");
	return $conn;
}

$conn = ConDB();

echo $sql = "SELECT * FROM house_h";
$query = mysqli_query($conn,$sql);
while( $rs = mysqli_fetch_assoc($query) ){
	print_r($rs);
	echo "<br>";
	echo "<br>";
}
?>