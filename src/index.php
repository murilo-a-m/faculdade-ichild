<?php
    session_start();
    $url = dirname($_SERVER['SCRIPT_NAME']);                   
    $url = substr($url,strrpos($url,"\\/")+1,strlen($url));    
    if (substr_count($url, '/') >= 1){                          
        $url = substr($url,strrpos($url,"\\/"),strlen($url));  
        $url = strstr($url, '/',true);
    }
    $url = "Location: /" . $url . "/pages/home/home.php";	
    header($url);
?>