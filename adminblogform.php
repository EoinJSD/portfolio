<!DOCTYPE html>
<?php include '/resources/dbconn.php';?>
<html>
<head>
<?php include_once('pages/inc/head.inc.php')?>
<link rel="stylesheet" href="/portfolio_website/portfolio/styles/adminblogformstyle.css" />
</head>
<body>
    <header><?php include_once('pages/inc/header.inc.php') ?></header>

    <section class="BlogSection">
      <h2>New Blog Post...</h2>
    <form class="adminblogform" id="adminblogform" action="resources/adminblogformconn.php" method="POST">
    <section class="leftside">
      <input type="text" name="title" placeholder="Title"/>
      <input type="text" name="tags" placeholder="Tags"/>
      <input type="text" name="author" placeholder="Author"/>
      <select name="target">
        <option disabled selected>Target</option>
        <option value="bio">Bio</option>
        <option value="blog">Blog</option>
        <option value="project">Project</option>
        <option value="other">Other</option>
      </select>
      <select name="usertype">
        <option disabled selected>User Type</option>
        <option value="g">G</option>
        <option value="a">A</option>
        <option value="s">S</option>
      </select>
      <input class="submitpost" type="submit" value="Post!" />
    </section>

    <section class="rightside">
      <textarea name="content" placeholder="Start writing..."></textarea>
    </section>
    </form>
    </section>

    <footer><?php include_once('pages/inc/footer.inc.php') ?></footer>
</body>

</html>