<?php
function check($sym)
{
    $stack = new SplStack();
    $stack1 = new SplStack();
    $arr = str_split($sym);
    if ($stack === NULL) {
        return true;
    }
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === "(") {
            $stack->push($arr[$i]);
        } elseif ($arr[$i] === ")" && $stack === NULL) {
            return false;
        } elseif ($arr[$i] === ")") {
            $stack1->push($arr[$i]);
            if ($stack->bottom() === ")") {
                return false;
            }
        }
    }
    if ($stack->count() !== $stack1->count()) {
        return false;
    } else {
        return true;
    }
}

$sym = "( -b + b2 ) - ( 4 * a * c )";
var_dump(check($sym));