<?php
echo '$_ENV:', PHP_EOL;
var_dump($_ENV);
echo '$_SERVER:', PHP_EOL;
var_dump($_SERVER);

$fdSpecs = array(
    array('pipe', 'r'),
    array('pipe', 'w'),
    array('pipe', 'w'),
);
$process = proc_open('php test2.php', $fdSpecs, $pipes, null, array('foo' => 'bar'));

echo stream_get_contents($pipes[1]);
echo stream_get_contents($pipes[2]);
