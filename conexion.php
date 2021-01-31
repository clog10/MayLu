<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=ventas', 'root', '');

    
}catch(PDOException $e){
    print"¡Error!:" . $e->getMessage(). "<bre/>";
    die();
}