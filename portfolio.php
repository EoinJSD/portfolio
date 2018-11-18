<!DOCTYPE html>
<html>
<head>
    <?php include_once('pages/inc/head.inc.php')?>
    <link rel="stylesheet" href="/portfolio_website/portfolio/styles/portfolio.css">
</head>
<body>
    <header><?php include_once('pages/inc/header.inc.php') ?></header>
<?php
include_once 'resources/dbconn.php';
$sql    = "SELECT * FROM gallery;";
$result = mysqli_query(OpenConnection(), $sql);
?>
    <div class="landingContainer">
      <div class="carouselContainer">
        <?php
        $result_check = mysqli_num_rows($result);
          if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)) {
              $src = $row['src'];
              $alt = $row['alt'];

              echo '<img class="slides" src="./images/bg-1.jpg" alt="default"/>
                    <img class="slides" src="'. $src .'" alt="'. $alt .'" />';
            }
          }else{
            echo '<img class="slides" src="./images/bg-1.jpg" alt="default"/>';
          }
        ?>
          <div class="throwingShade">
            <!--This is me throwing shade...-->
          </div>
      </div>
      <!-- badges  for projects to be displayed below-->
      <div class="badgesContainer">
            <ul class="badges">
              <li class="badge-item">
                <a class="link" href="#">DEVELOPMENT</a>
              </li>
              <li class="badge-item">
                <a class="link" href="#">BLOG</a>
              </li>
              <li class="badge-item">
                <a class="link" href="#">DESIGN</a>
              </li>
              <li class="badge-item">
                <a class="link" href="#">MUSIC</a>
              </li>
              <li class="badge-item">
                <a class="link" href="#">MISC</a>
              </li>
            </ul>
      </div>
    </div>

    <article class="MainContainer">
      <section class="row">
          <?php include_once('pages/PortfolioSection.php') ?>
      </section>
    </article>

    <footer><?php include_once('pages/inc/footer.inc.php') ?></footer>

    <script src="./scripts/jquery/jquery-3.3.1.min.js"></script>
    <script src="./scripts/portfolio.js"></script>
    <script src="./scripts/index.js"></script>
</body>
</html>
