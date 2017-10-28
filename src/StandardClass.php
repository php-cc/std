<?php

namespace PCC\Std;

use PCC\Std\Traits\{
    StrictPropertyAccess,
    StrictMethodAccess
};

/**
 * [ Abstract Class ] Standard Class
 *
 * Extending this class lets your class deny array-like access to properties.
 * Throws distinctive exceptions for each wrong operations.
 * 
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package php-cc/std
 * @since 1.0.0
 */
abstract class StandardClass
{

    use StrictPropertyAccess;
    use StrictMethodAccess;
}
