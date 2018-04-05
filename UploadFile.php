<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-05
 * Time: 22:42
 */

class UploadFile
{
    /**
     * @param string $pathToFile
     * @return array
     */
    static public function uploadToArray(string $pathToFile):array
    {
        $file = file($pathToFile);
        $arr = array();

        for ($i = 1; $i <= count($file) - 1; $i++) {
            $arr[] = explode(";", $file[$i]);
        }

        return $arr;
    }
}