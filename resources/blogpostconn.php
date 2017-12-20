<?php
function Connection(){
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
    $target     =$_POST['target'];
    $title      =$_POST['title'];
    $subtitle   =$_POST['subtitle'];
    $author     =$_POST['author'];
    $content    =$_POST['content'];
    $usertype   =$_POST['usertype'];

        $_target    = mysqli_real_escape_string(Connection(),$target);
        $_title     = mysqli_real_escape_string(Connection(),$title);
        $_subtitle  = mysqli_real_escape_string(Connection(),$subtitle);
        $_author    = mysqli_real_escape_string(Connection(),$author);
        $_content   = mysqli_real_escape_string(Connection(),$content);
        $_usertype  = mysqli_real_escape_string(Connection(),$usertype);


        $insertquery = "INSERT INTO blogpost (target, title, subtitle, author, content, usertype) VALUES ('".$_target."','".$_title."','".$_subtitle."','".$_author."','".$_content."','".$_usertype."')";
        $result = mysqli_query(Connection(),$insertquery);

        $checktitlequery = "SELECT FROM blogpost WHERE title ='".$_title."'";
        $checktitleresult = mysqli_query(Connection(),$checktitlequery);


        if(mysqli_num_rows($checktitleresult) > 0){
            echo "<p>Title has already been used before... Please chose a new one</p>";
        }else{
            if($result){
            echo "<p>details entered</p>";
            }else{
                echo "<p>Something went wrong</p>";
            }
        }
mysqli_close(Connection());
?>