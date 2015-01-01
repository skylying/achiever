<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\View\Exercise;


use Joomla\View\AbstractView;

class HtmlView extends AbstractView
{

    /**
     * Method to render the view.
     *
     * @return  string  The rendered view.
     *
     * @since   1.0
     * @throws  \RuntimeException
     */
    public function render()
    {
        echo '<h1>Exercise View</h1>';

		show($this->model);

        /*$input = $this->getInput();

        echo sprintf('ID: %s', $input->getInt('id'));
        echo '<br>';
        echo sprintf('alias: %s', $input->get('alias'));*/

    }
}
 