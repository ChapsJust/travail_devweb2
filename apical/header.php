<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apical</title>
  <?= wp_head(); ?>
</head>
<body>
  <div class="aucunepubauto">
    <div class="logo fix-menu" id="zoneentete">
      <div class="container">
        <div class="avant"></div>
        <div class="apres">
          <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47" data-horizontaloffset="0">
            <a href="index.php"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil" /></a>
            <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche" data-target="#popuprecherche"><img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher" /></a>
            <a href="#" id="boutonauthentification" class="ouvrirpopupchristiane ouvrirpopupauthentification" data-target="#popupauthentification"><img src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Authentification" title="" /></a>
          </div>
        </div>
        <div class="centre">
          <a href="index.php"><img src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" alt="Apical, ma plateforme d'apprentissage" /></a>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-3" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Apical</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Basculer">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
          <?php
          $pages = get_pages();
          foreach ($pages as $page) {
            $class = ($page->ID == get_the_ID()) ? 'active' : '';
            $link = get_permalink($page->ID);
            $title = $page->post_title;
            echo '<li class="nav-item px-lg-4">';
            echo '<a href="' . $link . '" class="nav-link text-uppercase text-expanded ' . $class . '">' . $title . ' <span class="sr-only">(actuel)</span></a>';
            echo '</li>';
            }
            ?>
            
          </ul>
          <div class="iconespourmobile">
            <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47" data-horizontaloffset="0">
              <a href="https://apical.xyz"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil" /></a>
              <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche" data-target="#popuprecherche"><img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher" /></a>
              <a href="#" class="ouvrirpopupchristiane ouvrirpopupauthentification" data-target="#popupauthentification"><img src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Authentification" title="" /></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
