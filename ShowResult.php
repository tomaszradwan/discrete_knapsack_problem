<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 2018-04-07
 * Time: 10:05
 */

declare(strict_types=1);

class ShowResult
{
    /**
     * ShowResult constructor.
     */
    function __construct()
    {
    }

    /**
     * @param array $array
     * @return string
     */
    static public function show(array $array):string
    {
        $id = array();
        $amount = 0;
        $weight = 0;

        if (is_array($array) && count($array) > 0) {
            foreach ($array as $key => $val) {
                $id[] = $key;
                $amount +=$val[2];
                $weight += $val[1];
            }
        } else {
            die("There are no results for the entered data.");
        }

        return "Total value of selected items: " . $amount
            . " | Total weight of selected items: " . $weight
            . " | List(ID numbers) of selected items: " . implode(", ", $id);
    }
}
