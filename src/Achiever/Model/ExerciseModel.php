<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Model;

use Windwalker\DataMapper\DataMapper;
use Achiever\Achiever\Model\ACModel;

class ExerciseModel extends ACModel
{
	/**
	 * Property db.
	 *
	 * @var \Windwalker\Database\Driver\DatabaseDriver $db
	 **/
	protected $db;

	/**
	 * getItem
	 *
	 * @param int $pk
	 *
	 * @return  mixed
	 */
	public function getItem($pk = 1)
	{
		$db = $this->db;

		$query = $db->getQuery(true);

		$query->select('*')
			->from('users')
			->where('id = ' . $pk);

		return $db->setQuery($query)->loadOne();
	}
}
 