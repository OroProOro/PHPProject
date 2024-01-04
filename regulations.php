<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
    
<head>
<meta charset="UTF-8">
<title>Regulamin</title>
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
        <a class="menu" href="settings.php">Ustawienia</a>
        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
        <a class="menu" href="#" style="color: #4caf50">Zalogowano</a>
    <?php else: ?>
        <a class="menu" href="login.php">Logowanie</a>
    <?php endif; ?>
        <a href="javascript:void(0);" class="icon" onclick="navfunction()"><svg id="navbaricon" width="45px" height="45px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 7C3 6.44771 3.44772 6 4 6H24C24.5523 6 25 6.44771 25 7C25 7.55229 24.5523 8 24 8H4C3.44772 8 3 7.55229 3 7Z" fill="#000000"/><path d="M3 14C3 13.4477 3.44772 13 4 13H24C24.5523 13 25 13.4477 25 14C25 14.5523 24.5523 15 24 15H4C3.44772 15 3 14.5523 3 14Z" fill="#000000"/><path d="M4 20C3.44772 20 3 20.4477 3 21C3 21.5523 3.44772 22 4 22H24C24.5523 22 25 21.5523 25 21C25 20.4477 24.5523 20 24 20H4Z" fill="#000000"/></svg></a>
    </div>
    
    <div id="regulamin">
        <h1>Regulamin</h1>
        <h2>Regulamin strony internetowej https://kebsioro.000webhostapp.com.</h2>
        <p>
            <span style="font-weight:bold">I DEFINICJE</span>
            <br>
            <br>Serwis - strona internetowa znajdująca się pod adresem https://kebsioro.000webhostapp.com.
            <br>Regulamin - zbiór zasad panujących w serwisie.
            <br>Użytkownik - osoba odwiedzająca serwis, która zaakceptowała regulamin.
            <br>"Kebsioro" - wyimaginowany obiekt znajdujący się w niezdefiniowanej lokalizacji lub na potrzeby tworzenia serwisu, pod adresem Obrońców Wybrzeża 1, 80-398 Gdańsk.
            <br>Przedsięwzięcie - ogół określeń i czynności odnoszących się do "Kebsioro".
            <br>Forum - strona internetowa znajdująca się pod adresem https://kebsioro.000webhostapp.com/reviews.php.
            <br>Twórcy - osoby odpowiedzialne za stworzenie przedsięwzięcia.
            <br>Administrator - osoba będąca twórcą, która zarządza serwisem.
            <br>
            <br><span style="font-weight:bold">II WARUNKI OGÓLNE</span>
            <br>
            <br>1. Każda osoba odwiedzająca serwis, która chce uzyskać dostęp do jego zawartości, jest zobowiązana do akceptacji ninijeszego regulaminu przy użyciu przycisku "Akceptuj", wyświetlającego się przy wejściu na stronę.
            <br>2. Każda próba omijająca kliknięcie przycisku "Akceptuj", wliczając w to wykorzystywanie bugów, exploitów, glitchy, blokowanie działania JavaScript, usuwanie, ukrywanie, modyfikowanie elementów strony i innych działań, mająca na celu uzyskanie dostepu do serwisu, jest równoznaczna z akceptacją regulaminu.
            <br>3. Osoba określana mianem użytkownika jest zobowiązana do przestrzegania niniejszego regulaminu.
            <br>4. Użytkownik korzysta ze strony w sposób nienaruszający jej działania, zabronione jest używanie exploitów, glitchy, bugów oraz innych działań mających na celu destabilizacje struktury strony oraz jej działania.
            <br>5. Użytkownik domagający się zamieszczenia treści na serwisie, oświadcza, że treści są jego własnością i są zgodne z prawem Rzeczypospolitej Polskiej.
            <br>6. Użytkownik, który podejrzewa, że inny użytkownik naruszył zasady panujące w serwisie, jest zobowiązany do zgłoszenia tego faktu wysyłając wiadomość na adres kebsiorolokal@kebsioro.com.
            <br>7. Użytkownik, który zauważył błąd w serwisie, techniczny, wizualny, merytoryczny, ortograficzny lub inny, jest zobowiązany do zgłoszenia tego faktu wysyłając wiadomość na adres kebsiorolokal@kebsioro.com.
            <br>8. Użytkownik oświadcza, że przyjmuje do wiadomości następujące fakty:
            <br>&emsp;&emsp;- "Kebsioro" nie jest istniejącym miejscem fizycznym,
            <br>&emsp;&emsp;- "Kebsioro" nie pełni roli opisanej w serwisie, jest wytworem wyboraźni twórców i stanowi jedynie temat tworzenia serwisu,
            <br>&emsp;&emsp;- Serwis jest przeznaczony jedynie do rozwijania umiejętności tworzenia witryn internetowych i nie ma na celu wprowadzania osób fizycznych w błąd,
            <br>&emsp;&emsp;- Niektóre materiały użyte w serwisie nie są własnością Administratorów.
            <br>
            <br><span style="font-weight: bold">III FORUM</span>
            <br>
            <br>1. Użytkownik oświadcza, że przyjmuje do wiadomości następujące fakty:
            <br>&emsp;&emsp;- Opinie zamieszczone na forum mogą zostać usunięte,
            <br>&emsp;&emsp;- Forum może być czasowo lub trwale niedostępne,
            <br>2. Użytkownik korzysta z forum zgodnie z jego przeznaczeniem, a treści które zamieszcza są zgodne z prawem Rzeczypospolitej Polskiej.
            <br>3. Zabrania się publikowania na forum numeru telefonu, imienia i nazwiska, adresu zamieszkania, numeru PESEL oraz innych danych osobowych nienależących do użytkownika tworzącego post.
            <br>4. Zabrania się publikowania adresu IP, adresu MAC, unikalnych identyfikatorów oraz innych danych wrażliwych urządzenia nienależącego do użytkownika tworzącego post.
            <br>5. Zabrania się publikowania treści propagujących nienawiść, wyśmiewających inne osoby, zawierających elementy pornograficzne, prowadzących do złośliwego oprogramowania oraz łamiących zasady powszechnej etykiety i netykiety.
            <br>6. Użytkownik, który zauważył naruszenie regulaminu w którymś z postów, jest zobowiązany do zgłoszenia tego faktu wysyłając wiadomość na adres kebsiorolokal@kebsioro.com
            <br>7. Zabrania się wykonywania jakichkolwiek akcji wpływających negatywnie na działanie forum.
            <br> 
            <br><span style="font-weight: bold">IV PRZETWARZANIE DANYCH</span>
            <br>
            <br>1. Serwis jako publiczny portal internetowy może zbierać dane, w zależności od wykonywanych akcji, urządzenia z którego użytkownik korzysta takie jak:
            <br>&emsp;&emsp;- adres IP,
            <br>&emsp;&emsp;- dane geolokalizacyjne,
            <br>&emsp;&emsp;- godzina i data wizyty na stronie,
            <br>2. Administrator serwisu nie wykorzystuje zgromadzonych danych w celach finansowych, a także nie przekazuje ich osobom trzecim.
            <br>3. Serwis przechowuje niektóre informacje w pamięci podręcznej przeglądarki użytkownika w celach prawidłowego funkcjonowania niektórych funkcji.
            <br>4. Forum przechowuje dane generowane w ramach dodawania posta, takie jak:
            <br>&emsp;&emsp;- Zawartość wprowadzona w polu "Imię lub nick",
            <br>&emsp;&emsp;- Zawartość wprowadzona w polu "Treść opinii",
            <br>&emsp;&emsp;- Data wejścia na stronę i publikacji opinii,
            <br>&emsp;&emsp;- Unikalny identyfikator opinii.
            <br>
            <br><span style="font-weight: bold">V POSTANOWIENIE KOŃCOWE</span>
            <br>
            <br>1. Administrator zastrzega sobie prawo do stałego lub czasowego wyłączenia serwisu, a także przeniesienia serwisu na inną domenę.
            <br>2. Administrator zastrzega sobie prawo do własnej interpretacji przekazywanych przez użytkowników materiałów w celu uznania ich za odpowiednie do zamieszczenia w serwisie.
            <br>3. Administrator zastrzega sobie prawo do usuwania opinii na stronie forum w przypadku:
            <br>&emsp;&emsp;- gdy są one niezgodne z regulaminem,
            <br>&emsp;&emsp;- gdy zdarzenia losowe, niezależne od administratora, uniemożliwiają ich weryfikację pod kątem zgodności z regulaminem.
            <br>4. Administrator zastrzega sobie prawo do modyfikacji treści na stronie, w tym także regulaminu.
            <br>5. Administrator nie ponosi odpowiedzialności za czyny dokonane przez użytkowników. 
            <br>6. Administrator nie gwarantuje prawidłowego działania forum.
            <br>
            <br>
            <br><span style="font-weight: bold">Ostatnia zmiana dokonana w regulaminie - 03.01.2024.</span>
    
        </p>
    </div>
    
   
<script src="navbar.js"></script>    
<script src="theme.js"></script>
<script src="acceptance.js"></script>
<script src="adjust.js"></script>

</body>
    
<footer>
    <p class="footer">Copyright © 2024 Kebsioro. Wszelkie prawa zastrzeżone. 
        <a href="regulations.php"><span style="color: blue"></span>Regulamin</a>. </p>
    </footer>
    
</html>