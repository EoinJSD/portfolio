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
        $tags       =$_POST['tags'];
        $author     =$_POST['author'];
        $content    =$_POST['content'];
        $usertype   =$_POST['usertype'];

        $_target    = mysqli_real_escape_string(Connection(),$target);
        $_title     = mysqli_real_escape_string(Connection(),$title);
        $_tags      = mysqli_real_escape_string(Connection(),$tags);
        $_author    = mysqli_real_escape_string(Connection(),$author);
        $_content   = mysqli_real_escape_string(Connection(),$content);
        $_usertype  = mysqli_real_escape_string(Connection(),$usertype);

        $titlequery = "SELECT * FROM blogpost WHERE title = '".$_title."'";
        $titleresult = mysqli_query(Connection(),$titlequery);
$content

        if(mysqli_num_rows($titleresult) >= 1){
            echo "<p>Title already in use...</p>";
        }else{
            $insertquery = "INSERT INTO blogpost (target, title, tags, author, content, usertype) VALUES ('".$_target."','".$_title."','".$_tags."','".$_author."','".$_content."','".$_usertype."')";
            $result = mysqli_query(Connection(),$insertquery);

            if($result){
                header('Location: http://localhost/portfolio_website/portfolio/');
                echo "<p>Log posted successfully</p>";
            }
        }
mysqli_close(Connection());
?>
