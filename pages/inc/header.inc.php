<?php $url = $_SERVER['REQUEST_URI'];?>
<nav><!--Centered container for Logo and Links-->
  <div class="nav-container">
    <div class="logo-container">
        <a href="/portfolio_website/portfolio/index.php" class="logo">@EoinJSD</a>
        <span>let's keep it simple...</span>
    </div>
    <div class="links-container">
      <ul class="links">
        <li><a class="active" id="home" href="/portfolio_website/portfolio/index.php">Home</a></li>
        <li><a id="blog" href="/portfolio_website/portfolio/blog.php">Blog</a></li>
        <li><a id="projects" href="/portfolio_website/portfolio/projects.php">Projects</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
if (strpos($url, '/index.php') == true  || strpos($url, '/') == true){
?>
<div class="bio">
  <div class="bio-container">
  <div class="bio-item">
    <img class="bio-pic" src="images/top-section/profile-pic.jpg" />
  </div>
  <div class="bio-item">
    <div class="bio-text">
      <p>
        Quo affert adipisci facilisis te, nec movet consectetuer et. Eum vidisse prompta maiorum
        id. His altera civibus honestatis te, ut quem delenit petentium vel. At nec eius denique,
        tota ipsum eligendi ne mel, modo dicam percipit sea no. Vix novum nusquam id, te sonet graeci
        expetenda has, illum virtute vituperata in duo.
      </p>
      <p>
        Quo affert adipisci facilisis te, nec movet consectetuer et. Eum vidisse prompta maiorum
        id. His altera civibus honestatis te, ut quem delenit petentium vel. At nec eius denique,
        tota ipsum eligendi ne mel, modo dicam percipit sea no. Vix novum nusquam id, te sonet graeci
        expetenda has, illum virtute vituperata in duo.
      </p>
    </div>
  </div>
</div>
</div>
<?php } ?>
