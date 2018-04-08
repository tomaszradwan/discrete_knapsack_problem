<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-08
 * Time: 21:01
 */
declare(strict_types=1);

function __autoload($class_name) {
    require $class_name . '.php';
}


class Run
{

    /**
     * Run constructor.
     */
    function __construct()
    {
    }

    /**
     * @param array $argv
     */
    public function run(array $argv)
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
            echo $e->getMessage();
            die();
        }

        $file = UploadFile::uploadToArray($relativePath);

        echo ShowResult::show(SelectAglorithm::select($algorithmId, $backpackSize, $file));
    }
}
