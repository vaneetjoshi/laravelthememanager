<?php

namespace Vaneetjoshi\Laravelthememanager\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Vaneetjoshi\Laravelthememanager\Providers\ThemevelServiceProvider;

/**
 * This is the abstract test case class.
 */
abstract class TestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return ThemevelServiceProvider::class;
    }
}
