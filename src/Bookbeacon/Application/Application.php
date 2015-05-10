<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace BookBeacon\Application;

use BookBeacon\Provider\ApplicationProvider;
use BookBeacon\Provider\ConfigProvider;
use BookBeacon\Provider\DatabaseProvider;
use BookBeacon\Provider\JoggingProvider;
use BookBeacon\Provider\RouterProvider;
use BookBeacon\Provider\WhoopsProvider;
use Joomla\Application\AbstractWebApplication;
use Joomla\Application\Web;
use Joomla\DI\Container;
use Joomla\Input\Input;
use Joomla\Registry\Registry;

class Application extends AbstractWebApplication
{
    /**
     * Property container.
     *
     * @var  \Joomla\DI\Container
     */
    public $container;

    /**
     * @param Input         $input
     * @param Registry      $config
     * @param Web\WebClient $client
     */
    public function __construct(Input $input = null, Registry $config = null, Web\WebClient $client = null)
    {
        $this->container = new Container;

        parent::__construct($input, $config, $client);

        $this->init();
    }

    /**
     * Method to run the application routines.  Most likely you will want to instantiate a controller
     * and execute it, or perform some sort of task directly.
     *
     * @return  void
     *
     * @since   1.0
     */
    protected function doExecute()
    {
		/** @var \BookBeacon\BookBeacon\Controller\BBController $controller */
        $controller = $this->getController();

		$controller->setContainer($this->container)
			->setApplication($this)
			->execute();
    }

    /**
     * init
     *
     * @return  void
     */
    protected function init()
    {
        $this->container->registerServiceProvider(new ConfigProvider($this->config));

        define('AC_DEBUG', $this->get('system.debug'));

        $this->container
            ->registerServiceProvider(new ApplicationProvider($this))
            ->registerServiceProvider(new WhoopsProvider)
            ->registerServiceProvider(new JoggingProvider($this->config))
            ->registerServiceProvider(new RouterProvider($this))
            ->registerServiceProvider(new DatabaseProvider($this->config));
    }

	/**
	 * getController
	 *
	 * @return  \Joomla\Controller\ControllerInterface
	 */
    public function getController()
    {
        /** @var \Joomla\Router\RestRouter $router */
        $router = $this->container->get('router');

        // Set default controller
        $router->setDefaultController('BookBeacon\\Controller\\IndexController');
		// Tim: 路徑全寫在 routing.json 比較清楚
        //$router->setControllerPrefix('Achiever\\Controller\\');

        // Use pre-set uri.route in config
        $route = $this->config->get('uri.route');

        // Make sure no index.php/
        $urlRoute = str_replace('index.php/', '', $route);

        return $router->getController($urlRoute);
    }
}
 