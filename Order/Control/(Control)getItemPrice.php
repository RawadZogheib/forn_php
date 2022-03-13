<?php 


$locConfig = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Config/Model/(Model)config.inc.php';
$locVersionTest = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Config/Control/(Control)versionTest.php';
$locGetItemPrice = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Order/Model/(Model)getItemPrice.inc.php';
$locTrue  = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Error/View/(View)true.php';

require $locVersionTest;

require $locConfig;
$con = con($server);
$Items = array();
$t=0;

require $locGetItemPrice;
if(mysqli_num_rows($xx)>0){
    $t = 1;
    while($res = mysqli_fetch_assoc($xx)){	
        $Items[] = array($res["Item"],$res["Price"]);
    }	
}else  if(mysqli_num_rows($xx) == 0){
    $t = 2;
    $Items = array();
} 

$json_array[0] = 'error4';
$json_array[1] = $Items;

if($t == 1){
    $json_array[0] = 'success';
}else if($t == 2){
    $json_array[0] = 'empty';
}
echo json_encode($json_array);

mysqli_close($con);


?>