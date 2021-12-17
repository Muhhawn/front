
<?php

include '../PHP_Settings/settings.php';
include '../PHP_Settings/db.php';

$dbc = new db( $dbHost, $dbUser, $dbPass, $dbName );

$sql = "SELECT * FROM product" ;

$result=$dbc ->query ($sql); 
$productList = $result -> fetchAll();

  
include 'User_Panel_View.php';

$dbc -> close();

?>