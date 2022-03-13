<?php 


$locConfig = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Config/Model/(Model)config.inc.php';
$locVersionTest = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Config/Control/(Control)versionTest.php';
$locGetgallery = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Gallery/Model/(Model)getGallery.inc.php';
$locTrue  = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Error/View/(View)true.php';

require $locVersionTest;

require $locConfig;
$con = con($server);
$Images = array();
$t=0;

require $locGetgallery;
if(mysqli_num_rows($xx)>0){
    $t = 1;
    while($res = mysqli_fetch_assoc($xx)){
        $Images[] = array($res["Id"],$res["title"],$res["details"],$res["price"]);
    }	
}else  if(mysqli_num_rows($xx) == 0){
    $t = 2;
    $Images = array();
} 

$json_array[0] = 'error4';
$json_array[1] = $Images;

if($t == 1){
    $json_array[0] = 'success';
}else if($t == 2){
    $json_array[0] = 'empty';
}
echo json_encode($json_array);

mysqli_close($con);


?>