<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Achiever\Model;


use Joomla\Model\AbstractModel;
use Joomla\Registry\Registry;

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
	 * @param Registry $db
	 * @param Registry $state
	 */
	public function __construct($db, Registry $state = null)
	{
		$this->db = $db;

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
 