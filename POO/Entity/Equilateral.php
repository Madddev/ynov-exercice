<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 24/11/2017
 * Time: 14:25
 */

require_once 'Triangle.php';
require_once 'Perimetre.php';

class Equilateral extends Triangle implements Perimetre
{



    public function jesuis()
    {
        if((parent::getAb() === parent::getAc() && parent::getAb() === parent::getBc() ) )
            return 'je suis un triangle equilateral';

        return 'je ne suis pas un equilateral';
    }


    public function perimetre(int $ab, int $ac, int $bc):int
    {

    }


}