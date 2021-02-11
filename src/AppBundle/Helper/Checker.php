<?php
namespace AppBundle\Helper;


class Checker 
{
    private $isValid = false;

    public function isValid($val = 'B') {
        if ($val == 'A') {
            $this->isValid  = true;
        } else {
            $this->isValid = false;
            }
        return $this->isValid;
    }

    public function getValid()
    {
        return $this->isValid;    
    }
}