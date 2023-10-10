<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formularz</title>
</head>
<body>
<?php
$con=mysqli_connect('localhost','root','','formularz');

$imie=$_POST['name'];
$nazwisko=$_POST['surname'];
$email=$_POST['email'];
$wiek=$_POST['age'];
$q=mysqli_query($con,"INSERT INTO user (name, surname, email, age) VALUES ('$imie','$nazwisko','$email','$wiek');");
$qr = "SELECT name, age FROM user";


//$result = mysqli_query($conn, $qr);
//while ($row = mysqli_fetch_assoc($result)) {
//    echo $row['nazwa'] . "</td><td>".$row['bloomTime'] . "</td><td>". $row['waterPerDay']. "</td>";
//}
$result = mysqli_query($con, $qr);
while ($row = mysqli_fetch_assoc($result)){
    echo "<h2>Witaj " . $row['name'] . " Twój wiek to: " . $row['age']. " .</h2>";
}


?>
</body>
</html>