<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 24/11/2017
 * Time: 16:46
 */

interface  Perimetre
{

//suposons que les dimensions de nos triangles soient de int
    public function perimetre(int $ab, int $ac, int $bc): int;

}