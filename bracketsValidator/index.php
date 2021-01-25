<?php

$row = "Это тестовый вариант проверки (задачи со скобками). И вот еще скобки: {[][()]}"; // true
$elements = ['(', ')', '[', ']', '{', '}'];

$brackets = addElementsInStack($row, $elements);
var_dump(bracketsValidation($brackets));

function addElementsInStack($row, $elements) {
    $array = str_split($row, 1);
    $res = new SplStack();
    foreach($array as $sym) {
        if (in_array($sym, $elements)) {
            $res->push($sym);
        }
    }
    return $res;
}

function bracketsValidation($brackets) {
    $stack = new SplStack();
    foreach ($brackets as $item) {
        $item = makeReverse($item);
        if (in_array($item, [')', ']', '}'])) {
            if ($stack->count() && $stack->top() == makeReverse($item)) {
                $stack->pop();
                continue;
            } else {
                echo "Ошибка\n";
                return false;
            }
        }
        $stack->push($item);
    }
    if ($stack->count()) {
        echo 'Ошибка';
        return false;
    }
    return true;
}

function makeReverse($item) {
    switch ($item) {
        case ')':
            return '(';
        case ']':
            return '[';
        case '}':
            return '{';
        case '(':
            return ')';
        case '[':
            return ']';
        case '{':
            return '}';
        default :
            echo 'makeReverse() error';
            return null;
    }
}