<?php
  include('inc/header.php')
?>
          <div id="ecrire">
             <div class="card-header">
              <h2>Contactez-moi</h2>
            </div>
            <div id="contact">
            <form method="post" action="contact.php">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >Votre adresse mail :</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="jean.dupont@exemple.com" name="mail">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Votre message : </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
              </div>
              <input type="submit" class="btn btn-primary" name="envoyer"><br/>
              <?php
                if(isset($_POST['envoyer'])) 
                {
                  if(empty($_POST['mail'])) 
                  {
                    ?><br/><div class="alert alert-danger" role="alert"> Veuillez remplir le champ de votre adresse e-mail. <?php
                  }
                  else if(empty($_POST['message']))
                  {
                    ?> <br/><div class="alert alert-danger" role="alert"> Veuillez remplir le champ de votre message. <?php
                  }
                  else
                  {
                      $mail = htmlspecialchars($_POST['mail']);
                      $message = htmlspecialchars($_POST['message']);

                      mail('mickael.rossi@live.fr', $mail, $message);
                      ?> <br/><div class="alert alert-success" role="alert"> Votre message a bien été pris en compte, je vous répondrai sous 48h.</div><?php
                  }
                    
                }
             ?>
            </form>
          </div>
        </div>

        
        
        

     
  </body>
</html>
