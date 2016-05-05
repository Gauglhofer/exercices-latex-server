<!DOCTYPE html >
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Travaux écrits - serveur du Gymnase de Nyon</title>
    <link rel="stylesheet" type="text/css" media="screen" href="mon_style.css">
  </head>
  <?php
    session_start();
    $userid=$_POST["userid"];?>
  <body>
    <div class="main_page">
      <div class="page_header floating_element">
        <img src="logo_gymnase.png" alt="Logo du Gymnase de Nyon" class="floating_element" height="60px" />
        <span class="floating_element">
            Gymnase de Nyon<br>Travaux écrits de mathématiques
        </span>
      </div>
      <div class="content_section floating_element">
      <?php
          if $_SESSION["identification"] {
              echo '<div class="section_header">
                      <div id="soumission_fichiers_entiers"></div>
                         Verser un TE en entier (pdf)
                    </div>
                    <div class="content_section_text">
                       <p>
                          bla bla bla...
                       </p>
                    </div>';
              }
          else {include 'echec_identification.php';}
      ?>
      </div>
    </div>
  </body>
</html>


