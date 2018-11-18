<?php
function OpenConnection()
{
    $host = "localhost:3306"; //dbhost
    $user = "eoinjsd_owner"; //dbuser
    $pass = "Iamixbuck92"; //dbpassword
    $name = "eoinjsd_portfolio"; //dbname

    $conn = mysqli_connect($host,$user,$pass,$name);

 if($conn === false){
     echo "Could not connect to DB: " . mysqli_connect_error() . PHP_EOL;
 }else{
     return $conn;
 }
}

function CloseConnection($conn){
    $conn -> close();
}
?>
