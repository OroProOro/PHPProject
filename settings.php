<?php

session_start();
include 'settingssystem.php';

?>


<!DOCTYPE html>
<html lang="pl">
    
<head>
<meta charset="UTF-8">
<title>Ustawienia</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="icon" href="favicon.ico">
</head>
    

<body>
    
    
    <div class="navigation" id="navbar">
        <a class="menu" href="index.php">Kebsioro</a>
        <a class="menu" href="menu.php">Menu</a>
        <a class="menu" href="reviews.php">Opinie</a>
        <a class="menuactive" href="settings.php">Ustawienia</a>
        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
        <a class="menu" href="#" style="color: #4caf50">Zalogowano</a>
    <?php else: ?>
        <a class="menu" href="login.php">Logowanie</a>
    <?php endif; ?>
        <a href="javascript:void(0);" class="icon" onclick="navfunction()"><svg id="navbaricon" width="45px" height="45px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 7C3 6.44771 3.44772 6 4 6H24C24.5523 6 25 6.44771 25 7C25 7.55229 24.5523 8 24 8H4C3.44772 8 3 7.55229 3 7Z" fill="#000000"/><path d="M3 14C3 13.4477 3.44772 13 4 13H24C24.5523 13 25 13.4477 25 14C25 14.5523 24.5523 15 24 15H4C3.44772 15 3 14.5523 3 14Z" fill="#000000"/><path d="M4 20C3.44772 20 3 20.4477 3 21C3 21.5523 3.44772 22 4 22H24C24.5523 22 25 21.5523 25 21C25 20.4477 24.5523 20 24 20H4Z" fill="#000000"/></svg></a>
    </div>
    
  
    <div id="settings">
    <h1>Ustawienia</h1>    
    <p>W tej zakładce znajdziesz opcje dostosowywania zawartości i wyglądu witryny według swoich preferencji. Znajdziesz tutaj także statystyki.</p>
    </div>
    
    <div id="settingsContent1">
        <h2>Motyw</h2>
        <p>Klikając w poniższy przycisk możesz przełączać się pomiędzy ciemnym, a jasnym motywem strony.</p>
        <br>
        <br>
        <br>
        <br>
        <div id="button"><button id="toggle-theme">Zmień motyw</button></div>
        
    </div>
    
    
    <div id="settingsContent3">
        <h2>Statystyki</h2>
        <p>Poniżej znajdują się statystyki dotyczące serwisu.</p>
        <br><p>Liczba zarejestrowanych użytkowników: <span style="font-weight: bold"><?php echo $userCount; ?></span>
        <br>Liczba opublikowanych opinii: <span style="font-weight: bold"><?php echo $reviewCount; ?></span>
        <br>Serwis został założony dnia <span style="font-weight: bold">2 stycznia 2024 roku</span>.
        <br>Od tego czasu upłynęło <span id="time-passed" style="font-weight: bold"></span>.
        <br>Do rocznicy utworzenia witryny przedsięwzięcia zostało <span id="countdown" style="font-weight: bold"></span>.
        <br>Statystyki zostały przez Ciebie wyświetlone <span id="visits" style="font-weight: bold"></span> razy. Dziękujemy za zainteresowanie!
        </p>
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

    

<script src="visitcounter.js"></script>
<script src="cntdowncounter.js"></script>
<script src="timepasscounter.js"></script>
<script src="navbar.js"></script>  
<script src="theme.js"></script>
<script src="adjust.js"></script>
<script src="acceptance.js"></script>

</body>
    
<footer>
    <p class="footer">Copyright © 2024 Kebsioro. Wszelkie prawa zastrzeżone. 
        <a href="regulations.php"><span style="color: blue"></span>Regulamin</a>. </p>
    </footer>
    
</html>

<?php
$conn->close();
?>