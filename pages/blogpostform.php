<!DOCTYPE html>
<?php include '../resources/dbconn.php';?>
<html>
<head>
    <title> INSERT </title>
    <link rel="stylesheet" href="/portfolio_website/portfolio/styles/main.css" />
    <link rel="shortcut icon" href="/portfolio_website/portfolio/images/favicon/favicon.ico">
</head>
<body>
    <header>
        <?php include_once('../pages/inc/header.inc.php') ?>
    </header>

    <fieldset>
        <legend>New Blog Post</legend>
        <input id="title" placeholder="Title" type="text" tabindex="2" /><br/>
        <input id="stitle" placeholder="Subtitle" type="text" tabindex="3" /><br/>
        <input id="content" placeholder="Start writing..." type="text" tabindex="4" /><br/>
        <input id="author" placeholder="Author" type="text" tabindex="5" /><br/>
        
        <label>Target</label>
        <select>
        <optgroup label="Target" tabindex="6">
            <option>Blog</option>
            <option>Bio</option>
            <option>Project</option>
            <option>Other</option>
        </optgroup>
        </select><br/>
        
        <label>User</label>
        <select>
        <optgroup label="User Type" tabindex="7" >
            <option>Administrator</option>
            <option>General</option>
            <option>Super User</option>
        </optgroup>
        </select>
    </fieldset>
</body>
</html>