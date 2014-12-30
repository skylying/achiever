<?php
/**
 * Part of achiever project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 Achiever, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Achiever\Helper;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\Yaml\Yaml;

/**
 * Class ConfigHelper, http://symfony.com/pdf/Symfony_components_2.6.pdf?v=4 , page 20
 *
 * @since 1.0
 */
class ConfigHelper
{
	/**
	 * Load config.yml
	 *
	 * @return  array
	 */
    public static function loadConfig()
    {
		$configDirectory = array(AC_ROOT_PATH . '/config');

        $locator = new FileLocator($configDirectory);

        // Use first file config.yml
        $yamlConfigFiles = $locator->locate('config.yml', null, true);

        return Yaml::parse($yamlConfigFiles);
    }
}
