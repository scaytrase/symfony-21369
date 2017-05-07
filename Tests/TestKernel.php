<?php

namespace ScayTrase\Symfony\Issue21369\Tests;

use ScayTrase\Symfony\Issue21369\Issue21369Bundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

final class TestKernel extends Kernel
{
    public function registerBundles()
    {
        return [new Issue21369Bundle()];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
    }
}
