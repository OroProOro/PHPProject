<?php
    ob_start();
    session_start();
    date_default_timezone_set('Europe/Warsaw');
   
?>

<!DOCTYPE html>
<html lang="pl">
    
<head>
<meta charset="UTF-8">
<title>Opinie</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="icon" href="favicon.ico">
<script src="refresh.js"></script>
</head>
    

<body>
    

    
    <div class="navigation" id="navbar">
        <a class="menu" href="index.php">Kebsioro</a>
        <a class="menu" href="menu.php">Menu</a>
        <a class="menuactive" href="reviews.php">Opinie</a>
        <a class="menu" href="settings.php">Ustawienia</a>
        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
        <a class="menu" href="#" style="color: #4caf50">Zalogowano</a>
        <?php else: ?>
        <a class="menu" href="login.php">Logowanie</a>
        <?php endif; ?>
        <a href="javascript:void(0);" class="icon" onclick="navfunction()"><svg id="navbaricon" width="45px" height="45px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 7C3 6.44771 3.44772 6 4 6H24C24.5523 6 25 6.44771 25 7C25 7.55229 24.5523 8 24 8H4C3.44772 8 3 7.55229 3 7Z" fill="#000000"/><path d="M3 14C3 13.4477 3.44772 13 4 13H24C24.5523 13 25 13.4477 25 14C25 14.5523 24.5523 15 24 15H4C3.44772 15 3 14.5523 3 14Z" fill="#000000"/><path d="M4 20C3.44772 20 3 20.4477 3 21C3 21.5523 3.44772 22 4 22H24C24.5523 22 25 21.5523 25 21C25 20.4477 24.5523 20 24 20H4Z" fill="#000000"/></svg></a>
    </div>
    
    <div id="reviews">
        <h1>Opinie</h1>
        <br>
        <br>
        <br>
        <p>Witaj w sekcji opinii serwisu "Kebsioro"!
        <br>
        <br>Ta strona jest poświęcona udzielaniu się na różnorodne tematy dotyczące naszego lokalu, produktów, oceniania i wyrażania własnego zdania, a także do prezentacji nowych pomysłów.
        <br>
        <br>Wprowadź, wedle uznania, <span style="font-weight: bold">imię</span> lub <span style="font-weight: bold">nick</span> oraz <span style="font-weight: bold">treść opinii</span>, a następnie kliknij przycisk <span style="font-weight: bold">opublikuj</span>. </p>
        
        
    </div>
    
    <div class="createpost">Dodaj opinie</div>
    
    <div class="commentsubmition">
    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
        <form action="" method="post" class="form">
            <input type="hidden" name="Date" value="<?php echo date('Y-m-d H:i:s') ?>">
            <input type="text" class="Name" name="Name" placeholder="Imię lub nick">
            <br>
            <textarea name="Content" class="commentcontent" placeholder="Treść opinii"></textarea>
            <br>
            <button type="submit" class="btn" name="submit">Opublikuj</button>
        </form>
        <br>
        <br>
        <p class="postinfo"><span style="font-weight: bold; color: red">UWAGA! </span><span style="color: red">Publikując post oświadczasz, że jest on zgodny z </span><a class="footermenu" href="regulations.php" style="color: #FA8072; text-decoration: underline">regulaminem</a><span style="color: red">.</span></p>
	
    <?php else : ?>
        <p><span style="font-weight: bold; color: red">UWAGA! </span><span style="color: red">Aby uzyskać możliwość publikowania opinii musisz być zalogowany/-a.</span></p>
        <br>
    <?php endif; ?>
</div>

    
    <div class="separate">Wszystkie opinie</div>
    
    <div class="commentlist">
         <?php  
    require_once 'config.php';
    
                
        
    if ($remainingComments > 0) {
        ?>
        <input type="hidden" id="commentsOffset" value="<?php echo ($offset + $limit); ?>">

        
        <?php
    }
    ?>    
        
    </div>
        
    <div id="loadmorebtn"><button id="loadMoreButton" onclick="loadMoreComments()">Załaduj więcej</button></div>
    
    
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
<script src="loadmore.js"></script>
<script src="adjust.js"></script>
    
</body>
    
<footer>
    <p class="footer">Copyright © 2024 Kebsioro. Wszelkie prawa zastrzeżone. 
        <a href="regulations.php"><span style="color: blue"></span>Regulamin</a>. </p>
    </footer>
    
</html>