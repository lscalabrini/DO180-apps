<?php
print "Sitio web de prueba. Versión de PHP: " . PHP_VERSION . "\n";
?>
<h1> Version 4.0 MOD. DO180. La solicitud está siendo procesada por el pod:   
 
<?php
$ip = getenv('HOSTNAME');

echo $ip;
?> 
</h1>
