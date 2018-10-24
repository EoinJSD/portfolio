<?php

include_once './resources/dbconn.php';

$sql    = "SELECT * FROM files;";
$result = mysqli_query(OpenConnection(), $sql);

  $result_check = mysqli_num_rows($result);
  if ($result_check > 0) {
    while ($row  = mysqli_fetch_assoc($result)) {
      $genre = $row['genre'];
      echo '<div data-genre="'. $genre .'" class="cardContainer">';
      echo' <div class="card box-shadow">
              <img src="'. $row['image'] .'" class="image-responsive" />
              <div class="card-body">
                <p class="card-text">'. $row['description'] .'</p>
              </div>
            </div>
          </div>';
    }
  }
?>
