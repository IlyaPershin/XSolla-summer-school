<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 25.07.2018
 * Time: 11:13
 */
function fridge(array $meals){
    $mealsCount = [];
    for ($i = 0; $i < count($meals); $i++){
        if (array_key_exists($meals[$i], $mealsCount)){
            $key = $meals[$i];
            $mealsCount[$key]++;
        }
        else{
            $key = $meals[$i];
            $mealsCount[$key] = 1;
        }
    }
    rsort($mealsCount);
    return $mealsCount[0];
}
?>
