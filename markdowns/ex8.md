# Exercice 8

Il faut écrire une fonction `init_table` permettant de générer un tableau de `$n` fois `$m` éléments rempli de valeurs aléatoires comprises entre `$min` et `$max`.

Il faut également écrire une fonction `search_val` permettant de compter les valeurs 
- négatives (la valeur est dans la variable `$nb_neg`),
- positives (la valeur est dans la variable `$nb_pos`) et 
- nulles (la valeur est dans la variable `$nb_zero`).

Les 3 valeurs seront renvoyées dans un tableau associatif. La clé pour chacune des valeurs sera : 
- négatives `nb_neg`,
- positives `nb_pos` et 
- nulles `nb_zero`.

@[Recherche dans un tableau]({"stubs": ["exo8.php"], "command": "/bin/bash run.sh exo8_test.php"})
