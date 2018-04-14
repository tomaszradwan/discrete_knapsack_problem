<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-06
 * Time: 22:36
 */

declare(strict_types=1);

/**
 * Class AlgorithmApproximate
 * https://pl.wikipedia.org/wiki/Problem_plecakowy
 */
class AlgorithmApproximate
{
    /**
     * @var int
     */
    private $currentWeight = 0;

    /**
     * @var float
     */
    private $backpackSize = 0;

    /**
     * AlgorithmApproximate constructor.
     * @param float $backpackSize
     */
    function __construct(float $backpackSize)
    {
        $this->backpackSize = $backpackSize;
    }

    /**
     * @param array $array
     * @return array
     */
    public function algorithmApproximate(array $array):array
    {
        $arr = [];
        $backpack = [];

        foreach ($array as $key => $val) {
            $arr[$val[0]][0] = ceil($val[2] / $val[1]);
            $arr[$val[0]][1] = $val[1];
            $arr[$val[0]][2] = $val[2];
        }

        arsort($arr);

        foreach ($arr as $key => $val) {
            if ($val[1] + $this->currentWeight <= $this->backpackSize) {
                $backpack[$key] = $val;
                $this->currentWeight += $val[1];
            }
        }

        return $backpack;
    }
}
