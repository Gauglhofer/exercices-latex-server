  <?php
     session_start();
     $_SESSION["identification"] = false;
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
          if ($_POST["userid"] == null) {$login_form = file_get_contents('login.html');}
          else {$login_form = '';}
          echo $login_form;
          $_SESSION["userid"] = $userid = strtolower($_POST["userid"]);
          $userpwd=$_POST["userpwd"];
	      $_SESSION["link"] = mysqli_connect("localhost", $userid, $userpwd);
	      if ($_SESSION["link"]) {
              $accueil = file_get_contents('accueil.html');
              $_SESSION["identification"] = true;
          }
          else {
                $accueil = '';
                if ($userid != null)  {include 'echec_identification.php';}
          }
          echo $accueil;
      ?>
      </div>
    </div>
  </body>
</html>

