<?php

function OpenConnection()
{
    $host = "localhost"; //dbhost
    $user = "root"; //dbuser
    $pass = ""; //dbpassword
    $name = "test"; //dbname
    
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

/*
function openConnection(){
    $host = "localhost"; //dbhost
    $user = "root"; //dbuser
    $pass = ""; //dbpassword
    $name = "test"; //dbname
    
    $link = mysqli_connect($host, $user, $pass, $name);
    
    if(!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;        
    }
    
    echo "Success: A proper connection to MySQL was made! The TEST database is Reachable." . PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
    
    return $link;
    mysqli_close($link);
    
    -*/
?>