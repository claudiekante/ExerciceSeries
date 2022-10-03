<html>
<head>
    <title>come scrivere le variabili</title>
</head>
<body>

la variable une fois défini conserve sa valeur
<?php
$prenom1 = 'Maxime';
$prenom2 = $prenom1;
$prenom1 = 'Vincent';
echo '$prenom1=' . $prenom1 . 'et$prenom2=' . $prenom2 . '<br>';
?>


sauf si on fait une assignation par reference avec la & commerciale
<?php
$nom1 = 'Duchemin';
$nom2 =& $nom1;
$nom2 = 'Lepont';
echo '$nom1=' . $nom1 . 'et$nom2=' . $nom2 . '<br>';
?>


la variabile dinamica rimonta al valore
di una variabile che possiede lo stesso nome di uno
string, utilizzando il doppio $$
<?php
$une_variable = 10;
$nom_variable = 'une_variable';
echo '<code>$une_variable</code>=' . $une_variable . '<br>';
echo '<code>$nom_variable</code>=' . $nom_variable . '<br>';
echo '<code>$$nom_variable</code>=' . $$nom_variable . '<br>';
?>

Quaclhe funzione utile
<?php
$une_variable = 10;
var_dump($une_variable);
echo '<p>Lavariable<code>$une_variable</code>est-elledéfinie?<p>';
var_dump(isset($une_variable));
echo '<p>Lavariable<code>$une_variable</code>est-ellevide?</p>';
var_dump(empty($une_variable));
echo '<p>Suppressiondelavariable<code>$une_variable</code><br>';
unset($une_variable);
echo 'Lavariable<code>$une_variable</code>est-elledéfinie?</p>';
var_dump(isset($une_variable));
?>


</body>
</html>



