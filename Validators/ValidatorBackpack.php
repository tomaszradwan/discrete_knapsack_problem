<?php
/**
 * Created by Tomasz Radwan
 * Date: 2018-04-05
 * Time: 20:35
 */

declare(strict_types=1);

/**
 * Class ValidatorBackpack
 */
class ValidatorBackpack
{
    /**
     * ValidatorBackpack constructor.
     */
    function __construct()
    {
    }

    /**
     * Validation of backpack size.
     *
     * @param $backpackSize
     * @return float|null
     */
    static public function validateBackpackSize($backpackSize)
    {
        $backpackSize = $backpackSize ?? null;

        $reg = '/[0-9]*[.]+[0-9]+/';

        if (is_null($backpackSize) || !preg_match($reg, $backpackSize)) {
            return null;
        } else {
            $backpackSize = floatval($backpackSize);

            return $backpackSize <= 0 ? null : $backpackSize;
        }
    }
}
