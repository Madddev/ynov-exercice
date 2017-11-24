<?php
/**
 * Created by PhpStorm.
 * User: Franck
 * Date: 24/11/2017
 * Time: 13:51
 */

abstract class  Triangle
{

    //longueur du traingle

    private  $ab;
    private  $ac;
    private  $bc;

    public function __construct($ab, $ac, $bc){
        $this->ab = $ab;
        $this->ac = $ac;
        $this->bc = $bc;

    }
    /**
     * @return mixed
     */
    public function getAb()
    {
        return $this->ab;
    }

    /**
     * @return mixed
     */
    public function getAc()
    {
        return $this->ac;
    }

    /**
     * @return mixed
     */
    public function getBc()
    {
        return $this->bc;
    }

    /**
     * @param mixed $ab
     */
    public function setAb($ab)
    {
        $this->ab = $ab;
    }

    /**
     * @param mixed $ac
     */
    public function setAc($ac)
    {
        $this->ac = $ac;
    }

    /**
     * @param mixed $bc
     */
    public function setBc($bc)
    {
        $this->bc = $bc;
    }

    abstract protected function jesuis();

}