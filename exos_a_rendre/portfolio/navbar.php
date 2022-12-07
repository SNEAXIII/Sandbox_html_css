<?php
function afficheNavbar(array $listeElementsAAfficher) : void
{
    foreach ($listeElementsAAfficher as $element) {
        echo '<span class="item">$element</span>';
    }
}
?>
[['"main.html"',"Accueil"],[,"Projets"],[,],[,],[,],[,],]
<a href="projets.html" class="item">Projets</a>
<a href="curriculumVitae.html" class="item">C.V.</a>
<a href="certifications.html" class="item">certifications</a>
<a href="veilleTechnologique.html" class="item">Veille Techno</a>
<a href="contact.html" class="item">Contact</a>
