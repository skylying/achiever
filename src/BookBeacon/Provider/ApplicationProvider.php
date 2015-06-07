<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace BookBeacon\Provider;


use Joomla\Application\AbstractWebApplication;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

class ApplicationProvider implements ServiceProviderInterface
{
    /**
     * Property app.
     *
     * @var
     */
    public $app;

    public function __construct(AbstractWebApplication $app)
    {
        $this->app = $app;
    }

    /**
     * Registers the service provider with a DI container.
     *
     * @param   Container $container The DI container.
     *
     * @return  void
     *
     * @since   1.0
     */
    public function register(Container $container)
    {
        $container->share('app', $this->app);

        // todo:
        //$container->share('input', $this->app->input);
    }
}
 