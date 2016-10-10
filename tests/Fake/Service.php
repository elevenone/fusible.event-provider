<?php
// @codingStandardsIgnoreFile

namespace Fusible\EventProvider\Fake;

class Service
{

    protected $invoke;

    protected $foo;

    public function __construct($invoke, $foo)
    {
        $this->invoke = $invoke;
        $this->foo = $foo;
    }

    public function __invoke()
    {
        return $this->invoke;
    }

    public function foo()
    {
        return $this->foo;
    }
}
