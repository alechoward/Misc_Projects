<?php ?>
<?php include('inc/productsarray.php');

$product_id = $_GET["id"];
$product = $products[$product_id];
$section = "Product_Page";
$pageTitle = $product["name"];
include("inc/headercopyhschl.php"); 
include("inc/filterhead.php"); ?>

<div class="row">
    <div class="large-12 columns">

		<div class="large-5 large-7 columns" data-reveal-id="myVid">
			<ul>
			  
				  <li style="list-style: none;">
				   <img src="<?php echo $product["img"]; ?>" class="image-preload" />
				   <div class="reveal-modal large" id="myVid" data-reveal>
                    	<h2><?php echo $product["name"]; ?></h2>
                  			<img src="<?php echo $product["img"]; ?>" frameborder="0" allowfullscreen="">
                      	<a class="close-reveal-modal">×</a>
                  </div>
				  </li></a>
			</ul>
    	</div>

    	<div class="large-3 large-5 columns">
			 <div class="product-description small-caps" class="rte" itemprop="description">
                        <h3><?php echo $product["name"];?></h3>
                       	 	<ul style="list-style: none;">

                        		<li>Flower Ladies, 2003</li>
                       	 		<li>Watercolor on 100% Rag Paper</li>
								<li>Gicl&egrave;e Print</li>
								<li><strong><em>Gicl&egrave;e starting at: $<?php echo $product["price"]; ?></em></strong></li>
							</ul>
              <hr><div class="product-description small-caps" class="rte" itemprop="description"></hr>
		        <p>This museum quality Giclée is produced using archival pigment inks on the finest 100% rag archival paper. Each limited edition print is custom trimmed by hand. Two sizes are available.</p>
		        	<ul>
		        		<li>Original Medium - Watercolor</li>
		        		<li>Image Dimensions (16" x 21") and (25" x 33")</li>
		        		<li>Paper Dimensions (18" x 23") and (27" x 35")</li>
		        		<li>Limited Edition of 300 Prints</li>
		        		<li>(Prints are sold unmated and unframed)</li>
		        	</ul>
					  <p class="sku">sku: <span>10014-00157-OS</span></p>
		      </div>
             </div>
    	</div>




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




