<?php require "header.php" ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="image.css">
  <link rel="stylesheet" href="main.css">
  <title>Projets</title>
</head>
<body>
<?php
afficheHeader("Projets")
?>
<h1>Liste des différents projets réalisés</h1>
<main>
  <section>
    <article>
      <span class="titreDescription">Space Invader</span>
        <span class="languageUtilise">Développé en Scratch - 2017</span>
      <span class="cadreImage"><img class="imageIllustration" src="projets/SpaceInvader/Menu_Space_Invader.png" alt="hehe"></span>

      <a target="_blank" href="https://scratch.mit.edu/projects/636081295/fullscreen/" class="infoBonus">Voir le projet sur le site de Scratch</a>
    </article>
    <article>
      <span class="titreDescription">Super Breaker</span>
        <span class="languageUtilise">Développé en Python - 2021</span>
      <span class="cadreImage"><img class="imageIllustration" src="projets/SuperBreaker/Menu_Super_Breaker.png" alt="hehe"></span>

      <a target="_blank" href="https://github.com/SNEAXIII/Super_Breaker" class="infoBonus">Voir le projet sur GitHub</a>
    </article>
  </section>
</main>
</body>
</html>

