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

class ConfigProvider implements ServiceProviderInterface
{
    /**
     * Property config.
     *
     * @var \Joomla\Registry\Registry
     */
    public $config;

    /**
     * @param Registry $config
     */
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
     *
     * @throws \Exception
     */
    public function register(Container $container)
    {
        $configFile = AC_ROOT_PATH . '/config/config.yml';

        if (!is_file($configFile))
        {
            throw new \Exception('config file not found, please copy config/config.dist.yml');
        }

        $this->config->loadFile($configFile, $format = 'YAML');

        $container->share('config', $this->config);
    }
}
 