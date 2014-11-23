<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Application;


use Achiever\Jogging\Jogging;
use Joomla\Application\AbstractWebApplication;
use Joomla\Application\Web;
use Joomla\DI\Container;
use Joomla\Input\Input;
use Joomla\Registry\Registry;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

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
        /** @var \Achiever\Jogging\Jogging $jogging */
        $jogging = $this->container->get('achiever.jogging');

        echo $jogging->run();
    }

    /**
     * init
     *
     * @return  void
     */
    protected function init()
    {
        $this->loadConfig();

        define('AC_DEBUG', $this->get('system.debug'));

        if (AC_DEBUG)
        {
            $whoops = new Run;
            $whoops->pushHandler(new PrettyPageHandler);
            $whoops->register();
        }

        $this->container->share('app', $this);
        $this->container->share('config', $this->config);
        $this->container->share('whoops', $whoops);
        $this->container->share('achiever.jogging', new Jogging);
    }

    /**
     * loadConfig
     *
     * @return  void
     *
     * @throws \Exception
     */
    protected function loadConfig()
    {
        $configFile = AC_ETC_PATH . '/config.json';

        if (!is_file($configFile))
        {
            throw new \Exception('config file not found, please copy etc/config.dist.json');
        }

        $this->config->loadFile($configFile);
    }
}
 