<div class="blogContainer">
    <?php
    $uriCheck = $_SERVER['REQUEST_URI'];
    $blogUri = '/portfolio_website/portfolio/blog.php';


    $sql = "SELECT id, target, title, tags, author, content, entrydate, usertype FROM blogpost";
    $result = mysqli_query(OpenConnection(),$sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          //check the page uri and use the correct element class name
            if($uriCheck == $blogUri){
              echo "<div class='placemat-blog'><h2 class='blogTitle'>" . $row["title"]. "</h2><p><span>" . $row["content"]. "<br><span>" . $row["author"]. " - " . $row["entrydate"]. "</span></p></div>";
            }else{
              $string = "<div class='placemat-index'><h2 class='blogTitle'>" . $row["title"]. "</h2><p><span>" . $row["content"]. "<br><span>" . $row["author"]. " - " . $row["entrydate"]. "</span></p>";

              if (strlen($string) > 200) {
                  $stringCut = substr($string, 0, 300);

                  $string = substr($stringCut, 0, strrpos($stringCut, ' '))."...<a class='readmore' href='blog.php'>Read More</a></div>";
               }
              echo $string;
            }
        }
    }else{
        echo "0 Results";
    }

    CloseConnection(OpenConnection());
    ?>
</div>
