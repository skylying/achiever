<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Achiever\Model;


use Achiever\Helper\ContainerHelper;
use Joomla\Model\AbstractModel;
use Joomla\Registry\Registry;

/**
 * Class ACModel
 *
 * @since 1.0
 */
class ACModel extends AbstractModel
{
	/**
	 * Property db.
	 *
	 * @var
	 */
	protected $db;

	/**
	 * Constructor
	 *
	 * @param  $db
	 * @param Registry $state
	 */
	public function __construct($db = null, Registry $state = null)
	{
		$this->db = $db ? : $this->getDb();

		parent::__construct($state);
	}

	/**
	 * getDb
	 *
	 * @return  Registry
	 */
	public function getDb()
	{
		return $this->db;
	}

	/**
	 * setDb
	 *
	 * @param $db
	 *
	 * @return  ACModel
	 */
	public function setDb($db)
	{
		$this->db = $db;

		return $this;
	}
}
 