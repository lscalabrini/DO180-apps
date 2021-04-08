<?php
print "Sitio web de prueba. Versión de PHP: " . PHP_VERSION . "\n";
?>
<h1>  La solicitud está siendo procesada por el pod:   
 
 MODIFICACION VERSION 2.0 
 
<?php
$ip = getenv('HOSTNAME');

echo $ip;
?> 
</h1>
