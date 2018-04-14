<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-07
 * Time: 07:37
 */

declare(strict_types=1);

require_once 'autoload.php';
spl_autoload_register('autoloaderAlgorithmsFolder');

class SelectAglorithm
{
    /**
     * SelectAglorithm constructor.
     */
    function __construct()
    {
    }

    /**
     * @param int $algorithmNr
     * @param float $backpackSize
     * @param array $file
     * @return array
     */
    static public function select(int $algorithmNr, float $backpackSize, array $file):array
    {
        $result = [];

        try {
            switch ($algorithmNr) {
                case 1:
                    $algAApproximate = new AlgorithmApproximate($backpackSize);
                    $result = $algAApproximate->algorithmApproximate($file);
                    break;
                default:
                    throw new Exception("Algorithm does not exists.");
                    break;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }

        return $result;
    }
}
