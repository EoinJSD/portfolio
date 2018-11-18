<div class="SkillsContainer">
  <div class="tab">
    <button class="tablinks active" onclick="openCity(event, 'WEB')"> <i class="material-icons">web</i><br />Web Development</button>
    <button class="tablinks" onclick="openCity(event, 'GRAPH')"> <i class="material-icons">perm_media</i><br />Graphic Design</button>
    <button class="tablinks" onclick="openCity(event, 'DEV')"> <i class="material-icons">code</i><br />Development Tools</button>
  </div>
  <!-- Tab Content -->
  <div id="WEB" class="tabcontent" style="display: block;">
    <div class="tabContainer">
      <?php
        $topicWeb = "WEB";
        $topicquery = "SELECT * FROM skills WHERE topic = '".$topicWeb."'";
        $topicresult = mysqli_query(OpenConnection(),$topicquery);

        $topicresult_check = mysqli_num_rows($topicresult);
          if($topicresult_check >= 1){
            while ($topicrow = mysqli_fetch_assoc($topicresult)) {
              echo '<img class="skillsImage" src="'. $topicrow['image_source'] .'"/>';
            }
          }
      ?>
      <img class="skillsImage" src="./images/tec-logos/html.png"/>
      <img class="skillsImage" src="./images/tec-logos/html.png"/>
    </div>
  </div>

  <div id="GRAPH" class="tabcontent">
    <div class="tabContainer">
      <?php
        $topicGraph = "GRAPH";
        $topicquery = "SELECT * FROM skills WHERE topic = '".$topicGraph."'";
        $topicresult = mysqli_query(OpenConnection(),$topicquery);

        $topicresult_check = mysqli_num_rows($topicresult);
          if($topicresult_check >= 1){
            while ($topicrow = mysqli_fetch_assoc($topicresult)) {
              echo '<img class="skillsImage" src="'. $topicrow['image_source'] .'"/>';
            }
          }
      ?>
    </div>
  </div>

  <div id="DEV" class="tabcontent">
    <div class="tabContainer">
      <?php
        $topicDev = "DEV";
        $topicquery = "SELECT * FROM skills WHERE topic = '".$topicDev."'";
        $topicresult = mysqli_query(OpenConnection(),$topicquery);

        $topicresult_check = mysqli_num_rows($topicresult);
          if($topicresult_check >= 1){
            while ($topicrow = mysqli_fetch_assoc($topicresult)) {
              echo '<img class="skillsImage" src="'. $topicrow['image_source'] .'"/>';
            }
          }
      ?>
  </div>
</div>
