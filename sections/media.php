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
foreach($images as $img) {
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
foreach($videos as $video) {
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
        </div>
        </div>
</section>