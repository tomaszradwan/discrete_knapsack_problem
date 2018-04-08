<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-05
 * Time: 21:26
 */
declare(strict_types=1);

class ValidatorArgv
{
    /**
     * ValidatorArgv constructor.
     */
    function __construct()
    {
    }

    /**
     * @param array $argv
     * @return array
     */
    static public function validateArgv(array $argv):array
    {
        $arr = array();

        $arr[] = $argv[1] ?? null;
        $arr[] = $argv[2] ?? null;
        $arr[] = $argv[3] ?? null;

        return $arr;
    }
}
