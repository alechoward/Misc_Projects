<?php 
session_start();
include('inc/productsarray.php');
?>
<?php
$pageTitle = "Gallery";
$section = "Gallery";
include("inc/headercopyhschl.php"); 
include("inc/Header_jan_27_test.php"); 
include ("inc/styledescriptions.php");?>
<!--include('inc/header.php'); -->
 <?php 
    $var = "chinosieresr";
    $example = $chinosieresr;
    $des = $chinoisieresdes;
    $title = $chinoisierestitle;

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
    <div class="large-16 columns">
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
                        <h5><?php echo $product["PID"];?></h5>
                        <?php $product_code = $product["PID"];?>
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
                
                <div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
    echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>




        </div>



        <div class="large-4 medium-6 columns">

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