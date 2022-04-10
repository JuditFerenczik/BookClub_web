<?php


$conn = mysqli_connect("localhost", "root", "", "bookclub");
if(isset($_GET['id'])){
	$id =$_GET['id'];
	$sql = "SELECT * FROM tagok WHERE id=".$id . ";";
	$raw = mysqli_query($conn, $sql);
	if ($raw) {
		echo "listed";
	} else {
		echo "something went wrong";
	}
	while ($res = mysqli_fetch_array($raw)) {
		$data[] = $res;
	}
	print(json_encode($data));
}


