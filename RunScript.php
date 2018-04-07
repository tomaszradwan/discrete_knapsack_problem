<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-05
 * Time: 20:36
 */

function __autoload($class_name) {
    require $class_name . '.php';
}

$params = ValidatorArgv::validateArgv($argv);

$relativePath = ValidatorPath::validatePath($params[0]);
$backpackSize = ValidatorBackpack::validateBackpackSize($params[1]);
$algorithmNr = ValidatorAlgorithm::validateAlgorithmNumber($params[2]);

try {
    if ($relativePath === null) {
        throw new Exception('You did not specify a relative path (e.g: "./file_name.csv" or ".\ file_name.csv") or the file (file_name.csv) does not exist.');
    }

    if ($backpackSize === null) {
        throw new Exception('Backpack size is required, type: float.');
    }

    if ($algorithmNr === null) {
        throw new Exception('The algorithm for calculations is of the integer type.');
    }
}
catch (Exception $e) {
    echo $e->getMessage();
    die();
}

$file = UploadFile::uploadToArray($relativePath);

echo ShowResult::show(SelectAglorithm::select($algorithmNr, $backpackSize, $file));

