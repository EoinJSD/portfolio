<div class="ExpContainer scrollx">
  <ol>
    <?php
    include_once './resources/dbconn_hg.php';

    // Initial SQL query
    $sql    = "SELECT * FROM timeline ORDER BY start_date ASC;";
    $result = mysqli_query(OpenConnection(), $sql);

      //checking the above
      $result_check = mysqli_num_rows($result);
      if ($result_check > 0) {

        //fetching the results
        while ($row = mysqli_fetch_assoc($result)) {

          //echoing the main result to html

          if($row['end_date'] == $row['start_date']){
            echo '<li>
                    <div class="experienceContainer" id="'. $row['id'] .'">
                      <h3>'. $row['start_date'] .'</h3>
                        <span>'. $row['title'] .'</span>
                        <span>'. $row['short_description'] .'</span>
                    </div>
                  </li>';

          }else if(empty($row['end_date'])){
          echo '<li>
                  <div class="experienceContainer" id="'. $row['id'] .'">
                    <h3>'. $row['start_date'] .' - Present</h3>
                      <span>'. $row['title'] .'</span>
                      <span>'. $row['short_description'] .'</span>
                  </div>
                </li>';
              }else{
                echo '<li>
                        <div class="experienceContainer" id="'. $row['id'] .'">
                          <h3>'. $row['start_date'] .' - '. $row['end_date'] .'</h3>
                            <span>'. $row['title'] .'</span>
                            <span>'. $row['short_description'] .'</span>
                        </div>
                      </li>';
              }
        }
      }
    ?>
    <li></li>
  </ol>
</div>

<div id="experienceModal" class="modal fade">
  <div class="modalDialog">
    <div class="modalContent">
      <div class="modalHeader">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Work Experience Details</h4>
      </div>
      <div class="modal-body" id="experienceDetails">Hello</div>
      <div class="model-footer">
        <button type="button" class="btn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
