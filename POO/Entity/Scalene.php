<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 24/11/2017
 * Time: 14:25
 */
require_once 'Triangle.php';
require_once 'Perimetre.php';

class Scalene extends Triangle implements Perimetre
{


    public function jesuis()
    {
        if (parent::getAb() != parent::getAc() && parent::getAb() != parent::getBc() && parent::getBc() != parent::getAc())
            return 'je suis un triangle Scalene';

        return 'je ne suis pas un triangle scalene';
    }

    public function perimetre(int $ab, int $ac, int $bc):int
    {

    }
}