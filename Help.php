<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-13
 * Time: 20:29
 */

declare(strict_types=1);

class Help
{
    /**
     * @var array
     */
    private $argv;

    /**
     * Help constructor.
     * @param array $argv
     */
    function __construct(array $argv)
    {
        $this->argv = $argv;
        $this->showAlgorithms();
    }

    /**
     *
     */
    public function showAlgorithms()
    {
        if ($this->argv[1] == "--help") {
            echo "====================" . PHP_EOL
                . 'The List of Algorithms: ' . PHP_EOL;

            foreach ($this->arrayWithAlgorithmNames() as $key => $val) {
                echo $key . " => " . $val . PHP_EOL;
            }

            die("====================");
        }
    }

    /**
     * @return array
     */
    private function arrayWithAlgorithmNames():array
    {
        return
            [
                1 => 'Algorithm Approximate',
            ];
    }
}
