<?php

namespace ScayTrase\Symfony\Issue21369;

final class SampleService
{
    /** @var string */
    private $foo;

    /**
     * SampleService constructor.
     * @param string $foo
     */
    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    /**
     * @return string
     */
    public function getFoo()
    {
        return $this->foo;
    }
}
