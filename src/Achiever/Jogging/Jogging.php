<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Jogging;


use Joomla\Registry\Registry;

class Jogging
{
    /**
     * Property config.
     *
     * @var \Joomla\Registry\Registry
     */
    public $config;

    /**
     * @param Registry $config
     */
    public function __construct(Registry $config = null)
    {
        $this->config = $config ? : new Registry;
    }

    public function run()
    {

        return 'I will run to ' . $this->config->get('where');

    }
}
 