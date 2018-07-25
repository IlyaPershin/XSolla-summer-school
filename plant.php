<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 24.07.2018
 * Time: 16:34
 */

$cells = $_POST["cells"];
$distance = $_POST["distance"];
$result = 1;

for ($i = 0; $i<count($cells)-1; $i++){
    $dist = abs($cells[$i+1] - $cells[$i]);
    $count=floor(($dist - 1)/$distance);
    if ($dist>=($distance*2) && $count>0){
        $result*=$count;
    }
}

return $result;
?>