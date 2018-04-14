<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-08
 * Time: 21:01
 */

declare(strict_types=1);

require_once 'autoload.php';
spl_autoload_register('autoloaderCurrentFolder');

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
        $params = Validator::validateAll($argv);

        $file = UploadFile::uploadToArray($params['relativePath']);

        echo ShowResult::show(SelectAglorithm::select($params['algorithmId'], $params['backpackSize'], $file));
    }
}
