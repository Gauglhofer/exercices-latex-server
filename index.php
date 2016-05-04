
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
        <span class="floating_element">
            Gymnase de Nyon<br>Travaux écrits de mathématiques
        </span>
      </div>
      <div class="content_section floating_element">


        <div class="section_header">
          <div id="soumission"></div>
          Télécharger depuis le serveur
        </div>
        <div class="content_section_text">
          <p>
              Ici, il y aura l'explication comment soumettre...<br>
              <?php
                echo "ça marche";
              ?>
          </p>

        </div>
        <div class="section_header">
          <div id="soumission_fichiers_entiers"></div>
                Verser un TE en entier (latex ou pdf)
        </div>
        <div class="content_section_text">
          <p class="center">
              <a href="soumission_latex_fichier.html">Fichier(s) latex à verser sur le serveur</a>&emsp;&emsp;&emsp;
              <a href="soumission_pdf.html">Fichier pdf à verser sur le serveur</a>
          </p>
        </div>

        <div class="section_header">
            <div id="soumission_exo_latex"></div>
                Verser un exercice (latex)
        </div>
        <div class="content_section_text">
            <p>
                Si le fichier latex était le suivant, il devrait pouvoir se compiler par pdflatex :
            </p>
            <pre>\documentclass[12pt,frenchb]{article}
\usepackage{amsmath,amssymb,babel,multicol,enumerate,graphicx,tabularx,textcomp}
\usepackage{pgf,tikz}
\usetikzlibrary{shapes,positioning,arrows,patterns}
\usepackage[T1]{fontenc}
\usepackage[utf8]{inputenc}

\newcommand{\ds}{\displaystyle}
\newcommand{\C}{{\mathbb C}}
\newcommand{\R}{{\mathbb R}}
\newcommand{\Q}{{\mathbb Q}}
\newcommand{\Z}{{\mathbb Z}}
\newcommand{\N}{{\mathbb N}}

\begin{document}
    \begin{enumerate}
	\item
        {   </pre>
            <p class="center">
                <a href="soumission_latex_exo.html">Texte latex à verser sur le serveur</a>
            </p>
            <pre>
        }
    \end{enumerate}
\end{document}</pre>
            <p>
                Remarque :<br>
                Vous pouvez définir des commandes personnelles par "\newcommand" au début de votre texte.<br>
                Comme celui-ci se trouve entre "{" et "}", ces commandes restent restreintes à votre exercice.
            </p>
        </div>
      </div>
    </div>
  </body>
</html>

