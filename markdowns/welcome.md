# REMARQUE IMPORTANTE

À partir des laboratoires de cette semaine, il est impératif que vous utilisiez l’espace de stockage mis à votre disposition sur le serveur EVE qui jouera le rôle d’hébergeur et de serveur web pour vos travaux. Les renseignements nécessaires à votre connexion au serveur sont disponibles sur le Centre de Ressources de votre titulaire de laboratoire.
Attention, l’utilisation de cet espace de stockage est obligatoire, même si vous réalisez vos laboratoires sur votre ordinateur personnel. Il suffit, en étant connecté sur le réseau étudiant (et donc pas sur EduRoam), d’y uploader l’ensemble de vos fichiers.
Les laboratoires seront organisés dans votre espace dans un sous répertoire par semaine, chaque exercice d’une semaine étant lui-même placé dans son propre sous-répertoire.

# Exercice 1

Pour cette exercice, il faut créer et initialiser les variables suivantes :
- la variable `a` doit contenir la chaîne de caractère `42`;
- la variable `b` doit contenir l'entier `42`;
- la variable `c` doit contenir la chaîne de caractère `Hello World!`;
- la variable `d` doit être un vecteur avec les indices de `0` à `5` et comme valeurs les carrés de chaque indices. Donc sous l'indice `3` on trouve la valeur `9`.  

@[Remplissons des variables]({"stubs": ["exo1.php"], "command": "/bin/bash run.sh exo1_test.php"})

# Exercice 2

Il faut afficher tous les éléments du tableau associatif `$tab` sous le format `cle:valeur\n`. Le nombre d'éléments du tableau n'est pas connu a priori.

@[Parcours de tableau]({"stubs": ["exo2.php"], "command": "/bin/bash run.sh exo2_test.php"})

# Exercice 3

Il faut affecter la valeur `10` à la variable `$var` si celle-ci est vide.

@[Valeur par défaut]({"stubs": ["exo3.php"], "command": "/bin/bash run.sh exo3_test.php"})

# Exercice 4

Il faut tester la validité d'une date fourni grâce aux variables `$jour`, `$mois` et `$annee`. Si la date est valide la variable `$res` sera `TRUE` sinon `FALSE`.

@[Tester une date]({"stubs": ["exo4.php"], "command": "/bin/bash run.sh exo4_test.php"})

# Exercice 5

Il faut vérifier qu'une clé existe dans le tableau associatif `$tableau`. Si la clé existe la variable `$res` sera `TRUE` sinon `FALSE`.

@[Existance d'une clé]({"stubs": ["exo5.php"], "command": "/bin/bash run.sh exo5_test.php"})

# Exercice 6

Vérification de la validité de donnée