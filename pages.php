<?php
$page = "Index";
if (isset($_GET["page"]))
  $page = $_GET["page"];

if ($page == "media")
  include ("sections/media.php");
else if ($page == "timetable")
  include ("sections/timetable.php");
?>