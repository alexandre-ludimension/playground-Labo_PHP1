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

Il faut écrire la fonction `check_form`. Celle-ci prend un tableau associatif en paramètre. Ce dernier contient les clés suivantes : 
- `nom` 
- `prenom`
- `CP`
- `naissance`
- `banque`

La fonction `check_form` doit vérifier que les données sont valides. Pour être valide les données doivent respecter les contraintes suivantes : 
- Le `nom` doit exclusivement être composé des caractères de `a` à `z`, de `-` et ` ` (d'espace).
- Le `prenom` doit exclusivement être composé des caractères de `a` à `z`, de `-` et ` ` (d'espace).
- `CP` est une valeur numérique comprise entre 1000 et 9999.
- `naissance` doit être une date valide au format `jour/mois/année`.
- `banque` doit être un numéro de compte belge au format européen (eg. BE15 1234 5678 9012)

Pour vous aider dans la vérification des données vous pouvez utiliser les expressions régulière (voir fonction `preg_match`).
Voici des expressions régulières pouvant vous aider : 
- `#^[A-Za-z -]*$#` vérifie qu'une chaîne est composée des caractères de `a` à `z`, de `-` et ` ` (d'espace).
- `#^[0-9]{1,2}/[0-9]{1,2}/[0-9]{1,4}$#` vérifie qu'une chaine est du format `xx/xx/xxxx` ou `x` est un nombre.
- `#^BE[0-9]{2}( ?[0-9]{4}){3}$#` vérifie qu'une correspond à un numéro de compte belge au format européen.

La fonction retournera un tableau associatif contenant les informations suivantes :
- `valide` valeur booléenne `TRUE` ou `FALSE` selon que toutes les données sont valides ou non
- `nom`
	- `valide` valeur booléenne `TRUE` ou `FALSE` selon que les données dans `nom` sont valides ou non.
	- `message` un message d'erreur relatif à `nom` si `valide` est `FALSE`.
- `prenom`
	- `valide` valeur booléenne `TRUE` ou `FALSE` selon que les données dans `prenom` sont valides ou non.
	- `message` un message d'erreur relatif à `prenom` si `valide` est `FALSE`.
- `CP`
	- `valide` valeur booléenne `TRUE` ou `FALSE` selon que les données dans `CP` sont valides ou non.
	- `message` un message d'erreur relatif à `CP` si `valide` est `FALSE
- `naissance`
	- `valide` valeur booléenne `TRUE` ou `FALSE` selon que les données dans `naissance` sont valides ou non.
	- `message` un message d'erreur relatif à `naissance` si `valide` est `FALSE`.
- `banque`
	- `valide` valeur booléenne `TRUE` ou `FALSE` selon que les données dans `banque` sont valides ou non.
	- `message` un message d'erreur relatif à `banque` si `valide` est `FALSE`.
	
	
# Exercice 7

Définir des variables pour deux couples d’entiers (`$x1`, `$x2`, `$y1` et `$y2`) représentant les coordonnées de deux points, sous la forme x1,y1 et x2,y2 et leur donner une valeur.
Calculer ensuite la distance séparant ces deux points qui sera conservée dans `$dist`.

Formule : $`\sqrt{(x_2-x_1)^2 + (y_2-y_1)^2}`$

# Exercice 8

Remplir un tableau de 10 cases sur 10 nommé `$tableau` de valeurs comprises entre -20 et 20 générées aléatoirement.
Compter les valeurs 
- négatives (la valeur est dans la variable `$nb_neg`),
- positives (la valeur est dans la variable `$nb_pos`) et 
- nulles (la valeur est dans la variable `$nb_zero`).

# Exercice 9

Générer un tableau nommé `$premier` contenant la liste des mille premier nombres premiers. Calculer ensuite la somme de ces nombres.

