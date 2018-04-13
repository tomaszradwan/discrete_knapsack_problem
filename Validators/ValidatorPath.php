<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-05
 * Time: 21:44
 */

declare(strict_types=1);

class ValidatorPath
{
    /**
     * ValidatorPath constructor.
     */
    function __construct()
    {
    }

    /**
     * @param string $path
     * @return null|string
     */
    static public function validatePath($path)
    {
        $regWin = '/^\.\\\\.*\.(csv)$/';
        $regLin = '/^\.\/.*\.(csv)$/';

        if (preg_match($regWin, $path) || preg_match($regLin, $path)) {
            if (file_exists($path)) {
                return $path;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
}
