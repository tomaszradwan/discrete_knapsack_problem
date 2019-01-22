<?php
/**
 * Created by Tomasz Radwan
 * Date: 2018-04-05
 * Time: 21:26
 */

declare(strict_types=1);

/**
 * Class ValidatorArgv
 */
class ValidatorArgv
{
    /**
     * ValidatorArgv constructor.
     */
    function __construct()
    {
    }

    /**
     * Validate parameters.
     *
     * @param array $argv
     * @return array
     */
    static public function validateArgv(array $argv): array
    {
        try {
            if (count($argv) == 1) {
                throw new Exception('You have not entered any parameters.');
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }

        new Help($argv);

        $arr = [];

        $arr[] = $argv[1] ?? null;
        $arr[] = $argv[2] ?? null;
        $arr[] = $argv[3] ?? null;

        return $arr;
    }
}
