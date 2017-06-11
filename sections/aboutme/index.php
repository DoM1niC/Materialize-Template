<section id="about" class="grey lighten-2 padding">
      <div class="container scrollspy">
    <div class="row">
                    <div class="left-align">
                        <h2>Über Mich</h2>
                    </div>
     <div  class="col s12 m5">
       <div class="card">
            <div class="card-image">
		  <img src="img/avatar.png"</img>  
		</div>     
            <div class="card-content">
           <span class="card-title"><i class="material-icons">credit_card</i>Nickname</span>
              <p>Content bla bla bla blubb</p>
              <p>Content bla bla bla blubb</p>
              <p>Content bla bla bla blubb</p>
		</div>           
 			</div>
     </div>            

            <div class="col s12 m7">       
  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header active"><i class="material-icons">place</i>Wohnort</div>
      <div class="collapsible-body">
      <?php include("maps.php"); ?>  
</div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">settings</i>Computer</div>
      <div class="collapsible-body">
      <?php include("computer.php"); ?>  
</div>
    </li>
   <li>
      <div class="collapsible-header"><i class="fa fa-steam"></i>Steam</div>
      <div class="collapsible-body">
      <?php include("steam.php"); ?>  
</div>
    </li>
   <li>
      <div class="collapsible-header"><i class="fa fa-soundcloud"></i>Soundcloud</div>
      <div class="collapsible-body">
      <?php include("soundcloud.php"); ?>  
</div>
    </li>
   <li>
      <div class="collapsible-header"><i class="fa fa-facebook"></i>Facebook</div>
      <div class="collapsible-body">
                <div id="post-container">
                    <div class="text-center">
                        <i class="fa fa-refresh fa-spin fa-3x"></i>
                    </div>
                </div>
</div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">contact_phone</i>Kontakt</div>
      <div class="collapsible-body">
      <?php include("contact.php"); ?>  
</div>
    </li>
  </ul>
                    </div>        
          </div>
    </div> 
</section>