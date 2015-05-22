<?php
/**
 * Part of BookBeacon project.
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

include_once __DIR__ . '/vendor/autoload.php';

define('BB_ROOT_PATH', realpath(__DIR__));
define('BB_ETC_PATH', BB_ROOT_PATH . '/etc');
define('BB_TEMPLATE_ROOT_PATH', BB_ROOT_PATH . '/template');

// For joomla view required
define('JPATH_ROOT', BB_TEMPLATE_ROOT_PATH);

//define('AC_TEMPLATE')



(new BookBeacon\Application\Application)->execute();
