<!DOCTYPE html>
<html>
<head>
    <?php include_once('pages/inc/head.inc.php')?>
    <link rel="stylesheet" href="/portfolio_website/portfolio/styles/portfolio.css">
</head>
<body>
    <header><?php include_once('pages/inc/header.inc.php') ?></header>

    <div class="landingContainer">
      <div class="carouselContainer">
          <div class="carousel-item active">

          </div>
          <div class="carousel-item">

          </div>
      </div>
      <!-- Links  for projects to be displayed below-->
      <div class="linksContainer">
            <ul class="carouselContainer">
              <li class="carousel-item">
                <a class="link" href="#">BLOG</a>
              </li>
              <li class="carousel-item">
                <a class="link" href="#">DESIGN</a>
              </li>
              <li class="carousel-item">
                <a class="link" href="#">OTHER</a>
              </li>
              <li class="carousel-item">
                <a class="link" href="#">OTHER</a>
              </li>
              <li class="carousel-item">
                <a class="link" href="#">PHOTOGRAPHY</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="./scripts/index.js"></script>
</body>
</html>
