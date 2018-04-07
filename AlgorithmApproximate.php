<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-06
 * Time: 22:36
 */

class AlgorithmApproximate
{
    /**
     * @var int
     */
    private $currentWeight = 0;

    /**
     * @var int
     */
    private $currentValue = 0;

    /**
     * @var float
     */
    private $backpackSize = 0;

    function __construct(float $backpackSize, array $file) {
        $this->backpackSize = $backpackSize;
    }

    /**
     * @param $array
     * @return array
     */
    public function algorithmApproximate(array $array):array
    {
        $arr = array();
        $backpack = array();

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