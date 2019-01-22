<?php
/**
 * Created by Tomasz Radwan
 * Date: 2018-04-13
 * Time: 20:29
 */

declare(strict_types=1);

/**
 * Class Help
 */
class Help
{
    /**
     * @var array
     */
    protected $argv;

    /**
     * Help constructor.
     *
     * @param array $argv
     */
    function __construct(array $argv)
    {
        $this->argv = $argv;
        $this->showAlgorithms();
    }

    /**
     * Show list of all algorithms.
     */
    public function showAlgorithms()
    {
        if ($this->argv[1] == '--help') {
            echo '====================' . PHP_EOL
                . 'The List of Algorithms: ' . PHP_EOL;

            foreach ($this->availableAlgorithms() as $key => $val) {
                echo $key . ' => ' . $val . PHP_EOL;
            }

            die('====================');
        }
    }

    /**
     * Array with all available algorithms.
     *
     * @return array
     */
    private function availableAlgorithms(): array
    {
        return
            [
                1 => 'Algorithm Approximate',
            ];
    }
}
