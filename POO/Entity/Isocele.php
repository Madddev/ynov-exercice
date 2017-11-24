<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 24/11/2017
 * Time: 14:25
 */
require_once 'Triangle.php';
class Isocele extends Triangle
{

    public function jesuis()
    {
        if((parent::getAb() === parent::getAc() && parent::getAb() != parent::getBc()) || (parent::getBc() === parent::getAc() && parent::getBc() != parent::getAb() ))
            return 'je suis un triangle Isocele';

        return 'je ne suis pas Isocele' ;
    }
}