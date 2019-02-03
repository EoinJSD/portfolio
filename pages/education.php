<?php
$sqlEdu = "SELECT * FROM education;";
$resEdu = mysqli_query(OpenConnection(),$sqlEdu);

echo "<div class='EducationContainer'>";

  if(mysqli_num_rows($resEdu) > 0){
    while($row = mysqli_fetch_assoc($resEdu)){

      $eduPlaceholder = "<div class='EducationPlaceholder'>
                            <div class='details'>
                              <img src='". $row["main_image_source"] ."' alt='". $row["institution"] ."'>
                                <ol>
                                  <li>". $row["institution"] ."</li>
                                  <li>". $row["short_description"] ."</li>
                                  <ll>". $row["certification"] ."</li>
                                  <li>". $row["start_date"] ." &ndash; ". $row["end_date"] ."</li>
                                </ol>
                            </div>";
      echo $eduPlaceholder;
      $eduMoreDetailsProjects = "<div class='moreDetails'>
                                <p>
                                <h3>Projects</h3>
                                  ". $row["projects"] ."";
      echo $eduMoreDetailsProjects;
      $eduCourseWork = "<h3>Coursework</h3>
                                    <ul>
                                      <li>".$row['subjects']."
                                    </ul>";

      $outputEduTopics = str_replace(',', '</li><li>', $eduCourseWork);
      echo $outputEduTopics;

        $eduSocieties = "<h3>Societies</h3>". $row["societies"] ."
                      </p>
                      </div>
                      <i id='more' class='material-icons edu'>expand_more</i>
                    </div>";
      echo $eduSocieties;
    }
  }else{
    echo "0 Results";
  }
  CloseConnection(OpenConnection());

echo "</div>";
?>
