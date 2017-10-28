<?php

namespace PCC\Std\Exceptions;

use LogicException;

/**
 * [ Exception ] Inaccessible Property
 *
 * This exception will be thrown when inaccessible or undefined property is tried to access.
 * 
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package php-cc/std
 * @since 1.0.0
 */
final class InaccessiblePropertyException extends LogicException
{

    public function __construct(string $className, string $propertyName)
    {
        parent::__construct("Propery \"{$className}::\${$propertyName}\" is inaccessible or undefined.");
    }

}
