<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2015 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Controller;


use Achiever\Achiever\Model\ACModel;
use Achiever\Achiever\View\ACHtmlView;
use Joomla\Controller\AbstractController;
use Windwalker\Data\Data;

class IndexController extends AbstractController
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
		$model = new ACModel;

		$view = new ACHtmlView(new Data(['Name' => 'Jack']));

		$view->render();
	}
}
 