<!DOCTYPE html>
<?php
include '../resources/dbconn.php';
?>
<html>
<head>
    <title>Designated Designer</title>
    <link rel="stylesheet" href="/portfolio_website/portfolio/styles/main.css" />
	<link rel="shortcut icon" href="/portfolio_website/portfolio/images/favicon/favicon.ico">		
</head>
<body>
    
    <header>
    <?php include_once('inc/header.inc.php') ?>
    </header>
    
    <section class="blogSection">
        <div class="blogContainer">
        <?php
                
        $sql = "SELECT id, target, title, tags, author, content, entrydate, usertype FROM blogpost";
        $result = mysqli_query(OpenConnection(),$sql);
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='placemat-blog'><h2 class='blogTitle'>" . $row["title"]. "</h2><p><span>" . $row["content"]. "<br><span>" . $row["author"]. " - " . $row["entrydate"]. "</span></p></div>";
            }
        } else{
            echo "0 Results";
        }
        
        CloseConnection(OpenConnection());
        ?>
        </div>
    </section>
    
    <footer>
        <?php include_once('inc/footer.inc.php') ?>
    </footer>    
</body>
</html>