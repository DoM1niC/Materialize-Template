<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta name="theme-color" content="#fff">
    <meta name="author" content="Dominic Schubert">

    <title><?php include("sitename.php"); ?></title>


<!-- Stylesheets -->
<?php include("css/index.php"); ?>

<!-- Scripts -->
<?php include("js/index.php"); ?>

</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<!-- Header Logo-->
      <div class="header-full">
<img width="100%" height="100%" src="img/header.png"</img> 
  <div class="header-overlay"></div>
  </div>

<!-- Nav -->
  <nav>
    <div class="nav-wrapper blue">
      <a href="index.php" class="brand-logo logo-padding"><?php include("sitename.php"); ?></a>
      <?php include("navigation.php"); ?>  
    </div>
  </nav>

<!-- Welcome Stuff -->
      <?php include("sections/welcome.php"); ?>  

<!-- About Me -->
      <?php include("sections/aboutme/index.php"); ?>    

<!-- Streaming -->
      <?php include("sections/streaming/index.php"); ?>  

<!-- Team -->
      <?php include("sections/team/index.php"); ?>  
   
<!-- PHP Include Pages -->
      <?php include("pages.php"); ?>    

<!-- Button -->
  <div class="fixed-action-btn">
  <a id="menu" href="#top" class="blue waves-effect waves-light btn-large btn-floating"><i class="material-icons">navigation</i></a>
  </div>
</div>

<!-- Parallax Footer -->
      <?php include("sections/footer/parallax.php"); ?>    

<!-- Footer -->
      <?php include("sections/footer/index.php"); ?>    

<!-- Modal Impressum -->
<?php include("modals/impressum.php"); ?>
<!-- Modal Voiceserver -->
<?php include("modals/voiceserver.php"); ?>
<!-- Modal Gameserver -->
<?php include("modals/gameserver.php"); ?>
<script>
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 100
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
		});
	});
</script>
</body>
</html>