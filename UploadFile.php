<?php
/**
 * Created by Tomasz Radwan
 * Date: 2018-04-05
 * Time: 22:42
 */

declare(strict_types=1);

/**
 * Class UploadFile
 */
class UploadFile
{
    /**
     * UploadFile constructor.
     */
    function __construct()
    {
    }

    /**
     * Upload data from file to array.
     *
     * @param string $pathToFile
     * @return array
     */
    static public function uploadToArray(string $pathToFile): array
    {
        $file = file($pathToFile);
        $arr = [];

        for ($i = 1; $i <= count($file) - 1; $i++) {
            $arr[] = explode(';', $file[$i]);
        }

        return $arr;
    }
}
