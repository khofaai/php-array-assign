<?php

function assign() {
    $arguments = func_get_args();
    if(count($arguments) === 0) {
        return [];
    }
    $initArray = $arguments[0];
    unset($arguments[0]);
    foreach ($arguments as $arg) {
        $keys = array_keys($arg);
        foreach ($keys as $key) {
            $initArray[$key] = $arg[$key];
        }
    }
    return $initArray;
}
