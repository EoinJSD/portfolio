<!DOCTYPE html>
<?php include 'resources/dbconn.php'; ?>
<html>
    <head><?php include_once('pages/inc/head.inc.php')?></head>
<body>
    <header><?php include_once('pages/inc/header.inc.php') ?></header>
    <section class="LandingZone"><?php include_once('pages/Bio.php') ?></section>

    <section class="Skills"><?php include_once('pages/Skills.php') ?></section>

    <section class="ShowOff"><?php include_once('pages/ShowOff.php') ?></section>

    <section class="blogSection" id="index"><div class="blogContainer" id="scroll"><?php include_once('pages/BlogSection.php') ?></div></section>

    <footer><?php include_once('pages/inc/footer.inc.php') ?></footer>
</body>
</html>
