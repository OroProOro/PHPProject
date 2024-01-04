<?php
session_start();
require_once ("menucartsystem.php");
$db_handle = new DBController();
?>

<!DOCTYPE html>
<html lang="pl">
    
<head>
<meta charset="UTF-8">
<title>Menu</title>
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
        <a class="menuactive" href="menu.php">Menu</a>
        <a class="menu" href="reviews.php">Opinie</a>
        <a class="menu" href="settings.php">Ustawienia</a>
        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
        <a class="menu" href="#" style="color: #4caf50">Zalogowano</a>
    <?php else: ?>
        <a class="menu" href="login.php">Logowanie</a>
    <?php endif; ?>
        <a href="javascript:void(0);" class="icon" onclick="navfunction()"><svg id="navbaricon" width="45px" height="45px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 7C3 6.44771 3.44772 6 4 6H24C24.5523 6 25 6.44771 25 7C25 7.55229 24.5523 8 24 8H4C3.44772 8 3 7.55229 3 7Z" fill="#000000"/><path d="M3 14C3 13.4477 3.44772 13 4 13H24C24.5523 13 25 13.4477 25 14C25 14.5523 24.5523 15 24 15H4C3.44772 15 3 14.5523 3 14Z" fill="#000000"/><path d="M4 20C3.44772 20 3 20.4477 3 21C3 21.5523 3.44772 22 4 22H24C24.5523 22 25 21.5523 25 21C25 20.4477 24.5523 20 24 20H4Z" fill="#000000"/></svg></a>
    </div>


	<div class="menuwelcomediv">
    <h1>Menu</h1>    
    <p>Poniżej znajdziesz listę produktów dostępnych w sprzedaży internetowej.</p>
    </div>

   
    <div id="shopping-cart">
<div class="txt-heading">Koszyk</div>

<a id="btnEmpty" href="menu.php?action=empty">Opróżnij koszyk</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Nazwa produktu</th>
<th style="text-align:left;">Kod produktu</th>
<th style="text-align:right;" width="5%">Ilość</th>
<th style="text-align:right;" width="10%">Cena za sztukę</th>
<th style="text-align:right;" width="10%">Cena (całość)</th>
<th style="text-align:center;" width="5%">Usuń</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "PLN ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "PLN ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="menu.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Do zapłaty:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "PLN ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Twój koszyk jest pusty.</div>
<?php 
}
?>
</div>

<div id="product-grid">
	<div class="txt-heading">Produkty</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM product ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="menu.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo "PLN".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Dodaj" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
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


</body>

</html>