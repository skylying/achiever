<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Provider;

use Achiever\Helper\ConfigHelper;
use Windwalker\Database\DatabaseFactory;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Windwalker\DataMapper\Adapter\DatabaseAdapter;
use Windwalker\DataMapper\Adapter\WindwalkerAdapter;

class DatabaseProvider implements ServiceProviderInterface
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
        $closure = function($container)
        {
			$dbConfig = ConfigHelper::loadConfig();

            $options = array(
                'driver'   => $dbConfig['database']['driver'],
				'name'     => $dbConfig['database']['name'],
                'host'     => $dbConfig['database']['host'],
                'user'     => $dbConfig['database']['user'],
                'password' => $dbConfig['database']['password'],
            );

            $db = DatabaseFactory::getDbo('mysql', $options);

			// Set adapter
			DatabaseAdapter::setInstance(new WindwalkerAdapter($db));

			// bug, 不知道修好沒
			$db->select($dbConfig['database']['name']);

			return $db;
        };

		$container->share('db', $closure);
    }
}
 