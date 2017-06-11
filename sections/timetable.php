<section class="padding" >
        <div id="show" class="container section scrollspy">
            <div class="row">
                <div class="col s12">
                    <div class="left-align">
                        <h2>Zeitplan</h2>
                    </div>
                </div>
<?php 
$kw=strftime("%W"); 
$dat = json_decode(file_get_contents("sections/timetable.json"));
?>
        <div class="col s12 m8">
       <div class="card">
            <div class="card-image">
      <table class="centered" >
        <tbody>
          <tr>
<?php
foreach($dat as $day => $val) { ?>
<td><?= $day ?></td>
<?php
}
?>
          </tr>
          <tr>
<?php
foreach($dat as $day => $val) { ?>
<td><?= $val ?></td>
<?php
}
?>          </tr>
        </tbody>
      </table>
            
</div>     
            <div class="card-content">
           <span class="card-title"><i class="material-icons">query_builder</i>Diese Woche KW: <?php print $kw;?></span>
              <p>Events oder Streamingzeiten auf einen Blick</p>
		</div>           
 			</div>
     </div>            

          </div>
        </div>
            </div>
            </div>
        </div>
        </div>
</section>