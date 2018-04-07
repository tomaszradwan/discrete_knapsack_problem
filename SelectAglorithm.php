<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-07
 * Time: 07:37
 */

require './Algorithms/AlgorithmApproximate.php';

class SelectAglorithm
{
    /**
     * @param int $algorithmNr
     * @param float $backpackSize
     * @param array $file
     * @return array
     */
    static public function select(int $algorithmNr, float $backpackSize, array $file): array
    {
        $result = array();

        try {
            switch ($algorithmNr) {
                case 1:
                    $algAApproximate = new AlgorithmApproximate($backpackSize, $file);
                    $result = $algAApproximate->algorithmApproximate($file);
                    break;
                default:
                    throw new Exception("Algorithm does not exists.");
                    break;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }

        return $result;
    }
}
