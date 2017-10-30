<?php
/**
 * Created by PhpStorm.
 * User: goekhan.bastan
 * Date: 27.10.2017
 * Time: 15:44
 */

 class Status
{

    private $passed;
    private $failed;

    public function getPassed()
    {
        return $this->passed;
    }

    public function getFailed()
    {
        return $this->failed;
    }
}