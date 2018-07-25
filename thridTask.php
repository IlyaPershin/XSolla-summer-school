<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 25.07.2018
 * Time: 11:13
 */
$meals = array(1,2,3,5,4,1,3,2,5,5,5,1);
echo fridge($meals);

function fridge(array $meals){
    $mealsCount = [];
    for ($i = 0; $i < count($meals); $i++){
        if (array_key_exists($meals[$i], $mealsCount)){
            $key = $meals[$i];
            $mealsCount[$key]++;
            var_dump($key, $mealsCount, 'T');
        }
        else{
            $key = $meals[$i];
            $mealsCount[$key] = 1;
            var_dump($key, $mealsCount, 'F');
        }
    }
    rsort($mealsCount);
    var_dump($mealsCount);
    return $mealsCount[0];
}
?>