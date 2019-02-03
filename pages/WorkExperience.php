<div class="ExpContainer scrollx">
      <ol>
          <?php
          include_once './resources/dbconn_hg.php';

          $sql    = "SELECT * FROM timeline ORDER BY start_date ASC;";
          $result = mysqli_query(OpenConnection(), $sql);

            $result_check = mysqli_num_rows($result);
            if ($result_check > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<li>
                        <div>
                          <h3>'. $row['start_date'] .'</h2>
                            <span>'. $row['title'] .'</span>
                            <span>'. $row['short_description'] .'</span>
                        </div>
                      </li>';
              }
            }
          ?>
          <li></li>
      </ol>
</div>
