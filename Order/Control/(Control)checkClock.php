<?php 
    $locVersionTest = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Config/Control/(Control)versionTest.php';
    $locTrue  = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Error/View/(View)true.php';

    require $locVersionTest;

    $current_time = date('h:i a');
    // $current_time = "4:00 pm";
    $sunrise = "6:10 am";
    $sunset = "11:59 pm";
    $date1 = DateTime::createFromFormat('h:i a', $current_time);
    $date2 = DateTime::createFromFormat('h:i  a', $sunrise);
    $date3 = DateTime::createFromFormat('h:i a', $sunset);
    if ($date1 >= $date2 && $date1 <= $date3){
        require $locTrue;
    }else{
        echo '["errorTime","'.$sunrise.'","'.$sunset.'"]';
	    exit(0);
    }


?>