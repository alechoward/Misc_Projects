<?php


try { 
	$db = new PDO("mysql:host=localhost;dbname=hhweb;port=3306","root");
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}
 try { 
 	$results = $db->query("SELECT ID, TITLE AS name, IMG_URL AS img, ORIG_PRICE AS price FROM hh_inventory");
 	echo "Our query was successful";
 } catch (exception $e) {
 	echo "FUCKING SHIT";
 	exit;
 };
 echo "<pre>";
 	var_dump($results->fetchAll(PDO::FETCH_ASSOC))
 ?>
 <!-- $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXECPTION); -->