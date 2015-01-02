<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2015 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Controller;


use Achiever\Achiever\Controller\ACController;
use Achiever\Achiever\Model\ACModel;
use Achiever\Achiever\View\ACHtmlView;
use Achiever\View\IndexHtmlView;
use Windwalker\Data\Data;

class IndexController extends ACController
{

	/**
	 * Execute the controller.
	 *
	 * @return  boolean  True if controller finished execution, false if the controller did not
	 *                   finish execution. A controller might return false if some precondition for
	 *                   the controller to run has not been satisfied.
	 *
	 * @since   1.0
	 * @throws  \LogicException
	 * @throws  \RuntimeException
	 */
	public function execute()
	{
		/** @var \Achiever\Achiever\Model\ACModel $model */
		//$model = new ACModel($this->container->get('db'));

		$testData = new Data(['name' => 'jack']);

		$paths = new \SplPriorityQueue;

		// Insert template roots and load priority (with number)
		$paths->insert(AC_TEMPLATE_ROOT_PATH . '/_global', 128);

		$view = new IndexHtmlView($testData, $paths);

		// This is important, don't forget to echo the rendered output
		echo $view->setLayout('default')->render();
	}
}
 