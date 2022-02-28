<?php

## $teststring используется для ввода тестируемой строки

    $teststring = "5 * ((4 - 2))";

    $testcode_array = str_split($teststring);
    $counter = 0;

    foreach ($testcode_array as $item) {
        if ($item == '(') {
            $counter += 1;
        } elseif ($item == ')') {
            $counter += -1;
        }
        if ($counter < 0) {
            echo "ошибка";
            exit();
        }
    }

    if ($counter == 0) {
        echo "всё ок";
    } else {
        echo "ошибка";
    }