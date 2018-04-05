<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-05
 * Time: 20:36
 */

function __autoload($class_name) {
    include $class_name . '.php';
}

//var_dump($argc);
//var_dump($argv);

$params = ValidatorArgv::validateArgv($argv);

$relativePath = ValidatorPath::validatePath($params[0]);
$backpackSize = ValidatorBackpack::validateBackpackSize($params[1]);
$algorithmNr = ValidatorAlgorithm::validateAlgorithmNumber($params[2]);

try {
    if ($relativePath === null) {
        throw new Exception('Nie podałeś relatywnej ścieżka lub plik(.csv) nie istnieje(ex.: ./file_name.csv lub .\file_name.csv)');
    }

    if ($backpackSize === null) {
        throw new Exception('Rozmiar plecaka jest wymagany, typ: float.');
    }

    if ($algorithmNr === null) {
        throw new Exception('Algorytm dla obliczeń jest typu integer.');
    }
}
catch (Exception $e) {
    echo $e->getMessage();
    die();
}

$file = UploadFile::uploadToArray($relativePath);
//var_dump($file);
