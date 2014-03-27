<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <title>Crazy Auto Store</title>
    </head>
    <body>
        <div class="summary">
           <h1>Below is your order summary:</h1>
           <hr />
           <?php
               //declare the variables here
               $oilqty = 0;
               $sparksqty = 0;
               $tiresqty = 0;
               $total = 0;
 
               //Now let us get the values from the form
               if(isset($_POST['oil'])){
                  $oilqty = &$_POST['oil'];
               }
               if(isset($_POST['sparks'])){
                  $sparksqty = &$_POST['sparks'];
               }
               if(isset($_POST['tires'])){
                  $tiresqty = &$_POST['tires'];
               }
               $total = $oilqty + $sparksqty + $tiresqty;
               echo '<b>You ordered on </b>'. date('H:i, jS F Y'). ':';
               echo '<br />';
               echo '<b> '.$oilqty. '</b> Oil Containers <br />';
               echo '<b> '.$sparksqty. '</b> Spark Plugs </br />';
               echo '<b> '.$tiresqty. '</b> New Tires <br />';
               echo '<b> '.$total. ' Total Items </b>';
           ?>
           <hr />
           <p>Copyright 2013 &copy; Crazy Auto Store Inc </p>
        </div>
    </body>
</html>