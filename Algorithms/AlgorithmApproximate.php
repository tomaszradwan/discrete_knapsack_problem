<?php
/**
 * Created by Tomasz Radwan
 * Date: 2018-04-06
 * Time: 22:36
 */

declare(strict_types=1);

/**
 * Class AlgorithmApproximate
 *
 * https://pl.wikipedia.org/wiki/Problem_plecakowy
 */
class AlgorithmApproximate
{
    /**
     * @var int
     */
    protected $currentWeight = 0;

    /**
     * @var float
     */
    protected $backpackSize = 0;

    /**
     * AlgorithmApproximate constructor.
     *
     * @param float $backpackSize
     */
    function __construct(float $backpackSize)
    {
        $this->backpackSize = $backpackSize;
    }

    /**
     * Calculation for approximate algorithm.
     *
     * @param array $array
     * @return array
     */
    public function algorithmApproximate(array $array): array
    {
        $arr = [];
        $backpack = [];

        foreach ($array as $key => $val) {
            $arr[$val[0]]['unitValue'] = ceil($val[2] / $val[1]);
            $arr[$val[0]]['itemWeight'] = $val[1];
            $arr[$val[0]]['itemValue'] = $val[2];
        }

        arsort($arr);

        foreach ($arr as $key => $val) {
            if (($val['itemWeight'] + $this->currentWeight) <= $this->backpackSize) {
                $backpack[$key] = $val;
                $this->currentWeight += $val['itemWeight'];
            }
        }

        return $backpack;
    }
}
