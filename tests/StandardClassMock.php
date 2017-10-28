<?php

namespace PCC\Std\Tests;

use PCC\Std\StandardClass;

class StandardClassMock extends StandardClass
{
    public $publicProperty = 1;
    
    protected $protectedProperty = 10;
    
    private $privateProperty = 100;
    
}
