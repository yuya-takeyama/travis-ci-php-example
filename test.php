<?php
$fdSpecs = array(
    array('pipe', 'r'),
    array('pipe', 'w'),
    array('pipe', 'w'),
);
$process = proc_open('php -r "exit;"', $fdSpecs, $pipes);
var_dump(proc_get_status($process));
echo "----------", PHP_EOL;
echo "TERMINATE", PHP_EOL;
echo "----------", PHP_EOL;
foreach (range(1, 10) as $i) {
    var_dump(proc_get_status($process));
    echo "----------", PHP_EOL;
    sleep(1);
}
