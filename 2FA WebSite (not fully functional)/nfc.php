<?php
$cp =  $_POST['cp'] ;

//$t = shell_exec('python test.py ' . $cp) ;

$result = json_decode(exec('python test.py'), true);
echo $result['foo'];

?>