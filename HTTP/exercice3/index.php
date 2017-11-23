<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 23/11/2017
 * Time: 14:58
 */


$arraofNamesImages = array(
    'Image1',
    'Image2',
    'Image3',
    'Image4',
    'Image5',
    'Image6',
    'Image7',
    'Image8',
    'Image9',
    'Image10',
    'Image11',
    'Image12',
    'Image13',
    'Image14',
    'Image15',
    'Image16',
    'Image17',
    'Image18',
    'Image19'
);

foreach ($arraofNamesImages as $imageName){

    echo "<img src="."https://placem.at/people?txt=".$imageName." height = 200px, weight = 200px >"."<br>"."<br>";

}


?>