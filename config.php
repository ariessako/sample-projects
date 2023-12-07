<?php
    // class crud{
    //     public static function connect(){
    //         try{
    //             $con = new PDO('mysql:localhost=host, dbname=school_directory','root','');
    //             return $con;
    //         }catch(PDOException $error1){
    //             echo 'DB cannot connect'.$error1->getMessage();
    //         }
    //     }
    // }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_directory";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";


?>