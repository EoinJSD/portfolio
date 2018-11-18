<!DOCTYPE html>
<?php include 'resources/dbconn.php';?>
<html>
<head>
<?php include_once('pages/inc/head.inc.php')?>
<link rel="stylesheet" href="/portfolio_website/portfolio/styles/adminblogformstyle.css" />
</head>
<body>
    <header><?php include_once('pages/inc/header.inc.php') ?></header>

<article class="mainContainer">
    <section class="formContainer">
      <h2>Upload New Post</h2>
      <form class="adminForm" id="adminblogform" action="resources/adminblogformconn.php" method="POST">
        <section class="leftside">
          <textarea class="short" name="short_description" placeholder="Short description..."></textarea>
          <textarea class="desc" name="description" placeholder="Start writing..."></textarea>
        </section>
        <section class="rightside">
          <input type="text" name="title" placeholder="Title"/>
          <select name="target">
            <option disabled selected>Genre</option>
            <option value="bio">Bio</option>
            <option value="blog">Blog</option>
            <option value="logo">Logo</option>
            <option value="music">Music</option>
            <option value="design">Design</option>
            <option value="web">Web</option>
            <option value="dev">Development</option>
            <option value="misc">Misc</option>
          </select>
          <input type="file" name="image_source" id="imgUpload">
          <input class="submitpost" type="submit" value="Post!" />
        </section>
      </form>
    </section>

    <section class="formContainer">
      <h2>Add New Skill</h2>
      <form class="adminForm" action="resources/adminblogformconn.php" method="post">
        <section class="leftside">
          <textarea class="short" type="text" name="skill" placeholder="What's The Skill"></textarea>
          <textarea class="desc" type="text" name="description" placeholder="Description (optional)"></textarea>
        </section>
        <section class="rightside">
          <select name="topic">
            <option disabled selected>Topic</option>
            <option value="WEB">Web Development</option>
            <option value="GRAPH">Graphic Design</option>
            <option value="DEV">Development Tools</option>
          </select>
          <input type="file" name="image_source" value="Upload Image">
          <input class="submitpost" type="submit" value="Post!" />
        </section>
      </form>
    </section>

    <section class="formContainer">
      <h2>Add New Education</h2>
      <form class="adminForm" action="resources/adminblogformconn.php" method="post">
        <section class="leftside">
          <textarea name="name" rows="8" cols="80"></textarea>
        </section>
      </form>
    </section>
</article>

    <footer><?php include_once('pages/inc/footer.inc.php') ?></footer>
    <script src="scripts/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./scripts/index.js"></script>
</body>

</html>
