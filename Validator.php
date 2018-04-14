<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-13
 * Time: 17:53
 */

declare(strict_types=1);

require_once 'autoload.php';
spl_autoload_register('autoloaderValidatorsFolder');

class Validator
{
    /**
     * Validator constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param array $argv
     * @return array
     */
    static public function validateAll(array $argv):array
    {
        $params = ValidatorArgv::validateArgv($argv);

        $relativePath = ValidatorPath::validatePath($params[0]);
        $backpackSize = ValidatorBackpack::validateBackpackSize($params[1]);
        $algorithmId = ValidatorAlgorithm::validateAlgorithmNumber($params[2]);

        try {
            if ($relativePath === null) {
                throw new Exception('You did not specify a relative path (e.g: "./file_name.csv" or ".\ file_name.csv") or the file (file_name.csv) does not exist.');
            }

            if ($backpackSize === null) {
                throw new Exception('Backpack size is required, type: float.');
            }

            if ($algorithmId === null) {
                throw new Exception('The algorithm for calculations is of the integer type.');
            }
        }
        catch (Exception $e) {
            die($e->getMessage());
        }

        return
            [
                'relativePath' => $relativePath,
                'backpackSize'=> $backpackSize,
                'algorithmId' => $algorithmId
            ];
    }
}
