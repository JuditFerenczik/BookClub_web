<?php



 
$conn = new mysqli('localhost', 'root', '', 'bookclub');

if($conn -> errno > 0){
    die("Adatbázis nem elérhető");
}
