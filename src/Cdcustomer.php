<?php

namespace Claremontdesign\Cdcustomer;

/**
 * Dx
 *
 * @link http://dennesabing.com
 * @author Dennes B Abing <dennes.b.abing@gmail.com>
 * @license proprietary
 * @copyright Copyright (c) 2015 ClaremontDesign/MadLabs-Dx
 * @version 0.0.0.1
 * @since Nov 27, 2015 1:43:45 PM
 * @file routes.php
 * @project Claremontdesign
 * @package Cdcustomer
 */
use Claremontdesign\Cdbase\Cdbase;
use Claremontdesign\Cdbase\Traits\Repository;

class Cdcustomer extends Cdbase
{

	use Repository;

	/**
	 * Return the configuration file
	 */
	public function config()
	{
		return [
			__DIR__ . '/../config/config.php'
		];
	}

}
