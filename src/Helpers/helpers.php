<?php

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
if(!function_exists('cd_customer'))
{

	function cd_customer()
	{
		return app('cdcustomer');
	}

}
if(!function_exists('cd_customer_tag'))
{

	/**
	 * Return this packge tag
	 * @return string
	 */
	function cd_customer_tag()
	{
		return 'cdcustomer';
	}

}
if(!function_exists('cd_customer_view_name'))
{

	/**
	 * Return this package view name
	 * view(cd_customer_view_name('view-name')) = nhr::view-name
	 * @param string $view The View Name
	 * @return string
	 */
	function cd_customer_view_name($view)
	{
		return cd_customer_tag() . '::' . $view;
	}

}

