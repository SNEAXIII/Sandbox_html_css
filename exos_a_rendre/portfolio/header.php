<?php
const LISTEAAFFICHER= [
    ['"index.php"','Accueil'],
    ['"projets.php"','Projets'],
    ['"curriculumVitae.php"','C.V.'],
    ['"certifications.php"','certifications'],
    ['"veilleTechnologique.php"','Veille Techno'],
    ['"contact.php"','Contact'],
];
function afficheHeader($elementAMettreEnValeur) : void
{
    echo '
    <header class="flexbox">
        <img id="pp" src="pp_ggle.jpg" alt="hehe">
        <nav class="flexbox">
        ';
            foreach (LISTEAAFFICHER as $element) {
                if ($elementAMettreEnValeur==$element[1]) {
                    $classe = '"itemActuel item"';
                } else {
                    $classe = '"itemNonActuel item"';
                }
                echo "<a href=$element[0] class=$classe>$element[1]</a>";
            }
        echo '
        </nav>
    </header>
    ';
}
//afficheHeader("Accueil")
?>



