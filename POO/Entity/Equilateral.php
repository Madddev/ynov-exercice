<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 24/11/2017
 * Time: 14:25
 */

require_once 'Triangle.php';

class Equilateral extends Triangle
{



    public function jesuis()
    {
        if((parent::getAb() === parent::getAc() && parent::getAb() === parent::getBc() ) )
            return 'je suis un triangle equilateral';

        return 'je ne suis pas un equilateral';
    }
}