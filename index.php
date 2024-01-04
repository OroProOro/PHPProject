<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
    
<head>
<meta charset="UTF-8">
<title>Strona Główna</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="icon" href="favicon.ico">
</head>
    

<body>
    
    
    <div class="navigation" id="navbar">
        <a class="menuactive" href="index.php">Kebsioro</a>
        <a class="menu" href="menu.php">Menu</a>
        <a class="menu" href="reviews.php">Opinie</a>
        <a class="menu" href="settings.php">Ustawienia</a>
        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
        <a class="menu" href="#" style="color: #4caf50">Zalogowano</a>
    <?php else: ?>
        <a class="menu" href="login.php">Logowanie</a>
    <?php endif; ?>
        <a href="javascript:void(0);" class="icon" onclick="navfunction()"><svg id="navbaricon" width="45px" height="45px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 7C3 6.44771 3.44772 6 4 6H24C24.5523 6 25 6.44771 25 7C25 7.55229 24.5523 8 24 8H4C3.44772 8 3 7.55229 3 7Z" fill="#000000"/><path d="M3 14C3 13.4477 3.44772 13 4 13H24C24.5523 13 25 13.4477 25 14C25 14.5523 24.5523 15 24 15H4C3.44772 15 3 14.5523 3 14Z" fill="#000000"/><path d="M4 20C3.44772 20 3 20.4477 3 21C3 21.5523 3.44772 22 4 22H24C24.5523 22 25 21.5523 25 21C25 20.4477 24.5523 20 24 20H4Z" fill="#000000"/></svg></a>
    </div>
    
  
    
    <div id="uppercontent"> 
        <div class="g1">
            <h1 class="g1h1">Kebab rzemieślniczy "Kebsioro"</h1>
            <p class="g1p1">Lokal "Kebsioro" to nowy punkt gastronomiczny na mapie Gdańska, który całkowicie zmieni 
                twoje spojrzenie na tureckie danie kebab. Zupełnie unikalna oferta, niespotykane kombinacje, najlepsza
                jakość i konkurencyjne ceny. To wszystko w jednym miejscu.
            </p>
        </div>
         <div class="g2">
        <img id="homeKebab" src="homekebab.png" alt="Kebab">
        </div>
    </div>
    
    <div id="lowercontent">
        <h2>Realny wpływ na zmiany.</h2>
        <p>Wierzymy, że to społeczność prężnie rozwija gastronomie, dlatego twoja opinia ma znaczenie!</p>
    </div>
    
    <div id="iconbox">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.42 122.88"><title>light</title><path d="M33.37,82.31C31.92,80.65,30.44,79,29,77a38.93,38.93,0,0,1-4.09-6.82,40,40,0,0,1-2.78-7.9,35,35,0,0,1-.93-8.25h0a34.77,34.77,0,0,1,1.14-8.54,41.42,41.42,0,0,1,3.38-8.72l.13-.22a33.92,33.92,0,0,1,7-8.43A32.44,32.44,0,0,1,42,22.48l.19-.07a34.63,34.63,0,0,1,7.92-2.12,37.29,37.29,0,0,1,8.58-.2,38.37,38.37,0,0,1,8.25,1.69,37.89,37.89,0,0,1,7.63,3.41A34.86,34.86,0,0,1,83,32.1a31.59,31.59,0,0,1,5.59,9h0a37.62,37.62,0,0,1,1.82,5.81,34.14,34.14,0,0,1,.23,13.69,38,38,0,0,1-2.12,7.16C85.8,74.43,82.3,78.53,79,82.35L72.17,93.26l-.83,3.88-.24,3.2.08,4.14a25.15,25.15,0,0,1,0,4.16A15,15,0,0,1,70.1,113l0,0c-.16.41-.31.77-.46,1.08A15.78,15.78,0,0,1,62,121.6a13.8,13.8,0,0,1-10.75.36q-.55-.21-1-.45l-.16-.08a12.51,12.51,0,0,1-4.62-3.79l-.12-.17a24.63,24.63,0,0,1-2.49-4.67,3.22,3.22,0,0,1-.16-.5,35.35,35.35,0,0,1-.81-4.22c-.14-1.22-.18-2.48-.21-4.34v0a34.08,34.08,0,0,0-2.48-11.28h0a34.62,34.62,0,0,0-5.74-10.11Zm14.34,29.88,18.56-2.76a12.13,12.13,0,0,0,.18-1.23,21.56,21.56,0,0,0,0-3.41l0-1.11-20,3c0,.3.05.6.08.89a27.57,27.57,0,0,0,.68,3.52c.17.4.34.77.51,1.13Zm16.33,2-13.54,2a8.67,8.67,0,0,0,1.62,1l.11,0c.25.12.48.23.7.31a9.15,9.15,0,0,0,7.1-.28,11,11,0,0,0,4-3.13ZM46.28,102.3l20.14-3,.21-2.67,0-.31.39-1.82L45.61,97.69a33.29,33.29,0,0,1,.67,4.61ZM44.5,93.47l3.59-.53L37,57.71a2.07,2.07,0,0,1,4-1.24l.86,2.74a2.35,2.35,0,0,1,.24-.6L50.42,44.4a2.06,2.06,0,0,1,2.83-.74,2.1,2.1,0,0,1,.85,1l2.73,6.25,2.77-7a2.07,2.07,0,0,1,2.69-1.16A2,2,0,0,1,63.51,44l5,13.25a2.07,2.07,0,0,1-3.88,1.47l-3.17-8.35L58.86,57a2.1,2.1,0,0,1-1.11,1.14A2.07,2.07,0,0,1,55,57.09L51.93,50,45.64,60.71a2.07,2.07,0,0,1-2.83.73,1.83,1.83,0,0,1-.36-.26L52.14,92a2.05,2.05,0,0,1,.07.34l7.45-1.1L69.47,57.1a2.07,2.07,0,1,1,4,1.14l-9.28,32.3,4.55-.67L75,79.79a3.11,3.11,0,0,1,.25-.38l0-.06C78.4,75.79,81.68,72,84.1,66A33.21,33.21,0,0,0,86,59.71a28.69,28.69,0,0,0,.5-6.23,29.36,29.36,0,0,0-.69-5.57,31.91,31.91,0,0,0-1.6-5h0a26.69,26.69,0,0,0-4.76-7.61,29.83,29.83,0,0,0-7.26-6,32.46,32.46,0,0,0-6.67-3,33.2,33.2,0,0,0-7.22-1.48,31.82,31.82,0,0,0-7.49.18A29.43,29.43,0,0,0,44,26.79l-.18.09a27.71,27.71,0,0,0-7.84,4.82,29.55,29.55,0,0,0-6,7.28,37,37,0,0,0-3,7.71,30.43,30.43,0,0,0-1,7.39,29.78,29.78,0,0,0,.82,7.15,35.86,35.86,0,0,0,2.44,7,34.39,34.39,0,0,0,3.61,6c1.33,1.8,2.73,3.41,4.11,5a39.63,39.63,0,0,1,6.62,11.55h0c.35.9.66,1.82,1,2.73ZM3.59,60A3.53,3.53,0,0,1,0,56.55a3.52,3.52,0,0,1,3.42-3.63l8.43-.29A3.52,3.52,0,0,1,15.48,56a3.51,3.51,0,0,1-1,2.53,3.6,3.6,0,0,1-2.47,1.11L3.59,60Zm105-11.29a3.51,3.51,0,0,1,3.83,3.15V52a3.51,3.51,0,0,1-3.16,3.72l-8.39.88a3.53,3.53,0,0,1-.72-7l8.43-.88ZM92.18,15l.09-.13a3.56,3.56,0,0,1,2.16-1.37,3.51,3.51,0,0,1,2.63.53l.14.09a3.62,3.62,0,0,1,1.37,2.16A3.56,3.56,0,0,1,98,18.9l-4.69,7a3.53,3.53,0,0,1-2.24,1.5H91A3.52,3.52,0,0,1,87,24.63,3.49,3.49,0,0,1,87.49,22l4.69-7ZM55.82,3.48a.79.79,0,0,1,0-.22A3.51,3.51,0,0,1,59.39,0h.22A3.57,3.57,0,0,1,61.9,1.1a3.53,3.53,0,0,1,1,2.47.91.91,0,0,1,0,.17L62.65,12a.74.74,0,0,1,0,.21,3.49,3.49,0,0,1-3.56,3.26.74.74,0,0,1-.21,0,3.49,3.49,0,0,1-3.26-3.56.48.48,0,0,1,0-.17l.21-8.25ZM13.92,17.61a3.53,3.53,0,0,1-.19-5,3.54,3.54,0,0,1,5-.18l6.17,5.75a3.54,3.54,0,0,1,.18,5,3.53,3.53,0,0,1-5,.18l-6.17-5.75Z"/></svg>
        <svg fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="XMLID_27_" d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255 s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0 c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z"></path> </g></svg>
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="493px" height="512px" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
viewBox="0 0 493 511.77"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
 
  <path fill="black" fill-rule="nonzero" d="M129.11 458.2l82.5 -79.1c3.09,-3 7.08,-4.47 11.08,-4.45l228.6 -0.08c2.67,0 5.09,-1.08 6.78,-2.77 1.74,-1.81 2.84,-4.24 2.84,-6.87l0 -323.2c0,-2.59 -1.12,-5 -2.86,-6.74 -1.78,-1.78 -4.2,-2.9 -6.76,-2.9l-409.56 0c-2.54,0 -4.94,1.14 -6.72,2.92 -1.78,1.78 -2.92,4.18 -2.92,6.72l0 323.2c0,2.57 1.12,5.02 2.88,6.78l0.53 0.55c1.68,1.42 3.88,2.31 6.23,2.31l71.34 0c8.85,0 16.04,7.2 16.04,16.04l0 67.59zm-5.4 -229.77c10.9,0 19.74,8.85 19.74,19.74 0,10.89 -8.84,19.73 -19.74,19.73 -10.89,0 -19.73,-8.84 -19.73,-19.73 0,-10.89 8.84,-19.74 19.73,-19.74zm0 -101.14c10.9,0 19.74,8.85 19.74,19.74 0,10.89 -8.84,19.74 -19.74,19.74 -10.89,0 -19.73,-8.85 -19.73,-19.74 0,-10.89 8.84,-19.74 19.73,-19.74zm61.72 138.89c-9.95,0 -18.02,-8.07 -18.02,-18.01 0,-9.95 8.07,-18.02 18.02,-18.02l185.56 0c9.95,0 18.01,8.07 18.01,18.02 0,9.94 -8.06,18.01 -18.01,18.01l-185.56 0zm0 -101.13c-9.95,0 -18.02,-8.07 -18.02,-18.02 0,-9.94 8.07,-18.01 18.02,-18.01l185.56 0c9.95,0 18.01,8.07 18.01,18.01 0,9.95 -8.06,18.02 -18.01,18.02l-185.56 0zm43.62 241.61l-103.97 99.69c-2.96,3.32 -7.24,5.42 -12.01,5.42 -8.85,0 -16.05,-7.2 -16.05,-16.04l0 -89.07 -55.29 0c-10.83,0 -20.76,-4.28 -28.19,-11.12l-1.26 -1.14c-7.56,-7.56 -12.28,-18.05 -12.28,-29.47l0 -323.2c0,-11.4 4.77,-21.88 12.31,-29.42 7.54,-7.54 18.02,-12.31 29.42,-12.31l409.56 0c11.4,0 21.9,4.74 29.45,12.29 7.5,7.51 12.26,17.96 12.26,29.44l0 323.2c0,11.48 -4.7,21.95 -12.24,29.49 -7.61,7.54 -18.05,12.24 -29.47,12.24l-222.24 0z"/>
</svg>
<svg fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="XMLID_27_" d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255 s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0 c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z"></path> </g></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 100.15"><title>repairing</title><path d="M22.7,37.17C17,38.34,11.16,38.47,5.48,32.65,1.67,28.75-.23,22.93,0,16.84c14.55,16.9,32.27-4,10.79-14.85C21.19-2.93,31,1.69,36.18,11.25c2.47,4.52,3.93,6.89,5.81,8.5a9.47,9.47,0,0,0,1.07.82,9.67,9.67,0,0,1,4.48-5.33,8.66,8.66,0,0,1,3.89-.92c3.79,0,8.52,2.26,9.32,6.13h0a2.32,2.32,0,0,1,.52-.07H64a2.14,2.14,0,0,1,.45.05,6.69,6.69,0,0,1,6,5.49,2,2,0,0,1,.85-.19h2.75a2.14,2.14,0,0,1,.45.05c4,.61,5.55,3,6.12,6.12a3,3,0,0,1,.31,0H83.7a2.12,2.12,0,0,1,.44.05c4.54.71,6.32,3.68,7,7.27,8.3-1.28,17.41-6.3,26.25,2.77,3.8,3.9,5.71,9.72,5.46,15.81-14.55-16.9-32.27,4-10.79,14.85-8.93,4.23-17.43,1.4-22.94-5.56a35.54,35.54,0,0,1-2.79,5.86c-.46.75-.92,1.51-1.53,2.56l0,.09a22.24,22.24,0,0,1-1.55,2.35h1.91a3,3,0,0,1,3,3V97.17a3,3,0,0,1-3,3H42a3,3,0,0,1-3-3V80.9a3,3,0,0,1,3-3h1a21,21,0,0,1-1.07-4.53L27,49,27,48.94a27.71,27.71,0,0,1-3-5.07,14.33,14.33,0,0,1-1.29-4.82,11.78,11.78,0,0,1,0-1.88Zm19.45,6.92a2.11,2.11,0,0,1-.31-.21c-1.27-1-2.65-2.14-3.86-3.12L32.79,36.5a7.27,7.27,0,0,0-3.08-1.56A3.12,3.12,0,0,0,28,35,1.8,1.8,0,0,0,27,36a5.91,5.91,0,0,0-.35,2.81,10.65,10.65,0,0,0,1,3.47,22.16,22.16,0,0,0,2.53,4.28l.12.19,15.17,24.8a2.11,2.11,0,0,1,.34.91h0A13.15,13.15,0,0,0,47.43,78a2.49,2.49,0,0,0,2.22,1.26H73.52A7.17,7.17,0,0,0,77.59,78a13.15,13.15,0,0,0,3.72-4.36l.06-.11c.44-.74,1-1.69,1.57-2.61a37.79,37.79,0,0,0,4.78-15.52l-.16-6.81a2.81,2.81,0,0,1,0-.29c0-.09,0-.74,0-1.6.06-4.5.13-10.07-4-10.77H80.91c0,1.27-.1,2.55-.17,3.81s-.14,2.19-.14,3.22a2,2,0,0,1-4,0c0-1,.08-2.23.16-3.47.27-4.23.58-9.1-2.82-9.71H71.31a2,2,0,0,1-.43,0c0,1.53-.08,3.13-.18,4.65-.07,1.12-.13,2.2-.13,3.22a2,2,0,1,1-4,0c0-1,.08-2.22.16-3.46.26-4.24.57-9.1-2.82-9.71H61.27a2.11,2.11,0,0,1-.52-.07v7.74a2,2,0,0,1-4,0V22.27c0-2.76-2.75-4-5.32-4a4.61,4.61,0,0,0-2.07.5c-1.8.91-3.2,3.49-3.2,7.06V47.79a2,2,0,0,1-4,0v-3.7Zm0-7.12-1.88-.77a24.07,24.07,0,0,0-2.63-.89l2.87,2.34L42.15,39V37Z"/></svg> 
      
</div>
    
    <div id="contentbox">
            <div id="box">
                <h3>Wiele pomysłów?</h3>
                <p>Pomysł na nowe danie? składniki? metode podania? A może coś jeszcze innego? </p>
            </div>
            <div id="box">
                <h3>Wypowiedz się!</h3>
                <p>Opowiedz wszystkim o swoim pomyśle, zrecenzuj lokal lub danie, a także zapoznaj się ze zdaniem innych. To wszystko dzięki wbudowanemu systemowi opinii. </p>
            </div>
            <div id="box">
                <h3>Realne zmiany</h3>
                <p>Wszystkie zamieszczane wypowiedzi są czytane i rozpatrywane. Najbardziej popularne i ciekawe mają wpływ na to co oferuje lokal! </p>
            </div>
    </div>
    
    <div id="lowercontent2">
        <h2>Kontakt</h2>
        <p>Masz pytania, na które nie możesz znaleźć odpowiedzi? Kliknij poniżej, aby wyświetlić możliwe opcje kontaktu z nami.</p>
        <br>
        <br>
        <br>
        <br>
        <div id="button2"><a id="langchange" href="#">Dane kontaktowe</a></div>
    </div>

    <div id="infoPopupTotal">
        <div id="infoPopup">
            <h2 id="closePopup" onclick="closePopupHandler()">x</h2>
            <br>
            <h3>Kontakt</h3>
            <br>
            <p><span style="font-weight: bold">Godziny otwarcia:</span>
            <br>
            <br><span style="font-weight: bold">Poniedziałek:</span> 12:00 - 22:00
            <br><span style="font-weight: bold">Wtorek:</span> 12:00 - 22:00
            <br><span style="font-weight: bold">Środa:</span> 12:00 - 22:00
            <br><span style="font-weight: bold">Czwartek:</span> 12:00 - 22:00
            <br><span style="font-weight: bold">Piątek:</span> 12:00 - 22:00
            <br><span style="font-weight: bold">Sobota:</span>  12:00 - 20:00
            <br><span style="font-weight: bold">Niedziela:</span> 12:00 - 20:00
            <br>
            <br><span style="font-weight: bold">adres:</span> Obrońców Wybrzeża 1, 80-398 Gdańsk
            <br>
            <br><span style="font-weight: bold">adres mailowy:</span> kebsiorolokal@kebsioro.com
            <br>
            <br><span style="font-weight: bold">nr. telefonu:</span> +48 213 742 069
            </p>
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
<script src="indexpopup.js"></script>

</body>
    
<footer>
    <p class="footer">Copyright © 2024 Kebsioro. Wszelkie prawa zastrzeżone. 
        <a href="regulations.php"><span style="color: blue"></span>Regulamin</a>. </p>
    </footer>
    
</html>