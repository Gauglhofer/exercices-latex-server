<div class="section_header">
    <div id="echec_identification"></div>
    Identification échouée !
</div>
<div class="content_section_text">
    <p>
        Désolé <?php echo $userid;?>, le serveur n'est actuellement pas disponible pour vous.
    </p>
</div>
<?php
    session_unset ();
    session_destroy ();
?>
