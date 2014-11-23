<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Provider;


use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class WhoopsProvider implements ServiceProviderInterface
{
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
        if (!AC_DEBUG)
        {
            return;
        }

        $whoops = new Run;
        $handler = new PrettyPageHandler;
        $whoops->pushHandler($handler);
        $whoops->register();

        $container->share('whoops', $whoops);
        $container->share('whoops.handler', $handler);
    }
}
 