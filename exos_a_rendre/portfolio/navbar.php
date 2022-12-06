<?php
function afficheNavbar(array $listeElementsAAfficher) : void
{
    foreach ($listeElementsAAfficher as $element) {
        echo '<span class="item">$element</span>';
    }
}
?>