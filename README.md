# php-array-methods
A class that helps chaining array methods for cleaner arrays manipulation.

# Examples:

```
<?php

require("./Collection.php");

$arr = new Collection([1, 2, 3, 4, 6, 8, 7, 10, 11, 12, 14]);

$newArr = $arr
    ->filter(function ($value) {
        return ($value % 2 === 0);
    })
    ->map(fn ($v) => $v + 100)
    ->reduce(function ($acc, $val) {
        $acc += $val;
        return $acc;
    });

print_r($filtered->getCollection()); // 756

```
