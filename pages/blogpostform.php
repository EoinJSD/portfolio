<!DOCTYPE html>
<?php include '../resources/dbconn.php';?>
<html>
<head>
    <title> INSERT </title>
    <link rel="stylesheet" href="/portfolio_website/portfolio/styles/main.css" />
    <link rel="shortcut icon" href="/portfolio_website/portfolio/images/favicon/favicon.ico">
    
    <script type="javascript/jquery">
    $(document).on('submit', '#blogpostform', function(e) {
     $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: $(this).serialize(),
        success: function(html) {
        alert('ok');
        }
    });
    e.preventDefault();
});
    </script>
</head>
<body>
    <header>
        <?php include_once('../pages/inc/header.inc.php') ?>
    </header>
  
    <form id="blogpostform" action="../resources/blogpostconn.php" method="POST">
    <fieldset>
    <legend>New Blog Post</legend>
    <p>
    <select name="target">
        <option disabled selected>Target</option>
        <option value="bio">Bio</option>
        <option value="blog">Blog</option>
        <option value="project">Project</option>
        <option value="other">Other</option>
    </select>
    </p>
    <p>
        <input type="text" name="title" placeholder="Title"/>
        <input type="text" name="subtitle" placeholder="Subtitle"/>
    </p>
    <p>
        <input type="text" name="author" placeholder="Author"/>
    </p>
    <p>
        <textarea name="content" placeholder="Start writing..."></textarea>
    </p>
    <p>
    <select name="usertype">
        <option disabled selected>User Type</option>
        <option value="g">G</option>
        <option value="a">A</option>
        <option value="s">S</option>
    </select>
    </p>
    <p>
        <input type="submit" value="Post!" />
    </p>
    </fieldset>
    </form>
    
</body>
</html>