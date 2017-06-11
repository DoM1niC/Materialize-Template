<section class="padding" >
        <div id="show" class="container section scrollspy">
            <div class="row">
                <div class="col s12">
                    <div class="left-align">
                        <h2>Bilder</h2>
                    </div>
                </div>
<?php
$images = glob("uploads/img/*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF]}", GLOB_BRACE);
?>
               <?php
define("PER_PAGE_COUNT", 2);
$startIndex = isset($_GET["p"]) ? intval($_GET["p"]) * PER_PAGE_COUNT : 0;
$index = -1;
foreach($images as $img) {
$index++;
if ($index < $startIndex || $index > $startIndex + PER_PAGE_COUNT - 1) continue;
$img = explode("/", $img);
$img = $img[sizeof($img)-1];
?>
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image hoverable">                 
                        </div>
                        <center><img src="/uploads/img/<?= $img ?>" width="100%" class="materialboxed img z-depth-1" alt=""></center>
                    </a>
          </div>
        </div>
<?php } ?>
<ul class="pagination">
<?php for ($i = 0;$i<sizeof($images)/PER_PAGE_COUNT;$i++) { ?>
<li class="<?= $i == $_GET["p"] ? "active" : "waves-effect" ?>"><a href="./?page=media&p=<?= $i ?>#show"><?= ($i+1) ?></a></li>
<?php } ?>
</ul>
            </div>
            </div>
           <div class="container">
            <div class="row">
                <div class="col s12">
                    <h2>Video's</h2>
                </div>
            </div>
<?php
$videos = glob("uploads/videos/*.[mM][pP]4", GLOB_BRACE);
?>
            <div class="row">
               <?php
$startIndex = isset($_GET["v"]) ? intval($_GET["v"]) * PER_PAGE_COUNT : 0;
$index = -1;
foreach($videos as $video) {
$index++;
if ($index < $startIndex || $index > $startIndex + PER_PAGE_COUNT - 1) continue;
$video = explode("/", $video);
$video = $video[sizeof($video)-1];

?>
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image hoverable">    
                        </div>
                        <center><video id="video" class="z-depth-1 video-js vjs-default-skin vjs-16-9 vjs-big-play-centered img" controls preload="none" width="720" height="405"
  poster="" data-setup="{}">
    <source src="/uploads/videos/<?= $video ?>" type='video/mp4'></video></center>
                </div>                </div>               
        </div>
    

<?php } ?>
<ul class="pagination">
<?php for ($i = 0;$i<sizeof($videos)/PER_PAGE_COUNT;$i++) { ?>
<li class="<?= $i == $_GET["v"] ? "active" : "waves-effect" ?>"><a href="./?page=media&v=<?= $i ?>#show"><?= ($i+1) ?></a></li>
<?php } ?>
</ul>
        </div>
        </div>
</section>