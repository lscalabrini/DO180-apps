<?php
print "Sitio web de prueba. Versión de PHP: " . PHP_VERSION . "\n";
?>
<h1> Version 3.0 Modificado para Telecom.  La solicitud está siendo procesada por el pod:   
 
<?php
$ip = getenv('HOSTNAME');

echo $ip;
?> 
</h1>
