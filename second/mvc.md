## MVC - Model View Controller

Le Modèle-Vue-Contrôleur ( EN: Model-View-Contrôler ) est un modèle de conception (design pattern)
couramment utilisé dans le dévelopement web pour aider à organiser le code séparer différentes 
composantes d'une application. Il favorise l'idée de diviser une application en trois composants
principaux : le Modèle , la Vue et le Controlleur .
Chaque composant a un rôle et des responsabilités spécifiques , ce qui rend la base de code plus
organisées , plus facile à entretenir et plus évolutive.

Voici donc une explication de chaque composant: 
 1. Modèle: 

 Le Modèle représente les données et la logique de votre application . 
 Il est responsable de la gestion des données telles que : la récupération des données depuis une BDD, 
 l'exécution de calculs et l'application des règles métiers  

 2. Vue: 

 La Vue est responsable de l'affiche des données à l'utilisateur. C'est ce que l'utilisateur voit 
 et avec quoi il interagit. La Vue prend les données du Modèle et les présente sous une forme
 conviviale pour l'utilisateur , généralement sous forme de HTML , CSS et parfois de JavaScript.
 Les Vues sont principalement concernés par la présentation et ne contiennent généralement pas
 de logique complexe.

 3. Contrôleur:

 Le Contrôleur agit comme un intermediaire entre le Modèle et la Vue 
 Il reçoit les entrées de l'utilisateur depuis le Vue , les traite, interagit avec 
 le Modèle pour récuperer ou mettre à jour les données, puis décide quelle Vue présenter à 
 l'utilisateur . Le contrôleur contient la logique de l'application qui coordonne le flux de données entre le 
 Modèle et le Vue.
