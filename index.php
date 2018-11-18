<!DOCTYPE html>
<?php
include 'resources/dbconn.php';
include 'resources/contactForm.php';
?>
<html>
<head>
    <?php include_once('pages/inc/head.inc.php')?>
    <link rel="stylesheet" href="./styles/skills.css" />
    <link rel="stylesheet" href="./styles/images.css" />
    <link rel="stylesheet" href="./styles/workexp.css" />
    <link rel="stylesheet" href="./styles/education.css" />
    <link rel="stylesheet" href="./styles/portfolio.css" />
</head>
<body>
    <header><?php include_once('pages/inc/header.inc.php') ?></header>
    <?php include_once('pages/BioSection.php') ?>
<article class="MainContainer">
    <section class="indexSection"><?php include_once('pages/SkillsSection.php') ?> </section>
    <section class="indexSection"><?php include_once('pages/WorkExperience.php') ?></section>
    <section class="indexSection"><?php include_once('pages/ShowOff.php') ?></section>
    <section class="indexSection"><?php include_once('pages/BlogSection.php') ?></section>
    <section class="indexSection"><?php include_once('pages/Education.php') ?></section>
</article>

    <footer><?php include_once('pages/inc/footer.inc.php') ?></footer>

    <script src="scripts/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./scripts/education.js"></script>
    <script type="text/javascript" src="./scripts/index.js"></script>
    <script type="text/javascript" src="./scripts/skills.js"></script>
    <script type="text/javascript" src="./scripts/contact.js"></script>
</body>
</html>
