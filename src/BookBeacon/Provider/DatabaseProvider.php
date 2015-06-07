<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace BookBeacon\Provider;


use Joomla\Registry\Registry;
use Windwalker\Database\DatabaseFactory;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Windwalker\DataMapper\Adapter\DatabaseAdapter;
use Windwalker\DataMapper\Adapter\WindwalkerAdapter;

class DatabaseProvider implements ServiceProviderInterface
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
        $closure = function($container)
        {
			$dbConfig = $this->config->get('database');

            $options = array(
                'driver'   => $dbConfig->driver,
				'name'     => $dbConfig->name,
                'host'     => $dbConfig->host,
                'user'     => $dbConfig->user,
                'password' => $dbConfig->password,
            );

            $db = DatabaseFactory::getDbo('mysql', $options);

			// Set adapter
			DatabaseAdapter::setInstance(new WindwalkerAdapter($db));

			// bug, 不知道修好沒
			$db->select($dbConfig->name);

			return $db;
        };

		$container->share('db', $closure);
    }
}
 