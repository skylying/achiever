<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Helper;


use Joomla\DI\Container;

class ContainerHelper
{
	/**
	 * Property instance.
	 *
	 * @var
	 */
	protected static $instance;

	/**
	 * __callStatic, 如果呼叫了 Container 裡面不存在的 function, 會從塞進去的 $instance 找這個方法
	 *
	 * @param $name
	 * @param $arguments
	 *
	 * @return  mixed
	 */
	public static function __callStatic($name, $arguments)
	{
		$container = static::getContainer();

		return call_user_func_array(array($container, $name), $arguments);
	}

	/**
	 * getContainer
	 *
	 * @return  mixed
	 */
	public static function getContainer()
	{
		if (!static::$instance)
		{
			static::$instance = new Container();
		}

		return static::$instance;
	}

	/**
	 * setContainer
	 *
	 * @param $container
	 *
	 * @return  void
	 */
	protected static function setContainer($container)
	{
		static::$instance = $container;
	}

}
 