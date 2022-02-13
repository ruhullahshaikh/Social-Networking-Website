<?php
/*
    contain database configuration
    using root and password
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');


//try connecting databas


$conn= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn==false){
    die('Error: Cant connet');
}

?>
