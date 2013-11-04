<?php 
Configure::write('debug', 0);
header('conten-type:text/x-json');
header('cache-control:no-store,no-cache,max-age=0,must-revalidate');
$callback = $_GET['callback'];
print($callback."(".json_encode($playersBios).");"); ?> 