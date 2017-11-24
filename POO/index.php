<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 24/11/2017
 * Time: 13:50
 */

require_once 'Entity/Equilateral.php';
require_once 'Entity/Isocele.php';
require_once 'Entity/Rectangle.php';
require_once 'Entity/Scalene.php';



$triangleEqui =  new Equilateral(5,5,6);
$triangleIso =  new Isocele(5,5,6);
$triangleScal =  new Rectangle(5,5,6);
$triangleRect =  new Scalene(5,5,6);


echo $triangleEqui->jesuis() ."\n";
echo $triangleIso->jesuis() ."\n";
echo $triangleScal->jesuis() ."\n";
echo $triangleRect->jesuis() ."\nl";