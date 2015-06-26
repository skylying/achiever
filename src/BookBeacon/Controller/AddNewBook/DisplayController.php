<?php
/**
 * Part of Bookbeacon project. 
 *
 * @copyright  Copyright (C) 2011 - 2015 Bookbeacon, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace BookBeacon\Controller\AddNewBook;


use Bookbeacon\Bookbeacon\Controller\BBController;
use BookBeacon\View\AddNewBook\AddNewBookHtmlView;
use Windwalker\Data\Data;

class DisplayController extends BBController
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
		// Use this to get input value in url
		//show($this->getInput()->get('id'));
		$data = new Data(array('name' => 'Jack'));

		$view = new AddNewBookHtmlView($data);

		echo $view->setLayout('addNewBook/addNewBook.twig')->render();
	}
}
