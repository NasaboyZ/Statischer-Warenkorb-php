<?php
// diese Function lässt den user nicht html ellemente auf meiner Webseite schreiben

function e($html){
    return htmlspecialchars($html,ENT_QUOTES,'UFT-8',true);
}

// also diese e ist sehr wichtig
// wenn der user ein spacialcharakter benützt denn wandle um in enit aus der UFT 8 büchereich und sag die ausge ist wahr und bleib wahr
