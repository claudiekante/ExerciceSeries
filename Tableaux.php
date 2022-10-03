<html>
<head>
    <title>il bordello degli array</title>
</head>
<body>
<p>
    LE TABLEAU NUMERIQUE
</p>
<?php
$n[] = 'zéro';
$n[] = 'un';
$n[] = 'deux';
$n[] = 'trois';
var_dump($n);

?>

<p>
    TABLEAU NUMERIQUE AVEC INDICES NON ORDONNES
</p>

<?php
$m[20] = 'vingt';
$m[30] = 'trente';
$m[10] = 'dix';
var_dump($m)

?>

<p>
    TABLEAU ASSOCIATIF
</p>

<?php
$a['dix-sept'] = 17;
$a['quarante-deux'] = '0x2A';
$a['troisvirgulecinq'] = 3.5;
var_dump($a);

?>

<p>
    TABLEAU MIXTE
</p>

<?php

$nb[] = 'zero';
$nb[] = 'un';
$nb[5] = 'cinq';
$nb[] = 'six';
$nb['un'] = 1;
$nb[] = 'sept';
$nb[-1] = 'moinsun';
var_dump($nb);
?>


<p>
    TABLEAU MULTIDIMENSIONNEL
</p>
<?php
echo '<br>' . 'array villes france ' . '<br>';
$villes_france[] = 'Paris';
$villes_france[] = 'Lyon';
$villes_france[] = 'Nantes';
var_dump($villes_france);
echo '<br>' . "array villes d'Italie " . '<br>';
$villes_italie[] = 'Rome';
$villes_italie[] = 'Venise';
var_dump($villes_italie);
echo '<br>' . 'array contenant : villes france ET ville d\' Italie' . '<br>';
$villes['FRANCE'] = $villes_france;
$villes['ITALIE'] = $villes_italie;
var_dump($villes);

?>


<p>
    altre sintassi disponibili
</p>
<?php
$nombres = array('zéro', 'un', 5 => 'cinq', 'six', 'un' => 1, 'sept', -1 => 'moinsun');
echo "\$nombres = array('zéro', 'un', 5 => 'cinq', 'six', 'un' => 1, 'sept', -1 => 'moinsun')". '<br>';
var_dump($nombres);
?>

<p>
    altre sintassi disponibili 02
</p>
<?php
$nombres02=['zéro','un', 5=>'cinq','six','un'=>1,'sept',-1=>'moinsun'];
echo "\$nombres02=['zéro','un', 5=>'cinq','six','un'=>1,'sept',-1=>'moinsun'];". '<br>';
var_dump($nombres02);
?>


<p>
    fonctions utiles
</p>
<?php
$liste='bleu,vert,orange,rouge,blanc';
var_dump($liste);
echo '<br>'.'la variable $liste è una lista = '.$liste. '<br>';

$couleur=explode(',',$liste);
var_dump($couleur);
echo '<br>'.'che facciamo diventare una tabella con explode '. '<br>';
echo '<br>'. '<br>';
echo '<br>'.'e facciamo il contrario con implode '. '<br>';
var_dump(implode('|',$couleur));


?>

</body>
</html>