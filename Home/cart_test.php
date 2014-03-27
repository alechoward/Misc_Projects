<?php 
session_start();
//unset ($_SESSION['items']);
include('inc/productsarray.php');
?>

<?php
$pageTitle = "Gallery";
$section = "Gallery";
include("inc/headercopyhschl.php"); 
include("inc/Header_jan_27_test.php"); 
include ("inc/styledescriptions.php");

$action = $_GET["action"];

if($action == "add") { 

$example = $chinosieresr;
$product_id1 = $_GET["id"];
$product_qty = $_GET["qty"];
$product_id_MASTER = $_GET["pid"]; 

$imgdimensions1 = $db->query("SELECT giclee.PrimKey1 as PKEY, giclee.ID as PID, giclee.IMG_DIM as IMGDIM, giclee.PrimKey1 as PRIMKEY, giclee.PRICE as PRCE, giclee.PAPER_DIM AS PAPERDIM, 
	CAST(left(giclee.PAPER_DIM, 2) AS UNSIGNED) AS Num FROM giclee 
	WHERE giclee.PrimKey1 = '$product_id1' ");

$imgdim1 = $imgdimensions1->fetchAll(PDO::FETCH_ASSOC); 

$_SESSION['items'][$product_id1] = array('Quantity' => $product_qty, 'PIDM' => $product_id_MASTER, 'PIDGiclee' => $product_id1);
}
if ($action == "remove") {
	$_SESSION['items'];
	$product_id1 = $_GET["id"];
	echo $product_id1;
	unset($_SESSION['items'][$product_id1]);
}


?>

<script type="text/javascript">

function changeText2(){
  var e = document.getElementById("PRICE");
  var Price = e.options[e.selectedIndex].value.split(';');
  var Pricearray = Price[0];
  document.getElementById('boldStuff1').innerHTML = Pricearray;
  
  var f = document.getElementById("PRICE");
  var prodkey = f.options[f.selectedIndex].value.split(';');
  var prodkeyarray = prodkey[1];
  var passthrough = prodkey[1]
  document.getElementById('PrimK').innerHTML = prodkeyarray;
}
function changeQuantity() {
var quantity = document.getElementById('Q').value;
document.getElementById('Quan').innerHTML = quantity;
}


</script>
<div class="row">

    <div class = "large 12 columns">
	<div class="small-5 columns">
	<h4> Shopping Cart </h4>
</div>
	<div class = "small-2 columns">
		<a href="browseshopclickableelementnewtest.php" class="small button">Continue Shopping</a>
</div>
</div>
	<?php $subtotal=0;?>
	<?php foreach($_SESSION['items'] as $value) { 
			
			$gicleeID = $value['PIDGiclee'];
			$gicleeQTY = $value['Quantity'];
			$homeID = $value['PIDM'];

			$gicleeDATA = $db->query("SELECT giclee.PrimKey1 as PKEY, giclee.ID as PID, giclee.IMG_DIM as IMGDIM, giclee.PrimKey1 as PRIMKEY, giclee.PRICE as PRCE, giclee.PAPER_DIM AS PAPERDIM, 
						CAST(left(giclee.PAPER_DIM, 2) AS UNSIGNED) AS Num FROM giclee 
						WHERE giclee.PrimKey1 = '$gicleeID' ");
			$gicleeDataRS = $gicleeDATA->fetchAll(PDO::FETCH_ASSOC); 

			$homeDATA = $db->query("SELECT hh_inventory.ID AS PID, hh_inventory.TITLE AS name, hh_inventory.IMG_URL AS img, min(PRICE) AS price, hh_inventory.ORIGINAL AS ORAVAIL, 
        				hh_inventory.ORIG_MED AS ORMED, hh_inventory.ORIG_DIM AS ORDIM, giclee.PrimKey1 as PRIMKEY, giclee.IMG_DIM as IMGDIM, giclee.PAPER_DIM AS PAPERDIM, hh_inventory.STYLE AS STYLE
        				FROM hh_inventory INNER JOIN giclee ON hh_inventory.ID=giclee.ID WHERE hh_inventory.ID = '$homeID' ");
			$homeDataRS = $homeDATA->fetchAll(PDO::FETCH_ASSOC);
			
			$total = $value['Quantity']*$gicleeDataRS[0]['PRCE']
?>			<hr></hr>
			<div class="row">
				<div class = "large 12 columns">
					<div class="large-3 columns">
						 <li style="list-style: none;">
				  		 <img src="img/Artwork/CM.jpg"></li>
					</div>

					<div class="small-5 columns">
						<li style="list-style: none;">
						<?php echo $homeDataRS[0]["name"];?>, <?php echo $gicleeDataRS[0]['PAPERDIM'];?> </li>
					</div>
					
					<div class="small-1 columns">
						<li style="list-style: none;">
						$<?php echo $gicleeDataRS[0]['PRCE'];?></li>
						
					</div>
					
					<div class="small-1 columns">
							<form>
                    			<input id = "Q" type="number" min="1" value="<?php echo $gicleeQTY;?>" onclick='changeQuantity()'/>
                			</form>
					</div>

					<div class="small-1 columns">
							<li style="list-style: none;"> <em id='Quan'> 1 </em></li>
					</div>

					
					<div class="small-1 columns">
					<li style="list-style: none;">
						$<?php echo $total ?>
					</div>

					<div class="small-1 columns">
						<li style="list-style: none;">
						<a href="http://localhost/home/cart_test.php?action=remove&id=<?php echo  $gicleeID ?>" class="small button">Remove</a></li>
					</div>
			<?phpif(isset($_POST["submit"])) {unset($_SESSION['items'][$value]) }?>
			
			</div>
			</div>
   			<?php $subtotal += $total; } ?>
			<hr></hr>
			<div class="row">
				<div class = "large 12 columns">
   						<div class="large-8 columns">
							<li style="list-style: none;">
							<strong><em>Subtotal: $<?php echo $subtotal ?></em></strong></li>
						<div>

<?php $items = $_SESSION['items']; ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="no_note" value="1">  
<input type="hidden" name="business" value="harhamhow@aol.com">
<input type="hidden" name="currency_code" value="CAD">
<input type="hidden" name="return" value="http://www.mysite.com/">   

<?php
    $suffix = 1;
    foreach($items as $item):
    		$gicleeID = $item['PIDGiclee'];
			$gicleeQTY = $item['Quantity'];
			$homeID = $item['PIDM'];

			$gicleeDATA = $db->query("SELECT giclee.PrimKey1 as PKEY, giclee.ID as PID, giclee.IMG_DIM as IMGDIM, giclee.PrimKey1 as PRIMKEY, giclee.PRICE as PRCE, giclee.PAPER_DIM AS PAPERDIM, 
						CAST(left(giclee.PAPER_DIM, 2) AS UNSIGNED) AS Num FROM giclee 
						WHERE giclee.PrimKey1 = '$gicleeID' ");
			$gicleeDataRS = $gicleeDATA->fetchAll(PDO::FETCH_ASSOC); 

			$homeDATA = $db->query("SELECT hh_inventory.ID AS PID, hh_inventory.TITLE AS name, hh_inventory.IMG_URL AS img, min(PRICE) AS price, hh_inventory.ORIGINAL AS ORAVAIL, 
        				hh_inventory.ORIG_MED AS ORMED, hh_inventory.ORIG_DIM AS ORDIM, giclee.PrimKey1 as PRIMKEY, giclee.IMG_DIM as IMGDIM, giclee.PAPER_DIM AS PAPERDIM, hh_inventory.STYLE AS STYLE
        				FROM hh_inventory INNER JOIN giclee ON hh_inventory.ID=giclee.ID WHERE hh_inventory.ID = '$homeID' ");
			$homeDataRS = $homeDATA->fetchAll(PDO::FETCH_ASSOC);	

?>
<!-- <input type="hidden" name="item_name_<?php echo $suffix; ?>" value="<?php echo $item['PIDGiclee']; ?>"> -->
<input type="hidden" name="item_name_<?php echo $suffix; ?>" value="<?php echo $homeDataRS[0]['name']; ?>"> 
<input type="hidden" name="amount_<?php echo $suffix; ?>" value="<?php echo $gicleeDataRS[0]['PRCE']; ?>"> 
<input type="hidden" name="quantity_<?php echo $suffix; ?>" value="<?php echo $gicleeQTY; ?>"> 
<?php
    $suffix++;
    endforeach;
?>

<input type="submit" name="paypal" id="paypal" value="Checkout" />
</form>


  <script src="http://foundation.zurb.com/assets/js/jquery.js"></script>
    <script src="http://foundation.zurb.com/assets/js/templates/foundation.js"></script>
    <script src="http://foundation.zurb.com/assets/js/templates/foundation.reveal.js"></script>
    <script>
      $(document).foundation();
      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>