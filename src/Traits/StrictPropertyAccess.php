<?php

namespace PCC\Std\Traits;

use PCC\Std\Exceptions\InaccessiblePropertyException;

/**
 * [ Trait ] Strict Propery Access
 *
 * Denying any access to undefined or inaccessible properties.
 * Using this trait allows you to catch distintive exceptions so that error handling is much easier.
 * 
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package php-cc/std
 * @since 1.0.0
 */
trait StrictPropertyAccess
{

    public function __get(string $name)
    {
        throw new InaccessiblePropertyException(static::class, $name);
    }

    public function __set(string $name, $v)
    {
        throw new InaccessiblePropertyException(static::class, $name);
    }

    public function __isset(string $name): bool
    {
        return false;
    }

    public function __unset(string $name)
    {
        throw new InaccessiblePropertyException(static::class, $name);
    }

}
