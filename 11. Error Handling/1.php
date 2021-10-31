<?php 
    include('config.php');

    try {
        echo $name; // undefinded variable
        
    } catch (\Throwable $th) {
        echo "<pre>"; print_r($th);
    }