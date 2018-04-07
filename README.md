**The script solves the knapsack problem.**

https://pl.wikipedia.org/wiki/Problem_plecakowy

After downloading the package with the files, open the terminal and go to the folder.

The script is launched after entering the command:

_php task.php `<relative path_to_csv_file>` `<backpack_weight>` optional `<number_of_algorithm>`_

e.g.
_php task.php ./file_with_data.csv 115.5 1_


Parameters description:

`<relative_path_to_file_csv>` - required parameter, type: string, files with the extension .csv

`<backpack_weight>` - required parameter, type: float

`<number_of_algorithm>` - optional parameter, type: integer, default value: 1 = Algorithm Approximate