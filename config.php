<?php
require_once 'database.php';

if (isset($_POST['submit'])) {
    $Date = $_POST['Date'];
    $Name = $_POST['Name'];
    $Content = $_POST['Content'];

    $sql = "INSERT INTO comments (Date, Name, Content) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $Date, $Name, $Content);

        if ($stmt->execute()) {
            $stmt->close();
            header("Location: reviews.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Błąd: nie można opublikować komentarza. Sprawdź, czy spełnia on kryteria dotyczące długości, a także czy nie zawiera znaków niedozwolonych.";
    }
}

$conn->close();
?>