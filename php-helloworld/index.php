<?php
print "Sitio web de prueba VERSION 3.0 . Versión de PHP: " . PHP_VERSION . "\n";
?>
<h1>  La solicitud está siendo procesada por el pod:   
 
<?php
$ip = getenv('HOSTNAME');

echo $ip;
?> 
</h1>
