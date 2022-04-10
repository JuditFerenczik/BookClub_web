<?php


$conn = mysqli_connect("localhost", "root", "", "proba");


$nev = trim($_POST['nev']);

$jelszo = trim($_POST['jelszo']);

$sql = "INSERT into bejelentkezes(nev, jelszo) VALUES('$nev','$jelszo');";

$result = mysqli_query($conn, $sql);
