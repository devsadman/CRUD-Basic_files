<?php
    $connection=new mysqli('localhost','root','','sms');
    if($connection->connect_error){
        echo $connection->connect_error;
    }
?>