<html>
<head>
    <title> le costanti</title>
</head>

<body>

definizione delle costanti
<?php
define('CONSTANTE', 'phpenversion' . phpversion());
const UNE_AUTRE_CONSTANTE = 'PHP7';
echo '<p><code>CONSTANTE</code>=' . CONSTANTE . '<br></p>';
echo '<code>UNE_AUTRE_CONSTANTE</code>=' . UNE_AUTRE_CONSTANTE . '<br>';
var_dump(defined('UNE_AUTRE_CONSTANTE'));


?>

</body>

</html>
<?php
