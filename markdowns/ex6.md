# Exercice 6

Il faut écrire la fonction `check_form`. Celle-ci prend un tableau associatif en paramètre. Ce dernier contient les clés suivantes : 
- `nom` 
- `prenom`
- `CP`
- `naissance`
- `banque`

La fonction `check_form` doit vérifier que les données sont valides. Pour être valides les données doivent respecter les contraintes suivantes : 
- Le `nom` doit exclusivement être composé des caractères de `a` à `z`, de `-` et ` ` (d'espace).
- Le `prenom` doit exclusivement être composé des caractères de `a` à `z`, de `-` et ` ` (d'espace).
- `CP` est une valeur numérique comprise entre 1000 et 9999.
- `naissance` doit être une date valide au format `jour/mois/année`.
- `banque` doit être un numéro de compte belge au format européen (eg. BE15 1234 5678 9012)

Pour vous aider dans la vérification des données vous pouvez utiliser les expressions régulières (voir fonction `preg_match`).
Voici des expressions régulières pouvant vous aider : 
- `#^[A-Za-z -]*$#` vérifie qu'une chaîne est composée des caractères de `a` à `z`, de `-` et ` ` (d'espace).
- `#^[0-9]{1,2}/[0-9]{1,2}/[0-9]{1,4}$#` vérifie qu'une chaine est au format `xx/xx/xxxx` où `x` est un nombre.
- `#^BE[0-9]{2}( ?[0-9]{4}){3}$#` vérifie qu'une chaîne correspond à un numéro de compte belge au format européen.

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

@[Vérification de données]({"stubs": ["exo6.php"], "command": "/bin/bash run.sh exo6_test.php"})
