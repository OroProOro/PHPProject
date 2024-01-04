<?php
include 'loginsystem.php';
?>

<!DOCTYPE html>
<html lang="en" class="loginhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="loginbody">

<div class="navigation" id="navbar">
        <a class="menu" href="index.php">Kebsioro</a>
        <a class="menu" href="menu.php">Menu</a>
        <a class="menu" href="reviews.php">Opinie</a>
        <a class="menu" href="settings.php">Ustawienia</a>
        <a class="menuactive" href="login.php">Logowanie</a>
        <a href="javascript:void(0);" class="icon" onclick="navfunction()"><svg id="navbaricon" width="45px" height="45px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 7C3 6.44771 3.44772 6 4 6H24C24.5523 6 25 6.44771 25 7C25 7.55229 24.5523 8 24 8H4C3.44772 8 3 7.55229 3 7Z" fill="#000000"/><path d="M3 14C3 13.4477 3.44772 13 4 13H24C24.5523 13 25 13.4477 25 14C25 14.5523 24.5523 15 24 15H4C3.44772 15 3 14.5523 3 14Z" fill="#000000"/><path d="M4 20C3.44772 20 3 20.4477 3 21C3 21.5523 3.44772 22 4 22H24C24.5523 22 25 21.5523 25 21C25 20.4477 24.5523 20 24 20H4Z" fill="#000000"/></svg></a>
    </div>

    <div class="logincontainer">
        <div class="logindiv">
        <h2>System logowania do serwisu Kebsioro</h2>
        
 
        <form class="loginform" method="post" action="#signup">
            <h3>Rejestracja</h3>
            <label for="username_signup">Nazwa użytkownika:</label>
            <input type="text" name="username" id="username_signup" required>
            <label for="password_signup">Hasło:</label>
            <input type="password" name="password" id="password_signup" required>
            <button id="signbtn" type="submit" name="signup">Zarejestruj się</button>
        </form>
        
        
        <form class="loginform" method="post" action="#signin">
            <h4>Logowanie</h4>
            <label for="username_signin">Nazwa użytkownika:</label>
            <input type="text" name="username" id="username_signin" required>
            <label for="password_signin">Hasło:</label>
            <input type="password" name="password" id="password_signin" required>
            <button id="loginbtn" type="submit" name="signin">Zaloguj się</button>
            <?php if (isset($error)) : ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            
        </form>
            </div>
    </div>

    <div id="popup">
    <div id="popupborder">
      <h2>Dzień dobry,</h2>
      <br>
      <p>Przechodząc do serwisu oświadczasz, że akceptujesz <a href="regulations.php" style="text-decoration: none; color: darkblue; font-weight: bold">Regulamin</a>.
      <br>
      <br>
        </p>
      <button id="accept">Akceptuj</button>
    </div>
</div>

<script src="navbar.js"></script>    
<script src="theme.js"></script>
<script src="acceptance.js"></script>
<script src="adjust.js"></script>
<script src="acceptance.js"></script>

<footer>
    <p class="footer">Copyright © 2024 Kebsioro. Wszelkie prawa zastrzeżone. 
        <a href="regulamin.php"><span style="color: blue"></span>Regulamin</a>. </p>
    </footer>

</body>
</html>
