<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2015 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace BookBeacon\BookBeacon\View;


use Joomla\Model\ModelInterface;
use Joomla\View\AbstractHtmlView;
use Windwalker\Data\Data;

/**
 * Class BBHtmlView
 *
 * @since 1.0
 */
class BBHtmlView extends AbstractHtmlView
{
	/**
	 * Property data.
	 *
	 * @var \Windwalker\Data\Data
	 */
	protected $data;

	/**
	 * Property renderer.
	 *
	 * @var  \Twig_Environment
	 */
	public $renderer;

	/**
	 * @param Data $data
	 */
	public function __construct(Data $data)
	{
		$this->data = ($data instanceof Data) ? $data : new Data($data);

		$loader = new \Twig_Loader_Filesystem(BB_TEMPLATE_ROOT_PATH);
		$this->renderer = new \Twig_Environment($loader);

		$this->addGlobals();
	}

	/**
	 * render
	 *
	 * @return  string|void
	 */
	public function render()
	{
		return $this->renderer->render($this->getLayout(), iterator_to_array($this->data));
	}

	/**
	 * Method to bind global variables to twig template
	 *
	 * @return  void
	 */
	public function addGlobals()
	{
		// TODO: 暫時寫死, 日後要有更完善的 Uri 處理機制
		$this->renderer->addGlobal('baseUri', "/bookbeacon/");
	}

	/**
	 * getDataByKey
	 *
	 * @param $key
	 * @param $default
	 *
	 * @return  mixed
	 */
	public function getDataByKey($key, $default)
	{
		return isset($this->data[$key]) ? $this->data[$key] : $default;
	}

	/**
	 * setDataByKey
	 *
	 * @param $key
	 * @param $value
	 *
	 * @return  $this
	 */
	public function setDataByKey($key, $value)
	{
		$this->data[$key] = $value;

		return $this;
	}

	/**
	 * getData
	 *
	 * @return  Data
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * setData
	 *
	 * @param $data
	 *
	 * @return  $this
	 */
	public function setData($data)
	{
		$this->data = $data;

		return $this;
	}

}
 