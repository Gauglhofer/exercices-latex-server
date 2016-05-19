  <?php
    session_start();
    $userid=$_SESSION["userid"];
  ?>
<!DOCTYPE html >
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Travaux écrits - serveur du Gymnase de Nyon</title>
    <link rel="stylesheet" type="text/css" media="screen" href="mon_style.css">
  </head>
  <body>
    <div class="main_page">
      <div class="page_header floating_element">
        <img src="logo_gymnase.png" alt="Logo du Gymnase de Nyon" class="floating_element" height="60px" />
        <span class="floating_element_right">
            Gymnase de Nyon<br>Travaux écrits de mathématiques
        </span>
      </div>
      <div class="content_section floating_element">
      <?php
          $option = $_GET["option"];
          if ($_SESSION["identification"] == true) {
              switch($option) {
                  case(1):
                     $accueil = file_get_contents('accueil1.html');
                     break;
                  case(2):
                     $accueil = file_get_contents('accueil2.html');
                     break;
                  case(3):
                     $accueil = file_get_contents('accueil3.html');
                     break;
                  case(4):
                     $accueil = file_get_contents('accueil4.html');
                     break;
                  }
              }
          else {
                $accueil = '';
                include 'echec_identification.php';
              }
          echo $accueil;
      ?>
      </div>
    </div>
  </body>
</html>


