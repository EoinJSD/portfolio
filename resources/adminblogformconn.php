<?php
function Connection(){
    $host = "localhost"; //dbhost
    $user = "root"; //dbuser
    $pass = ""; //dbpassword
    $name = "portfolio"; //dbname

    $conn = mysqli_connect($host,$user,$pass,$name);

    if($conn === false){
        echo "Could not connect to DB: " . mysqli_connect_error() . PHP_EOL;
    }else{
        return $conn;
    }
        // File Upload Script
        $target_dir = "./images/";
        $target_file = $target_dir . basename($_FILES["image_source"]["name"]);
          echo 'console.log('. $target_file .')';
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image_source"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }

        $title              =$_POST['title'];
        $short_description  =$_POST['short_description'];
        $description        =$_POST['description'];
        $time_stamp         =$_POST['time_stamp'];
        $genre              =$_POST['genre'];

        $_title             = mysqli_real_escape_string(Connection(),$title);
        $_short_description = mysqli_real_escape_string(Connection(),$short_description);
        $_description       = mysqli_real_escape_string(Connection(),$description);
        $_time_stamp        = mysqli_real_escape_string(Connection(),$time_stamp);
        $_genre             = mysqli_real_escape_string(Connection(),$genre);
        $_target_file       = mysqli_real_escape_string(Connection(),$target_file);

        $titlequery = "SELECT * FROM posts WHERE title = '".$_title."'";
        $titleresult = mysqli_query(Connection(),$titlequery);

        if(mysqli_num_rows($titleresult) >= 1){
            echo 'Title already in use...';
        }else{
            $insertquery = "INSERT INTO posts (title, short_description, description, time_stamp, image_source, genre) VALUES ('".$_title."','".$_short_description."','".$_description."','".$_time_stamp."','".$_target_file."','".$_genre."')";
            $result = mysqli_query(Connection(),$insertquery);

            if($result){
                header('Location: http://localhost/portfolio_website/portfolio/adminblogform.php');
                echo 'Log posted successfully';
            }
        }
mysqli_close(Connection());
}
?>
