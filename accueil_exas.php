  <?php
    if ($_SESSION["identification"] == true) {
        echo '<div class="section_header">';
        echo '  <div id="rechercher_probleme"></div>Rechercher un problème';
        echo '</div>';
        echo '<div class="content_section_text">';
        echo '  <p>Rechercher dans la base de données.</p>';
        echo '</div>';

        
        echo '<div class="section_header">';
        echo '  <div id="classifier_probleme"></div>Aider à classifier un problème';
        echo '</div>';
        echo '<div class="content_section_text">';
        echo '  <p>Affichera le prochain problème et les critères de classification.</p>';
        echo '</div>';
    }
  ?>
  
