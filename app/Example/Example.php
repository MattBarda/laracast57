<?php

namespace App\Example;

class Example
{
    private $foo;

    public function __construct(Foo $foo)
    {
        $this->foo = $foo;
    }
}