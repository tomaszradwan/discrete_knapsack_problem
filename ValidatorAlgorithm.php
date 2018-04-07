<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-05
 * Time: 20:44
 */

class ValidatorAlgorithm
{
    /**
     * @param int $number
     * @return int|null
     */
    static public function validateAlgorithmNumber($number = 1)
    {
        $reg = '/^[0-9]+$/';
        $number = $number ?? 1;

        if ($number == 1) {
            $number = 1;
        }
        else if (preg_match($reg, $number)) {
            $number = intval($number);
        } else {
            $number = null;
        }

        return $number;
    }
}
