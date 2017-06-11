<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<!-- Nav -->
 <div class="navbar-fixed">
  <nav role="navigation">
    <div class="nav-wrapper blue">
      <a href="index.php" class="brand-logo">&nbsp;&nbsp;<?php include("sitename.php"); ?></a>
      <?php include("navigation.php"); ?>  
    </div>
  </nav>
</div>

<!-- Header Logo-->
  <div class="parallax-container z-depth-3">
    <div class="parallax"><img src="img/header.png"></div>
      <?php include("header_text.php"); ?>    
  </div>

<!-- Welcome Stuff -->
      <?php include("sections/welcome.php"); ?>  

<!-- About Me -->
      <?php include("sections/aboutme/index.php"); ?>    

<!-- Streaming -->
      <?php include("sections/streaming/index.php"); ?>  

<!-- Team -->
      <?php include("sections/team/index.php"); ?>  

<!-- PHP Include Pages -->
<?php
$page = "Index";
if (isset($_GET["page"]))
  $page = $_GET["page"];

if ($page == "media")
  include ("sections/media.php");
else if ($page == "impress")
  include ("impress.html");
?>

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
</body>
</html>