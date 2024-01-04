<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "generalsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Połaczenie nieudane: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as userCount FROM users"; 
$result = $conn->query($sql);


if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userCount = $row["userCount"];
} else {
    $userCount = 0;
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "generalsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

$sqlReviews = "SELECT COUNT(*) as reviewCount FROM comments"; 
$resultReviews = $conn->query($sqlReviews);

if ($resultReviews && $resultReviews->num_rows > 0) {
    $rowReviews = $resultReviews->fetch_assoc();
    $reviewCount = $rowReviews["reviewCount"];
} else {
    $reviewCount = 0;
}


?>