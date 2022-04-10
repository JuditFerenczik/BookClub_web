<?php


$conn = mysqli_connect("localhost", "root", "", "proba");




$nev = filter_input(INPUT_POST, 'nev', FILTER_SANITIZE_STRING);
$adoaz = filter_input(INPUT_POST, 'adoaz', FILTER_SANITIZE_NUMBER_INT);
$munkarend = filter_input(INPUT_POST, 'munkarend', FILTER_SANITIZE_NUMBER_INT);
$belepes = filter_input(INPUT_POST, 'belepes', FILTER_SANITIZE_STRING);
$fonok = filter_input(INPUT_POST, 'fonok', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$jelszo = filter_input(INPUT_POST, 'jelszo', FILTER_SANITIZE_STRING);
$szabads = filter_input(INPUT_POST, 'szabads', FILTER_SANITIZE_NUMBER_INT);
$hetimunk = filter_input(INPUT_POST, 'hetimunk', FILTER_SANITIZE_NUMBER_INT);
echo $nev . "\n";
echo $adoaz . "\n";
echo $fonok . "\n";
echo $munkarend . "\n";
echo $belepes . "\n";
echo $email . "\n";
echo $jelszo . "\n";
echo $szabads . "\n";
echo $hetimunk . "\n";



$sql3 = "Update user set  vnev= ?, password = ?,phone=?, email=?,cim=?  WHERE loginname = ?;";


$sql = " INSERT INTO `szemelyek`(`nev`, `adoazonosito`, `fonok`, `munkarend`, `belepes`, `email`, `jelszo`, `eves_szabadsag`, `heti_munkaido`) VALUES (?,?,?,?,?,?,?,?,?);";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sisisssii", $nev, $adoaz, $fonok, $munkarend, $belepes, $email, $jelszo, $szabads, $hetimunk);
$stmt->execute();

$sql2 = " INSERT INTO `szemelyek`(`nev`, `adoazonosito`, `fonok`, `munkarend`, `belepes`, `email`, `jelszo`, `eves_szabadsag`, `heti_munkaido`) VALUES ('Feren Jóska','321245218','Nagy Elemér','0','2020.12.11','fkfou@gmail.com','123456','26','32');";
$raw = mysqli_query($conn, $sql);

if ($raw) {
    echo "something went wrong";
} else {
    echo "inserted";
}
