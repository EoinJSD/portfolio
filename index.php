<!DOCTYPE html>
<?php include 'resources/dbconn.php'; ?>
<html>
    <?php include_once('pages/inc/head.inc.php')?>
<body>
    <header><?php include_once('pages/inc/header.inc.php') ?></header>

<article class="MainContainer">
    <section class="indexSection"><?php include_once('pages/SkillsSection.php')?> </section>
    <section class="indexSection"><?php include_once('pages/WorkExperience.php') ?></section>
    <section class="indexSection"><?php include_once('pages/ShowOff.php') ?></section>
    <section class="indexSection"><?php include_once('pages/BlogSection.php') ?></section>
    <section class="indexSection"><?php include_once('pages/Education.php') ?></section>
</article>

    <footer><?php include_once('pages/inc/footer.inc.php') ?></footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="./scripts/education.js"></script>
    <script type="text/javascript" src="./scripts/index.js"></script>
    <script type="text/javascript" src="./scripts/skills.js"></script>

</body>
</html>
