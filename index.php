<?php 
include('./Class/Ingredients.php');
include('./Class/Ustensiles.php');
include('./Class/Appareils.php');
include('./Class/Recettes.php');
include('./Class/TempsPreparation.php');
include('./Class/Difficultes.php');
include('./Class/Creations.php');
include('./Class/TitreRecettes.php');



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
    $create = new creation('18/02/2020' , 'Fabio')
];

$title = [
    $titre = new TitreRecette('Mousse Au Chocolat')
];

$mousseChoco = new Recette($title, $creation, $ingredients,$ustensiles, $appareils, $tempsPreparations, $difficulte);

foreach ($mousseChoco->getTitle() as $title) {
    echo "<h1 style='font-family: Comic Sans MS;text-align:center;margin-top:180px;'>" . '&#127874 ' . $title->getTitle() . ' &#127874' . "</h1>";
}

foreach ($mousseChoco->getCreation() as $creation) {
    echo "<p style='color:blue;font-size:20px;text-align:center;'>" . 'Recette crée le' . $creation->getDate() . ' par ' . $creation->getNom() .'.' . '<br/>' . "</p>";
}

foreach ($mousseChoco->getIngredients() as $ingredient) {
    echo "<p style='text-align:center;'>" .'Vous aurez besoin de ' . $ingredient->getQuantity() . ' ' . $ingredient->getMesure() . ' de ' . $ingredient->getName() . '<br/>'. "</p>";
}


foreach ($mousseChoco->getUstensiles() as $ustensile) {
    echo "<p style='text-align:center;'>" .'Vous aurez besoin de ' . $ustensile->getName() . ' pour ' . $ustensile->getUtility() . ' qui aura comme matériaux du ' . $ustensile->getMateriaux() . '<br/>'. "</p>";
}

foreach ($mousseChoco->getAppareils() as $appareil) {
    echo "<p style='text-align:center;'>" .'Nous allons utilisé un ' . $appareil->getName() . ' qui va ' . $appareil->getUtility() . '<br/>'. "</p>"; 
}

foreach ($mousseChoco->getTempspreparation() as $tempsPreparations) {
    echo "<p style='text-align:center;'>" .'Durée de preparation : ' . $tempsPreparations->getTempscuisson() . ' minutes' . '<br/>' .
    'Durée de conservation : ' . $tempsPreparations->getTempsconservation() . ' minutes' . '<br/>' .
    'Durée Total : ' . $tempsPreparations->getTempstotal() . ' minutes' . '<br/>'. "</p>";
}

foreach ($mousseChoco->getDifficulte() as $difficulte) {
    echo "<p style='text-align:center;'>" .'<span style=color:red;>Niveau Requis : </span>' . $difficulte->getDifficulte() . '&#11088 &#11088 &#11088 &#11088;'. "</p>";
}