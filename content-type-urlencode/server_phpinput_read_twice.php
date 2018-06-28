<?php

function echoArr($key, $arr)
{
    echo $key . ': <br>';
    echo print_r($arr, true);
    echo '<br>--------------------<br><br>';
}

function echoStr($key, $str)
{
    echo PHP_EOL . $key . ': ' . PHP_EOL;
    echo $str . PHP_EOL . PHP_EOL;
    echo '----------------' . PHP_EOL;
}

echoStr('$_SERVER["REQUEST_METHOD"]', $_SERVER['REQUEST_METHOD']);

echoArr('file_get_contents("php://input") (1st)', file_get_contents("php://input"));

echoArr('file_get_contents("php://input") (2nd)', file_get_contents("php://input"));
