<?php include('inc/productsarray.php') ?>
<?php
$pageTitle = "Gallery";
$section = "Gallery";
include("inc/headercopyhschl.php"); 
include("inc/filterhead.php"); ?>
<!--include('inc/header.php'); -->
 <div class="row">
    <div class="large-12 columns">
<!-- Column 1 -->
    <?php 
    $total = count($products)-1;
    $first = round($total/3);
    $second = $first*2; 
     ?>
        <div class="large-4 medium-6 columns">
  
                   <?php
                        for($i=1;$i<=$first;$i++) { 
                            $product = $products[$i];
                            ?>
                    <a href="productpage.php?id=<?php echo $i ?>"> <img src="<?php echo $product["img"]; ?>">
 
                    <div class="panel">
                        <h5><?php echo $product["name"];?></h5>
                        <h6 class="subheader"><em>Starting at: $<?php echo $product["price"]; ?></em></h6>
                    </div>
                <?php } ?>
        </div>

<!-- Column 2 -->
        <div class="large-4 medium-6 columns">
                <?php 
                        for($i>$first;$i<=$second;$i++) { 
                            $product = $products[$i];
                            ?>
                
                    <a href="productpage.php?id=<?php echo $i ?>"><img src="<?php echo $product["img"]; ?>">
 
                    <div class="panel">
                        <h5><?php echo $product["name"];?></h5>
                        <h6 class="subheader"><em>Starting at: $<?php echo $product["price"]; ?></em></h6>
                    </div>
                <?php } ?>
        </div>  
<!-- Column 3 -->
      
        <div class="large-4 medium-6 columns">
                <?php 
                    for($i>$second;$i<=$total;$i++) { 
                            $product = $products[$i];
                            ?>
                    <a href="productpage.php?id=<?php echo $i ?>"><img src="<?php echo $product["img"]; ?>">
 
                    <div class="panel">
                        <h5><?php echo $product["name"]?></h5>
                        <h6 class="subheader"><em>Starting at: $<?php echo $product["price"]; ?></em></h6>
                    </div>
                
                <?php } ?>
        </div>

 <!-- Example in case of fuck up in code
     <div class="large-4 medium-6 columns">
                <?php foreach($products as $product) {?>
                
                
                    <img src="<?php echo $product["img"]; ?>">
 
                    <div class="panel">
                        <h5><?php echo $product["name"]?></h5>
                        <h6 class="subheader"><?php echo $product["price"]; ?></h6>
                    </div>
                
                <?php } ?>
        </div>
-->




    </div>
</div>

<?php include('inc/footer.php'); ?>