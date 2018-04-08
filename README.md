**The script solves the knapsack problem.**

https://pl.wikipedia.org/wiki/Problem_plecakowy

After downloading the package with the files, open the terminal and go to the folder.

The script is launched after entering the command:

_php RunScript.php `<relative path_to_csv_file>` `<backpack_weight>` optional `<number_of_algorithm>`_

e.g.
_php RunScript.php ./file_with_data.csv 115.5 1_

=========================================

Parameters description:

`<relative_path_to_file_csv>` - required parameter, type: string, files with the extension .csv

`<backpack_weight>` - required parameter, type: float

`<number_of_algorithm>` - optional parameter, type: integer, default value: 1 = Algorithm Approximate

=========================================

You can implement new algorithms, follow the steps below.

1. In folder "Algorithms" add class with the new algorithm.

2. Open file "SelectAglorithm.php" and:
    a) add require './Algorithms/file_name_with_new_algoritm.php';
    b) add new case in switch
3. Open file README.md add the name of new algorithm to section "List of Algorithms"

=========================================

__**List of Algorithms**__

_**1. Algorithm Approximate**_
