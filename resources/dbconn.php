<?php
function OpenConnection()
{
    $host = "localhost"; //dbhost
    $user = "root"; //dbuser
    $pass = (trim(@file_get_contents('../../dbconnections/sqlpassword.txt'))); //dbpassword
    $name = "portfolio"; //dbname

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
