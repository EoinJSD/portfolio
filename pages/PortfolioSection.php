<?php
include_once './resources/dbconn_hg.php';

$sql    = "SELECT * FROM posts where NOT genre = 'bio';";
$result = mysqli_query(OpenConnection(), $sql);


  $result_check = mysqli_num_rows($result);
  if ($result_check > 0) {
    while ($row  = mysqli_fetch_assoc($result)) {

      echo '<div id="'. $row['genre'] .'" class="card-container">
              <div class="card">
                <img src="'. $row['image_source'] .'" class="image-responsive" />
                <div class="card-body">
                    <span class="open">&#x2715;</span>
                    <p class="card-text">'. $row['short_description'] .'<button class="more">See More</button></p>
                </div>
              </div>

              <div class="desc">
                <h2>'. $row['title'] .'</h2>
                <p>'. $row['description'] .'</p>
              </div>
            </div>';
    }
  }
?>
