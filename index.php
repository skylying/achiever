<?php
/**
 * Part of achiever project.
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

include_once __DIR__ . '/vendor/autoload.php';
include_once __DIR__ . '/php/methods.php';

define('AC_ROOT_PATH', realpath(__DIR__));
define('AC_ETC_PATH', realpath(__DIR__ . '/etc'));



(new Achiever\Application\Application)->execute();
