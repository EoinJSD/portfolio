    <?php
    $uriCheck = $_SERVER['REQUEST_URI'];
    $BlogUri = '/portfolio_website/portfolio/Blog.php';

    $sql = "SELECT id, target, title, tags, author, content, entrydate, usertype FROM Blogpost";
    $result = mysqli_query(OpenConnection(),$sql);

if(strpos($uriCheck, '/blog.php') == true){
  echo "<div class='BlogContainer-blog'>";
}else{
  echo "<div class='BlogContainer-index scrolly'>";
}

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          //check the page uri and use the correct element class name
            if(strpos($uriCheck, '/blog.php') == true){
              echo "<div class='placemat'><h2 class='title'>" . $row["title"]. "</h2><p>" . $row["content"]. "</p><span>" . $row["author"]. " - " . $row["entrydate"]. "</span></p></div>";
            }else{
              $string = "<div class='placemat-index'><h2 class='BlogTitle'>" . $row["title"]. "</h2><p>" . $row["content"]. "</p><span>" . $row["author"]. " - " . $row["entrydate"]. "</span></p>";

              if (strlen($string) > 200) {
                  $stringCut = substr($string, 0, 300);

                  $string = substr($stringCut, 0, strrpos($stringCut, ' '))."...<a class='readmore' href='Blog.php'>Read More</a></div>";
               }
              echo $string;
            }
        }
    }else{
        echo "0 Results";
    }
    CloseConnection(OpenConnection());

echo "</div>"
    ?>
