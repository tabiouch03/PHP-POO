<?php 
include('./Class/Ingredients.php');
include('./Class/Ustensiles.php');
include('./Class/Appareils.php');
include('./Class/Recettes.php');
include('./Class/TempsPreparation.php');


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

$tempsPreparations = [
    $duree = new tempsPreparation(40, 25)
];

$mousseChoco = new Recette($ingredients,$ustensiles, $appareils, $tempsPreparations);

foreach ($mousseChoco->getIngredients() as $ingredient) {
    echo "Vous aurez besoin de " . $ingredient->getQuantity() . ' ' . $ingredient->getMesure() . ' de ' . $ingredient->getName() . '<br/>';
}
echo '<br/>';

foreach ($mousseChoco->getUstensiles() as $ustensile) {
    echo 'Vous aurez besoin de ' . $ustensile->getName() . ' pour ' . $ustensile->getUtility() . ' qui aura comme matériaux du ' . $ustensile->getMateriaux() . '<br/>';
}
echo '<br/>';

foreach ($mousseChoco->getAppareils() as $appareil) {
    echo 'Nous allons utilisé un ' . $appareil->getName() . ' qui va ' . $appareil->getUtility() . '<br/>'; 
}
echo '<br/>';

foreach ($mousseChoco->getTempspreparation() as $tempsPreparations) {
    echo 'Durée de preparation : ' . $tempsPreparations->getTempscuisson() . ' minutes' . '<br/>' .
    'Durée de conservation : ' . $tempsPreparations->getTempsconservation() . ' minutes' . '<br/>' .
    'Durée Total : ' . $tempsPreparations->getTempstotal() . ' minutes';

}