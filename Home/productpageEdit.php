<?php session_start() ?>


<?php include('inc/productsarray.php');
$pid = $_GET['pid'];
$var = $_GET['var'];
if ($var == "gardensrs") {
       $example = $gardensrs; 
   } elseif ($var == "shellsrs") {
    $example = $shellsrs;
   } elseif ($var == "chinosieresr") {
    $example = $chinosieresr;
   } elseif ($var == "miscellaneousrs") {
    $example = $miscellaneousrs;
   } elseif ($var == "flowersrs") {
    $example = $flowersrs;
   } else {
   	$example = $products;
   }

$product_id = $_GET["id"];
$product = $example[$product_id];
/* change $products array to $chinoisierers or $shellsrs or $miscellaneousrs to originate correct product page on click     
(LOCATE('.',giclee.PAPER_DIM)-1)*/
$section = "Product_Page";
$pageTitle = $product["name"];
include("inc/headercopyhschl.php"); 
include("inc/Header_jan_27_test.php"); 

$imgdimensions = $db->query("SELECT giclee.ID as PID, giclee.IMG_DIM as IMGDIM, giclee.PrimKey1 as PRIMKEY, giclee.PRICE as PRCE, giclee.PAPER_DIM AS PAPERDIM, 
	CAST(left(giclee.PAPER_DIM, 2) AS UNSIGNED) AS Num FROM giclee 
	WHERE giclee.ID = '$pid' ORDER BY Num Asc ");

$imgdim = $imgdimensions->fetchAll(PDO::FETCH_ASSOC); 

?>

<link rel="stylesheet/less" href="css/lightbox.css" type="text/css" media="screen" />
<script src="js/lightbox.js"></script>

<div class="row">
    <div class="large-12 columns">
		<div class="large-5 large-7 columns" data-reveal-id="myVid">
			<ul>
			  
				  <li style="list-style: none;">
				    <a href = "<?php echo $product["img"]; ?>" class="image-preload" rel='lightbox'>
            <img src="<?php echo $product["img"]; ?>" class="image-preload" />
				  </li></a>
			</ul>
    	</div>

<!-- Script to change Price on click of size select box -->
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


    	<div class="large-3 large-5 columns">
			 <div class="product-description small-caps" class="rte" itemprop="description">
                        <h3><?php echo $product["name"];?></h3>
                       	 	<ul style="list-style: none;">

                        		<li><?php echo $product["STYLE"] ?></li>
                       	 		<li><?php echo $product["ORMED"] ?> on 100% Rag Paper</li>
								<li>Original: <em><strong>
									<?php if ($product["ORAVAIL"] == 1) {
										echo "Available";
									} else {
										echo "Unavailable";
									} ?>
								<em></strong></li>
								<li>

							</ul>
              <hr><div class="product-description small-caps" class="rte" itemprop="description"></hr>
		        <li style="list-style: none;" ><strong><em>Gicl&egrave;e starting at: $</em><em id='boldStuff1'><?php echo $product["price"]; ?></em></strong></li><p></p>
            <li style="list-style: none;"> <em id='Quan'> 1 </em></li>
            <li style="list-style: none;"> <em id='PrimK'> 0 </em></li>

      								<li style="list-style: none;"><select id = "PRICE" onclick='changeText2()'  >
        								    <?php for($i=0;$i<count($imgdim);$i++) {
										        $dropdown = $imgdim[$i]; ?>
										        <option value = "<?php echo $dropdown["PRCE"]?>;<?php echo $dropdown["PRIMKEY"];?>"><?php echo $dropdown["PAPERDIM"];?></option>
     									      <?php } ?>
      								      </select>
                      </li>

      								<form>
                    				<input id = "Q" type="number" min="1" value="1" onclick='changeQuantity()'/>
                			</form>
                						
                      <a href="" class="small button" onclick="window.open('http://localhost/home/cart_test.php?pid=' + <?php echo $pid?> + '&action=add' + '&id='+ document.getElementById('PRICE').value.split(';')[1] +'&qty=' + 
                        document.getElementById('Q').value)  ">Add to Cart</a><br> 
		        <p>This museum quality Giclée is produced using archival pigment inks on the finest 100% rag archival paper. Each limited edition print is custom trimmed by hand. Two sizes are available.</p>
		        	<ul>
		        		<li>Original Medium - <?php echo $product["ORMED"]; ?></li>
		        		<li>Original Dimensions (<?php echo $product["ORDIM"]; ?>)</li>
		        		<li>  Image Dimensions 
                  <?php for($i=0;$i<count($imgdim);$i++) {
                    $dp = $imgdim[$i];?>(
                    <?php echo $dp["IMGDIM"];?>) or 
                  <?php }?></li> 

		        		<li>  Paper Dimensions
                  <?php for($i=0;$i<count($imgdim);$i++) {
                    $dp = $imgdim[$i];?>(
                    <?php echo $dp["PAPERDIM"];?>) or  
                  <?php }?></li> 

		        		<li>Limited Edition of 300 Prints</li>
		        		<li>(Prints are sold unmated and unframed)</li>
		        	</ul>
				<p class="sku">sku: <span>10014-00157-OS</span></p>
		      </div>
             </div>
    	</div>









<script src="http://zoom.it/scripts/combo-viewer-min.js"></script>
<script src="http://aseemk.github.io/zoomit-lightbox/test/zoomit.js"></script>
<script src="http://aseemk.github.io/zoomit-lightbox/src/lightbox.js"></script>
<script>
    // explicitly initialize Zoom.it Lightbox here for better perf
    Zoomit.Lightbox.init();
</script>

<script src="http://foundation.zurb.com/assets/js/jquery.js"></script>
    <script src="http://foundation.zurb.com/assets/js/templates/foundation.js"></script>
    <script src="http://foundation.zurb.com/assets/js/templates/foundation.reveal.js"></script>
    <script>
      $(document).foundation();
      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>

    </div>
</div><!-- large-7 -->
   

<!-- <pre><?php
echo $product_id . "\n";
var_dump($product);
?></pre> -->
