<?php
/**
 * Created by Tomasz Radwan
 * Date: 2018-04-05
 * Time: 21:44
 */

declare(strict_types=1);

/**
 * Class ValidatorPath
 */
class ValidatorPath
{
    /**
     * ValidatorPath constructor.
     */
    function __construct()
    {
    }

    /**
     * Path validator.
     *
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
            }
        }

        return null;
    }
}
