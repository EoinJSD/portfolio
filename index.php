<!DOCTYPE html>
<?php include '/resources/dbconn.php';?>
<html>
<head><?php include_once('pages/inc/head.inc.php')?></head>
<body>
    <header><?php include_once('pages/inc/header.inc.php') ?></header>

    <section class="topSection"><!-- Body Main Container -->
      <div class="content c1">
      <div class="parent p1">
        <img class="profile-pic" src="images/top-section/profile-pic-400x400.jpg" />
      </div>
      <div class="parent p2">
      <div class="bio">
      <p>
        It has survived not only five centuries, but also the leap into electronic
        typesetting, remaining essentially unchanged.
      </p>
      <p>
        Also the leap into electronic typesetting, remaining essentially unchanged. and more recently with
        desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </p>
      <p>
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
        passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </p>
      </div>
      </div>
      </div>
    </section>

  	<section class="wideSection">
    	<div class="wide-content-1">
        <h1>Images</h1>
    	</div>
  	</section>

    <section class="blogSection">
      <div class="blogContainer">
        <?php
        $sql = "SELECT id, target, title, tags, author, content, entrydate, usertype FROM blogpost";
        $result = mysqli_query(OpenConnection(),$sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $string = "<div class='placemat-index'><h2 class='blogTitle'>" . $row["title"]. "</h2><p><span>" . $row["content"]. "<br><span>" . $row["author"]. " - " . $row["entrydate"]. "</span></p>";
                if (strlen($string) > 300) {
                    $stringCut = substr($string, 0, 400);
                    $string = substr($stringCut, 0, strrpos($stringCut, ' '))."...<a class='readmore' href='blog.php'>Read More</a></div>";
                 }
                echo $string;
            }
        }else{
            echo "0 Results";
        }
        CloseConnection(OpenConnection());
        ?>
      </div>
    </section>

    <footer><?php include_once('pages/inc/footer.inc.php')?></footer>
</body>
</html>
