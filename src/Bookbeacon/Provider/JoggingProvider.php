<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace BookBeacon\Provider;


use Achiever\Jogging\Jogging;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Registry\Registry;

class JoggingProvider implements ServiceProviderInterface
{
    /**
     * Property config.
     *
     * @var \Joomla\Registry\Registry
     */
    public $config;


    public function __construct(Registry $config)
    {
        $this->config = $config;
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
        $this->config->set('where', 'Taiwan');

        $container->share(
            'achiever.jogging',
            function ($container)
            {
                return new Jogging($container->get('config'));
            }
        );
    }
}
 