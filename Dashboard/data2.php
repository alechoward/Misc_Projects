<?php 


$server = mysql_connect("10.1.1.73", "ahoward", "ah");

$connection = mysql_select_db("dev", $server);


$query = mysql_query("SELECT alec_RentalBuyback2.File_NAME AS name1, sum(alec_RentalBuyback2.Customer_amount) AS sum from dev.alec_RentalBuyback2 Group by alec_RentalBuyback2.File_NAME");

for ($x = 0; $x < mysql_num_rows($query); $x++) {
        $data[] = mysql_fetch_assoc($query);
    }

 echo json_encode($data); 






 

    ?> 