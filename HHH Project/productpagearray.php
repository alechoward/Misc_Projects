
<?php 

include("inc/headercopyhschl.php"); 
include("inc/Header_jan_27_test.php"); 
include ("inc/styledescriptions.php");


try { 
    $db = new PDO("mysql:host=localhost;dbname=hhweb;port=3306","root");
    $db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
    echo "Could not connect to the database.";
    exit;
}


$imgdimensions = array();
$imgdimensions = $db->query("SELECT giclee.ID as PID, giclee.IMG_DIM as IMGDIM, giclee.PAPER_DIM AS PAPERDIM FROM giclee 
	WHERE giclee.ID = 211 ");

$imgdim = $imgdimensions->fetchAll(PDO::FETCH_ASSOC);


$total = count($imgdim);
?><li><a href="#" data-dropdown="drop" class="[tiny small medium large] [secondary alert success] [radius round] button dropdown">Dropdown Button</a><br>
		<ul id="drop" data-dropdown-content class="f-dropdown">
			<?php for($i=0;$i<count($imgdim);$i++) {
			$product = $imgdim[$i];
			?> <li><a href="#"><?php echo $product["IMGDIM"];?></a></li>

		
<?php } ?>
		</ul>
  			
<label for="customDropdown">Dropdown Label</label>
<select style="display:none;" id="customDropdown">
  <?php for($i=0;$i<count($imgdim);$i++) {
			$product = $imgdim[$i]; ?>
  <option><?php echo $product["IMGDIM"];?></option>
  <?php } ?>
</select>


<div class="large-12 columns">
      <label>Select Box</label>
      <select>
        <?php for($i=0;$i<count($imgdim);$i++) {
			$product = $imgdim[$i]; ?>
			<option value = "<?php echo $product["PID"];?>"><?php echo $product["IMGDIM"];?></option>
      <?php } ?>
      </select>
  
    </div>



<script src="http://foundation.zurb.com/assets/js/jquery.js"></script>
    <script src="http://foundation.zurb.com/assets/js/templates/foundation.js"></script>
    <script src="http://foundation.zurb.com/assets/js/templates/foundation.reveal.js"></script>
    <script>
      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
