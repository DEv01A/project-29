<?php

    $database= new mysqli("localhost","root","","ewuntoma");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>