<?php
echo '$_ENV:', PHP_EOL;
var_dump($_ENV);
echo '$_SERVER:', PHP_EOL;
var_dump($_SERVER);
echo 'getenv("foo"):', PHP_EOL;
var_dump(getenv('foo'));
