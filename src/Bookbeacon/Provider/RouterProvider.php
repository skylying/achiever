<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace BookBeacon\Provider;


use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Registry\Registry;
use Joomla\Router\RestRouter;
use Joomla\Router\Router;

class RouterProvider implements ServiceProviderInterface
{
    /**
     * Property input.
     *
     * @var
     */
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

            /**
			 * 目前還用不到 RestRouter, 先用正常的
			 *
             * http://localhost/framework_flower/public/olive/1/jack?_method=PUT
             */
            //$router->setMethodInPostRequest(true);

            $map = new Registry;
            $map->loadFile(BB_ETC_PATH . '/routing.json');

            $router->addMaps($map->toArray());

            return $router;
        };

        $container->share('router', $closure);
    }
}
 