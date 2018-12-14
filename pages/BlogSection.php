<?php
$uriCheck = $_SERVER['REQUEST_URI'];
$PortfolioUri = '/portfolio/portfolio.php';

$sql = "SELECT * FROM posts where NOT genre = 'bio';";
$result = mysqli_query(OpenConnection(),$sql);

  echo "<div class='BlogContainer scrolly'>";

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
          $string = "<div class='placemat'>
                        <h2 class='BlogTitle'>" . $row["title"]. "</h2>
                        <p>" . $row["description"]. "</p>";

                        if (strlen($string) > 200) {
                          $stringCut = substr($string, 0, 300);
                          $string = substr($stringCut, 0, strrpos($stringCut, ' '))."...
                        <a class='readmore' href='portfolio.php'>Read More</a>
                        <br/>
                        <span>" . $row["time_stamp"] ."</span>
                        </div>";
                        }
          echo $string;
    }
  }else{
    echo "0 Results";
  }
  CloseConnection(OpenConnection());

echo "</div>"
?>
