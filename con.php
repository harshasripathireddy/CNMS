<?php      
    $host = "localhost";  
    $userid = "root";  
    $password = '';  
    $db_name = "cnms";  
      
    $con = mysqli_connect($host, $userid, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  