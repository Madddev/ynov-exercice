<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 23/11/2017
 * Time: 14:58
 */


$arraofNamesImages = array(
    'people_002.jpg',
    'people_003.jpg',
    'people_004.jpg',
    'people_005.jpg',
    'people_006.jpg',
    'people_007.jpg',
    'people_008.jpg',
    'people_009.jpg',
    'people_010.jpg',
    'people_011.jpg',
    'people_012.jpg',
    'people_013.jpg',
    'people_014.jpg',
    'people_015.jpg',
    'people_016.jpg',
    'people_017.jpg',
    'people_018.jpg',
    'people_019.jpg',
    'people_020.jpg'
);

foreach ($arraofNamesImages as $namesImage){

    echo "<img src="."images/".$namesImage." height = 200px, weight = 200px >"."<br>"."<br>";

}


?>