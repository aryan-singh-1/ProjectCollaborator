<?php      
    $host = "localhost";  
    $user = "pma";  
    $password = "";  
    $db_name = "aryanlogin";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  