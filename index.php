<!DOCTYPE html>
<?php include 'resources/dbconn.php'; ?>
<html>
    <head><?php include_once('pages/inc/head.inc.php')?></head>
<body>
    <section class="LandingZone">
    <header><?php include_once('pages/inc/header.inc.php') ?></header>
    <?php include_once('pages/Bio.php') ?>
    </section>

    <section class="Skills"><?php include_once('pages/Skills.php') ?></section>

    <section class="ShowOff"><?php include_once('pages/ShowOff.php') ?></section>

    <section class="blogSection" id="index"><div class="blogContainer scrolly" id="index"><?php include_once('pages/BlogSection.php') ?></div></section>

    <section class="WorkExperience"><?php include_once('pages/WorkExperience.php') ?></section>

    <section class="Education"><?php include_once('pages/education.php') ?></section>

    <footer><?php include_once('pages/inc/footer.inc.php') ?></footer>
</body>
</html>
