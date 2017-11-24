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


use Imagine\Gd\Imagine;
use Imagine\Image\Box;

require_once '../../vendor/autoload.php';


$imagine = new Imagine();

foreach ($arraofNamesImages as $item) {
    $image = $imagine->open('https://placem.at/people?txt='.$item)
        ->resize(new Box(500, 500))
        ->save('./images/'.$item .".jpg");
}
foreach ($arraofNamesImages as $nameImage){

    echo "<img src=./images/".$nameImage.".jpg"." style='width:50%;max-width:400px;box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;' >"."<br>"."<br>";

}



?>