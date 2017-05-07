<?php

namespace ScayTrase\Symfony\Issue21369\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class Issue21369BundleTest extends KernelTestCase
{
    protected static function getKernelClass()
    {
        return TestKernel::class;
    }

    public function testKernelCompiles()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();

        self::assertEquals(
            'baz',
            static::$kernel->getContainer()->get('scaytrase.issue_21369.child')->getFoo()
        );
    }
}
