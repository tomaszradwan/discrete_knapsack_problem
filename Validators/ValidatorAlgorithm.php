<?php
/**
 * Created by Tomasz Radwan
 * Date: 2018-04-05
 * Time: 20:44
 */

declare(strict_types=1);

/**
 * Class ValidatorAlgorithm
 */
class ValidatorAlgorithm
{
    /**
     * ValidatorAlgorithm constructor.
     */
    function __construct()
    {
    }

    /**
     * Validation for algorithm number.
     *
     * @param int $number
     * @return int|null
     */
    static public function validateAlgorithmNumber($number = 1)
    {
        $reg = '/^[0-9]+$/';
        $number = $number ?? 1;

        if ($number == 1) {
            $number = 1;
        } elseif (preg_match($reg, $number)) {
            $number = intval($number);
        } else {
            $number = null;
        }

        return $number;
    }
}
