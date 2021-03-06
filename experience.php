<!DOCTYPE html>
<?php include './resources/dbconn_hg.php'; ?>
<html>
<head>
    <?php include_once('pages/inc/head.inc.php')?>
    <link rel="stylesheet" href="./styles/skills.css" />
    <link rel="stylesheet" href="./styles/workexp.css" />
    <link rel="stylesheet" href="./styles/education.css" />
    <link rel="stylesheet" href="./styles/portfolio.css" />
</head>
<body>
    <header>
      <?php include_once('pages/inc/header.inc.php') ?>
      <?php include_once('pages/inc/mobileHeader.inc.php') ?>
      <div class="banner">
        <h1>Experience</h1>
      </div>
    </header>
      <!-- <?php // include_once('pages/BioSection.php') ?> -->
    <article class="MainContainer">
      <section class="indexSection"><?php include_once('pages/SkillsSection.php') ?> </section>
      <section class="indexSection"><?php include_once('pages/WorkExperience.php') ?></section>
      <section class="indexSection"><?php include_once('pages/BlogSection.php') ?></section>
      <section class="indexSection"><?php include_once('pages/Education.php') ?></section>
    </article>

    <footer>
      <?php include_once('pages/inc/footer.inc.php') ?>
    </footer>
</body>
  <script src="scripts/jquery/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="./scripts/education.js"></script>
  <script type="text/javascript" src="./scripts/index.js"></script>
  <script type="text/javascript" src="./scripts/skills.js"></script>
  <script type="text/javascript" src="./scripts/experience.js"></script>
</html>
