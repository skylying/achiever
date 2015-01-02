<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2015 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Achiever\Controller;


use Joomla\Application\AbstractWebApplication;
use Joomla\Controller\AbstractController;
use Joomla\DI\Container;
use Joomla\DI\ContainerAwareInterface;
use Joomla\Input\Input;

abstract class ACController extends AbstractController implements ContainerAwareInterface
{
	/**
	 * Property container.
	 *
	 * @var \Joomla\DI\Container
	 */
	protected $container;

	/**
	 * Property input.
	 *
	 * @var \Joomla\Input\Input
	 */
	public $input;

	/**
	 * Property app.
	 *
	 * @var \Joomla\Application\AbstractWebApplication
	 */
	public $app;

	/**
	 * Constructor
	 *
	 * @param Input                  $input
	 * @param AbstractWebApplication $app
	 * @param Container              $container
	 */
	public function __construct(Input $input = null, AbstractWebApplication $app = null, Container $container = null)
	{
		$this->container = $container ? : new Container;

		parent::__construct($input, $app);
	}

	/**
	 * Get the DI container.
	 *
	 * @return  Container
	 *
	 * @since   1.0
	 *
	 * @throws  \UnexpectedValueException May be thrown if the container has not been set.
	 */
	public function getContainer()
	{
		return $this->container;
	}

	/**
	 * Set the DI container.
	 *
	 * @param   Container $container The DI container.
	 *
	 * @return  mixed
	 *
	 * @since   1.0
	 */
	public function setContainer(Container $container)
	{
		$this->container = $container;

		return $this;
	}

	/**
	 * redirect
	 *
	 * @param $url
	 *
	 * @return  void
	 */
	public function redirect($url)
	{
		$this->app->redirect($url);
	}
}
 