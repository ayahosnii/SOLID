<?php
use SOLID\LSP\Rectangle;
define('DS', DIRECTORY_SEPARATOR);

require_once __DIR__ . DS . 'vendor' . DS . 'autoload.php';

$rectangle = new \SOLID\LSP\Square();
$rectangle->setWidth(4);
$rectangle->setHeight(6);
$rectangle->calculateArea();

function f (Rectangle $rect)
{
    if ($rect instanceof \SOLID\LSP\Square) {
        if ($rect->calculateArea() !== 36) {
            echo 'There is something wrong';
        }
    } else {
        if ($rect->calculateArea() !== 24) {
            echo 'There is something wrong';
        }
    }
}

f($rectangle);