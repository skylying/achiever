<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Application;

use Achiever\Controller\Exercising\DisplayController;
use Achiever\Provider\ApplicationProvider;
use Achiever\Provider\ConfigProvider;
use Achiever\Provider\JoggingProvider;
use Achiever\Provider\RouterProvider;
use Achiever\Provider\WhoopsProvider;
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
        $controller = $this->getController();

        $controller->execute();
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
            ->registerServiceProvider(new RouterProvider($this));

    }

    public function getController()
    {
        $controller = new DisplayController($this->input, $this);

        return $controller;
    }
}
 