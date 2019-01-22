<?php
/**
 * Created by Tomasz Radwan
 * Date: 2018-04-13
 * Time: 18:10
 */

/**
 * @param $className
 */
function autoloaderCurrentFolder($className)
{
    if (file_exists($className . '.php')) {
        include $className . '.php';
    }
}

/**
 * @param $className
 */
function autoloaderValidatorsFolder($className)
{
    if (file_exists('./Validators/' . $className . '.php')) {
        include './Validators/' . $className . '.php';
    }
}

/**
 * @param $className
 */
function autoloaderAlgorithmsFolder($className)
{
    if (file_exists('./Algorithms/' . $className . '.php')) {
        include './Algorithms/' . $className . '.php';
    }
}
