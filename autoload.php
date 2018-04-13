<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-13
 * Time: 18:10
 */

function autoloaderCurrentFolder($className) {
    if (file_exists($className . '.php')) {
        include $className . '.php';
    }
}

function autoloaderValidatorsFolder($className) {
    if (file_exists('./Validators/' . $className . '.php')) {
        include './Validators/' . $className . '.php';
    }
}

function autoloaderAlgorithmsFolder($className) {
    if (file_exists('./Algorithms/' . $className . '.php')) {
        include './Algorithms/' . $className . '.php';
    }
}
