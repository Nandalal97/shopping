<?php
    $server='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($server,$username,$password,"shopping");
    if(!$conn){
        
        die('Could not Connect:' .mysql_connect_error());
    }
?>