<!DOCTYPE html>
  <?php include_once('resources/dbconn_hg.php')?>
<html>
<head>
  <?php include_once('pages/inc/head.inc.php')?>
  <link rel="stylesheet" href="./styles/portfolio.css">
</head>
<body>
  <header>
  <?php include_once('pages/inc/header.inc.php')?>
  <?php include_once('pages/inc/mobileHeader.inc.php')?>
  <div class="banner">
    <h1>Portfolio</h1>
  </div>
  </header>

    <article class="MainContainer">
      <!-- badges  for projects to be displayed below
        <div class="badgesContainer">
          <ul class="badges scrollx">
            <li class="badge-item">
              <a class="link" href="#dev">DEV</a>
            </li>
            <li class="badge-item">
              <a class="link" href="#blog">BLOG</a>
            </li>
            <li class="badge-item">
              <a class="link" href="#design">DESIGN</a>
            </li>
            <li class="badge-item">
              <a class="link" href="#music">MUSIC</a>
            </li>
            <li class="badge-item">
              <a class="link" href="#misc">MISC</a>
            </li>
          </ul>
        </div>
      -->
    <section class="row">
    <?php include_once('pages/PortfolioSection.php') ?>
    </section>
    </article>

  <footer><?php include_once('pages/inc/footer.inc.php') ?></footer>
</body>
<script src="./scripts/jquery/jquery-3.3.1.min.js"></script>
<script src="./scripts/portfolio.js"></script>
<script src="./scripts/index.js"></script>
</html>
