<?php

namespace PCC\Std\Exceptions;

use LogicException;

/**
 * [ Exception ] Inaccessible Static Method
 *
 * This exception will be thrown when inaccessible or undefined static method is tried to call.
 * 
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package php-cc/std
 * @since 1.0.0
 */
final class InaccessibleStaticMethodException extends LogicException
{

    public function __construct(string $className, string $methodName)
    {
        parent::__construct("Static method \"{$className}::\{$methodName}\" is inaccessible or undefined.");
    }

}
