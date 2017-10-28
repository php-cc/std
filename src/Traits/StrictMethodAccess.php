<?php

namespace PCC\Std\Traits;

use PCC\Std\Exceptions\{
    InaccessibleMethodException,
    InaccessibleStaticMethodException
};

/**
 * [ Trait ] Strict Method Access
 *
 * Denying any access to undefined or inaccessible methods.
 * Using this trait allows you to catch distintive exceptions so that error handling is much easier.
 * 
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package php-cc/std
 * @since 1.0.0
 */
trait StrictMethodAccess
{

    public function __call(string $name, array $arguments)
    {
        throw new InaccessibleMethodException(static::class, $name);
    }

    public static function __callStatic(string $name, array $arguments)
    {
        throw new InaccessibleStaticMethodException(static::class, $name);
    }

}
