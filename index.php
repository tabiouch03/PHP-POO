<?php 
include('./Ingredients.php');
include('./Ustensiles.php');
include('./Appareils.php');
include('./Recettes.php');


$ingredients = [
    $chocolat = new Ingredient('Chocolat', 250, 'GR'),
    $oeuf = new Ingredient('Oeuf', 4 , 'Unité'),
    $sucre = new Ingredient('Sucre', 100, 'GR'),
    $sel = new Ingredient('Sel', 1, 'GR')
];

$ustensiles = [
    $saladier = new Ustensile('Saladier', 'Contient', 'Verre'),
    $fouet = new Ustensile('Fouet', 'Fouette', 'Latex'),
    $casserole = new Ustensile('Casserole', 'Chauffe et contient','Inox')
];

$appareils = [
    $batteur = new Appareil('Batteur', 'Mélange'),
    $four = new Appareil('Four', 'Cuit'),
    $frigo = new Appareil('Frigo', 'Refroidit')
];

$mousseChoco = new Recette($ingredients,$ustensiles, $appareils);

foreach ($mousseChoco->getIngredients() as $ingredient) {
    echo 'Vous aurez besoin de ' . $ingredient->getQuantity() . ' ' . $ingredient->getMesure() . ' de ' . $ingredient->getName() . '<br/>';
}
echo '<br/>';

foreach ($mousseChoco->getUstensiles() as $ustensile) {
    echo 'Vous aurez besoin de ' . $ustensile->getName() . ' pour ' . $ustensile->getUtility() . ' qui aura comme matériaux du ' . $ustensile->getMateriaux() . '<br/>';
}
echo '<br/>';

foreach ($mousseChoco->getAppareils() as $appareil) {
    echo 'Nous allons utilisé un ' . $appareil->getName() . ' qui va ' . $appareil->getUtility() . '<br/>'; 
}