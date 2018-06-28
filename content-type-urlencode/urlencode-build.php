<?php

const COLOR = '#72a6e7';

function strContains($s, $key)
{
    return strpos($s, $key) !== false;
}

function echoStr($key, $str)
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && strContains($_SERVER['HTTP_USER_AGENT'], 'python')) {
        echo PHP_EOL . $key . ': ' . PHP_EOL;
        echo $str . PHP_EOL . PHP_EOL;
        echo '----------------' . PHP_EOL;
    } else {
        echo $key . ': <br>';
        echo '<pre style="white-space: pre-wrap; word-break: break-all; color: ' . COLOR . '">';
        echo $str;
        echo '</pre>';
        echo '<br><br>----------------<br><br>';
    }
}

$data = [
    0 => "abc",
    "x" => 456,
    "z" => [
        "y" => 123,
    ],
];

$s1 = http_build_query($data);

$s2 = urldecode($s1);

echoStr('$s1', $s1);
echoStr('$s2', $s2);
