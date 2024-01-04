<?php
session_start();


function connectToDatabase() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "generalsystem";

    $mysqli = new mysqli($host, $username, $password, $database);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    return $mysqli;
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}


if (isLoggedIn()) {
    $_SESSION['loggedIn'] = true;
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $mysqli = connectToDatabase();


    $checkStmt = $mysqli->prepare("SELECT id FROM users WHERE username = ?");
    $checkStmt->bind_param("s", $username);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        $checkStmt->close();
        $mysqli->close();
        $error = "Podana nazwa użytkownika już istnieje.";
    } else {
        $checkStmt->close();

        $insertStmt = $mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $insertStmt->bind_param("ss", $username, $password);
        $insertStmt->execute();
        $insertStmt->close();

        $mysqli->close();

        
        $_SESSION['success_message'] = "Konto utworzone pomyślnie.";
        header("Location: http://localhost/kebsioro/login.php");
        exit();
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $mysqli = connectToDatabase();

    $stmt = $mysqli->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();
    $stmt->close();

    $mysqli->close();

 
    if (password_verify($password, $hashed_password)) {
        $_SESSION['user_id'] = $user_id;
        $_SESSION['loggedIn'] = true;
        $_SESSION['success_message'] = "Zalogowano pomyślnie!";
        header("Location: http://localhost/kebsioro/index.php");
        exit();
    } else {

        $error = "Niepoprawna nazwa użytkownika lub/i hasło.";
    }
}
?>
