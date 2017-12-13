<!DOCTYPE html>
<?php
include '/resources/dbconn.php';
?>
<html>
<head>
    <title> Eoin J S Designs | Landing </title>
    <link rel="stylesheet" href="/portfolio_website/portfolio/styles/main.css" />
    <link rel="shortcut icon" href="/portfolio_website/portfolio/images/favicon/favicon.ico">
    
    <script src="jquery-3.2.1.min.js">
    jQuery(function(){

    var minimized_elements = $('p.minimize');
    
    minimized_elements.each(function(){    
        var t = $(this).text();        
        if(t.length < 100) return;
        
        $(this).html(
            t.slice(0,100)+'<span>... </span><a href="#" class="more">More</a>'+
            '<span style="display:none;">'+ t.slice(100,t.length)+' <a href="#" class="less">Less</a></span>'
        );
        
    }); 
    
    $('a.more', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show();        
    });
    
    $('a.less', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();    
    });

});
    
    </script>
</head>
<body>
    
    <header>
    <?php include_once('pages/inc/header.inc.php') ?>
    </header>
        
    <section class="topSection"><!-- Body Main Container -->
    <div class="content c1">
    <div class="parent p2">
        <!--
        <div class="item">
            <img class="profile-pic" src="images/top-section/profile-pic-400x400.jpg" />
        </div>
        -->
    </div>
        
    <div class="parent p1">
      <div class="bio">
        <p>It has survived not only five centuries, but also the leap into electronic 
            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the 
            release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
            desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>

        <p>Quo affert adipisci facilisis te, nec movet consectetuer et. Eum vidisse prompta maiorum 
            id. His altera civibus honestatis te, ut quem delenit petentium vel. At nec eius denique, 
            tota ipsum eligendi ne mel, modo dicam percipit sea no. Vix novum nusquam id, te sonet graeci 
            expetenda has, illum virtute vituperata in duo.
        </p>
      </div>
    </div>
    </div>
	</section>
	
	<section class="wideSection">
	<div class="wide-content-1">
<h1>Images</h1>
	</div>
	</section>

    <section class="blogSection">
    <div class="blogPlacemat-container">
        <?php
                
        $sql = "SELECT id, target, title, subtitle, author, content, entrydate, usertype FROM blogpost";
        $result = mysqli_query(OpenConnection(),$sql);
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='blogPlacemat'><h1>" . $row["title"]. "</h1><p class='minimize'>" . $row["content"]. "<br><span>" . $row["author"]. " - " . $row["entrydate"]. "</span></p></div>";
            }
        } else{
            echo "0 Results";
        }
        
        CloseConnection(OpenConnection());
        ?>

    </div>        
    </section>
    <footer>
        <?php include_once('pages/inc/footer.inc.php') ?>
    </footer>
</body>
</html>