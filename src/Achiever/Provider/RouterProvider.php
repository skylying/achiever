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
use Joomla\Registry\Registry;
use Joomla\Router\Router;

class RouterProvider implements ServiceProviderInterface
{
    public $input;

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
        $closure = function($container)
        {
            $input = $container->get('app')->input;

            $router = new Router($input);
            
            $map = new Registry;
            $map->loadFile(AC_ETC_PATH . '/routing.json');

            $router->addMaps($map->toArray());

            return $router;
        };

        $container->share('router', $closure);
    }
}
 