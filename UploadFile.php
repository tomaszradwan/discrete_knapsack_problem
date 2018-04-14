<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-05
 * Time: 22:42
 */

declare(strict_types=1);

class UploadFile
{
    /**
     * UploadFile constructor.
     */
    function __construct()
    {
    }

    /**
     * @param string $pathToFile
     * @return array
     */
    static public function uploadToArray(string $pathToFile):array
    {
        $file = file($pathToFile);
        $arr = [];

        for ($i = 1; $i <= count($file) - 1; $i++) {
            $arr[] = explode(";", $file[$i]);
        }

        return $arr;
    }
}
