# PHP POO (Programmation Orientée Objet)

## QU’EST-CE QU’UNE CLASSE ? 
 
#### Les classes sont présentes pour « fabriquer » des objets. En programmation orientée objet, un objet est créé sur le modèle de la classe à laquelle il appartient. 
#### Exemple : Etant donné qu’une classe est le modèle de quelque chose que nous voudrions construire.   
#### Le plan de construction d'une maison qui réunit les instructions destinées à la construction est donc une classe.  Cependant le plan n'est pas une maison. 
#### La maison est un objet qui a été « fabriqué » à partir de la classe (le plan).   
#### A partir du plan (la classe) nous pouvons construire une ou plusieurs maisons (l’objet). 
#### Le vocabulaire diffère légèrement en Programmation Orientée Objet, nous ne parlerons plus de fonctions mais de méthodes, nous ne parlerons plus de variables mais d’attributs (ou propriétés).  
#### Une classe est une entité regroupant un certain nombre d’attributs et de méthodes que tout objet issu de cette classe possèdera. 


## QU’EST-CE QU’UN OBJET?

#### Un objet est un conteneur symbolique, qui possède sa propre existence et englobe des 
#### caractéristiques,  états  et  comportements  et  qui,  par  métaphore,  représente  quelque 
#### chose de tangible du monde réel manipulé par informatique.
#### En programmation orientée objet, un objet est créé à partir d'un modèle appelé classe, 
#### duquel  il  hérite  les  comportements  et  les  caractéristiques.  Les  comportements  et  les 
#### caractéristiques  sont  typiquement  basés  sur  celles  propres  aux  choses  qui  ont  inspiré 
#### l'objet : une personne, un dossier, un produit, une lampe, une chaise, un bureau. Tout 
#### peut être objet.

## LA DIFFERENCE ENTRE UNE CLASSE ET UN OBJET 

#### La classe est un plan, une description de l'objet.  Sur le plan de construction d’une voiture nous y retrouverons le moteur ou encore la couleur de la carrosserie. 
#### L'objet est une application concrète du plan. L'objet est la voiture. Nous pouvons créer plusieurs voitures basées sur un plan de construction. 
#### Nous pouvons donc créer plusieurs objets à partir d'une classe.

## INSTANCIATION 
 
#### Le mot-clé ‘‘new’’ peut être traduit comme « fabrique-moi un nouvel objet émanant de cette classe ». Quand vous « instanciez » une classe, la variable stockant l'objet ne stocke en fait pas l'objet lui-même, mais un identifiant qui représente cet objet. C'est-à-dire en faisant :  
#### $voiture = new Voiture();  
#### $voiture ne contient pas l'objet lui-même, mais son identifiant unique.  
#### Notez que si le constructeur de la classe ne comporte pas des arguments, il n'est pas nécessaire d'utiliser des parenthèses. Cependant, il peut être préférable de toujours les mettre afin de n’avoir jamais d’erreurs. 