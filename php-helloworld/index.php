<?php
print "Sitio web de prueba. Versión de PHP: " . PHP_VERSION . "\n";
?>
<h1> Version 3.0 - codo a codo. La solicitud está siendo procesada por el pod:   
 
<?php
$ip = getenv('HOSTNAME');

echo $ip;
?> 
</h1>
