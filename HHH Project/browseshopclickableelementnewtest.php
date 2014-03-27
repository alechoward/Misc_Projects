<?php include('inc/productsarray.php') ?>
<?php
$pageTitle = "Gallery";
$section = "Gallery";
include("inc/headercopyhschl.php"); 
include("inc/Header_jan_27_test.php"); 
include ("inc/styledescriptions.php");?>
<!--include('inc/header.php'); -->
 <?php 
    $var = $_GET['var'];
    if ($var == "gardensrs") {
       $example = $gardensrs;
       $des = $gardensdes;
       $title = $gardenstitle; 
   } elseif ($var == "shellsrs") {
    $example = $shellsrs;
    $des = $shellsdes;
    $title = $shellstitle;
   } elseif ($var == "chinosieresr") {
    $example = $chinosieresr;
    $des = $chinoisieresdes;
    $title = $chinoisierestitle;
   } elseif ($var == "miscellaneousrs") {
    $example = $miscellaneousrs;
    $des = $miscellaneousdes;
    $title = $miscellaneoustitle;
   } else {
    $example = $flowersrs;
    $des = $flowersdes;
    $title = $flowerstitle;
   }

    $total = count($example);
    $first = round($total/3);
    $second = $first*2; 
     ?>

<div class = "row">
    <div class="large-6 columns text-center large-centered">
        <h4><strong><?php echo $title; ?></strong></h4>
</div>                
</div>
<div class="row">
  <div class="large-12 columns text-center large-centered">
  <p><?php echo $des; ?></p>
</div>                
</div>
<hr></hr>
<!-- draws line across page-->
 <div class="row">
    <div class="large-12 columns">
<!-- Column 1 -->
    
        <div class="large-4 medium-6 columns">
  
                   <?php
                        for($i=0;$i<$total;$i++) { 
                            if($i % 2 == 0 and $i % 3 != 0) {
                            $product = $example[$i];
                            ?>
                    <a href="productpageEdit.php?id=<?php echo $i?>&var=<?php echo $var ?>&pid=<?php echo $product["PID"];?>"> <img src="<?php echo $product["img"]; ?>">
 
                    <div class="panel">
                        <h5><?php echo $product["name"];?></h5>
                        <h6 class="subheader"><em>Starting at: $<?php echo $product["price"]; ?></em></h6>
                    </div>

                <?php } } ?>
        </div>

<!-- Column 2 -->
        <div class="large-4 medium-6 columns">
                <?php 
                        for($i=0;$i<$total;$i++) { 
                            if($i % 3 == 0) {
                            $product = $example[$i];
                            ?>
                
                    <a href="productpageEdit.php?id=<?php echo $i?>&var=<?php echo $var ?>&pid=<?php echo $product["PID"];?>"><img src="<?php echo $product["img"]; ?>">
 
                    <div class="panel">
                        <h5><?php echo $product["name"];?></h5>
                        <h6 class="subheader"><em>Starting at: $<?php echo $product["price"]; ?></em></h6>
                    </div>
                <?php } } ?>
        </div>  
<!-- Column 3 -->
      
        <div class="large-4 medium-6 columns">
                <?php 
                    for($i=0;$i<$total;$i++) { 
                        if($i % 2 != 0 and $i % 3 !=0) {
                            $product = $example[$i];
                            ?>
                    <a href="productpageEdit.php?id=<?php echo $i?>&var=<?php echo $var ?>&pid=<?php echo $product["PID"];?>"><img src="<?php echo $product["img"]; ?>">
 
                    <div class="panel">
                        <h5><?php echo $product["name"]?></h5>
                        <h6 class="subheader"><em>Starting at: $<?php echo $product["price"]; ?></em></h6>
                    </div>
                
                <?php }   } ?>
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