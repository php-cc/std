# Standard Class

## Install
`composer require php-cc/std`

## Basic Usage
Extends `PCC\Std\StandardClass`.

```php
use PCC\Std\StandardClass;

class MyClass extends StandardClass { }

$c = new MyClass;
$c->newProperty = 334;    // fail (InaccessiblePropertyException)
```
