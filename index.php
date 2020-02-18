<?php 
include('./Class/Ingredients.php');
include('./Class/Ustensiles.php');
include('./Class/Appareils.php');
include('./Class/Recettes.php');
include('./Class/TempsPreparation.php');
include('./Class/Difficultes.php');
include('./Class/Creations.php');



$ingredients = [
    $chocolat = new Ingredient('Chocolat', 250, 'GR'),
    $oeuf = new Ingredient('Oeuf', 4 , 'Unité'),
    $sucre = new Ingredient('Sucre', 100, 'GR'),
    $sel = new Ingredient('Sel', 1, 'GR')
];

$ustensiles = [
    $saladier = new Ustensile('Saladier', 'Contenir', 'Verre'),
    $fouet = new Ustensile('Fouet', 'Fouetter', 'Latex'),
    $casserole = new Ustensile('Casserole', 'Chauffer et contenir','Inox')
];

$appareils = [
    $batteur = new Appareil('Batteur', 'Mélanger'),
    $four = new Appareil('Four', 'Cuire'),
    $frigo = new Appareil('Frigo', 'Refroidir')
];

$tempsPreparations = [
    $duree = new tempsPreparation(40, 25)
];

$difficulte = [
    $niveau = new difficulte('Intermédiaire')
];

$creation = [
    $create = new creation('18/02/2020' , 'Manon')
];

$mousseChoco = new Recette($creation, $ingredients,$ustensiles, $appareils, $tempsPreparations, $difficulte);


foreach ($mousseChoco->getCreation() as $creation) {
    echo '<style=font-size: 30px;>'.'Recette crée le' . $creation->getDate() . ' par ' . $creation->getNom() .'.' . '<br/>';
}
echo '<br/>';

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
    'Durée Total : ' . $tempsPreparations->getTempstotal() . ' minutes' . '<br/>';
}
echo '<br/>';

foreach ($mousseChoco->getDifficulte() as $difficulte) {
    echo '<span style=color:red;>Niveau Requis : </span>' . $difficulte->getDifficulte();
}