<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 24/11/2017
 * Time: 14:24
 */
require_once 'Triangle.php';
class Rectangle extends Triangle
{
    public function jesuis()
    {
        $racineABcarre = sqrt((pow(2,parent::getAc())+pow(2,parent::getAb())));
        if ($racineABcarre === parent::getBc())
            return 'je suis un triangle rectangle';

        return 'je ne suis pas un triangle rectangle';
    }
}