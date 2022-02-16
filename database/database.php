<?php
    // LOCAL 
	define('HOST', 'localhost');
	define('DB_NAME','bi');
	define('USER', 'root');
	define('PASS', "");

    try{
        $mysqli = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connecté";
    }catch(PDOException $e){
        echo $e;
    }
?>