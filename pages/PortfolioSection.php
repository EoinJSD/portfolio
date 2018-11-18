<?php

include_once './resources/dbconn.php';

$sql    = "SELECT * FROM posts;";
$result = mysqli_query(OpenConnection(), $sql);

  $result_check = mysqli_num_rows($result);
  if ($result_check > 0) {
    while ($row  = mysqli_fetch_assoc($result)) {
      echo '<div data-genre="'. $row['genre'] .'" class="cardContainer">
            <div class="card">
              <img src="'. $row['image_source'] .'" class="image-responsive" />
              <div class="card-body">
                <p class="card-text">'. $row['short_description'] .'</p>
              </div>
            </div>
            </div>';
    }
  }
?>
