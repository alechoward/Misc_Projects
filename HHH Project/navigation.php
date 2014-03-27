<?php
// if session 'cart' was set, count it, else set it to 0
$cartItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>
<div class='navigation'>
    <a href='index.php' class='customButton'>Home</a>
    <a href='browseshopedit.php' class='customButton'>View Products</a>
    <a href='checkout.php' class='customButton'>View Cart <?php echo "({$cartItemCount})"; ?></a>
</div>