  <footer id="contact" class="page-footer blue lighten-0 scrollspy">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Kontakt</h5>
  <div class="row">
    <form class="col s12" action="." method="post">
      <div class="row footer">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="name" type="text" class="validate" name="name" required>
          <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
      </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">message</i>
          <input id="message" type="text" class="validate" name="message" required>
          <label for="email">Nachricht</label>
      </div>
      </div>
	<button type="submit" class="blue waves-effect waves-light btn"><i class="material-icons fa-white left">send</i>Abschicken</button>
<?php include("config.php"); ?>
    </form>

  </div>              </div>
            <div class="col l3 s12">
                    <?php include("donation.php"); ?>
                </ul>
            </div>
              <div class="col l3 s12">
                <h5 class="white-text">Social Networks</h5>
                <ul>
                    <?php include("social-buttons.php"); ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <?php include("copyright.php"); ?>
            <a style="margin-left:30px;" class="modal-trigger grey-text text-lighten-4 right" href="#impressum">Impressum</a>
            <a class="grey-text text-lighten-4 right" target="_blank" href="https://dom1nic.eu">Created by DoM!niC</a>
            </div>
          </div>
        </footer> 