<?php

const COLOR = '#72a6e7';

function strContains($s, $key)
{
    return strpos($s, $key) !== false;
}

function echoArr($key, $arr)
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && strContains($_SERVER['HTTP_USER_AGENT'], 'python')) {
        echo PHP_EOL . $key . ': ' . PHP_EOL;
        echo print_r($arr, true) . PHP_EOL . PHP_EOL;
        echo '----------------' . PHP_EOL;
    } else {
        echo $key . ': <br>';
        echo '<pre style="white-space: pre-wrap; word-break: break-all; color: ' . COLOR . '">';
        echo print_r($arr, true);
        echo '</pre>';

        echo '<br>----------------<br><br>';
    }
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


// ------------------------------------------

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');

// ------------------------------------------

echoStr('$_SERVER["REQUEST_METHOD"]', $_SERVER['REQUEST_METHOD']);

echoStr('REQUEST URI', $_SERVER['REQUEST_URI']);

$allHeaders = getallheaders();
// Cookie may be too big. ignore
unset($allHeaders['Cookie']);

echoStr('Content-Type', isset($allHeaders['Content-Type']) ? $allHeaders['Content-Type'] : 'no Content-Type');

echoArr('$_GET', $_GET);

echoArr('$_POST', $_POST);

echoArr('file_get_contents("php://input")', file_get_contents("php://input"));

echoArr('getallheaders()', $allHeaders);
