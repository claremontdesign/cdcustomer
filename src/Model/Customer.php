<?php

namespace Claremontdesign\Cdcustomer\Model;

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
use Claremontdesign\Cdbase\Repository\Contracts\FilterableInterface;
use Claremontdesign\Cdbase\Repository\Contracts\JoinableInterface;
use Claremontdesign\Cdbase\Repository\Contracts\SortableInterface;
use Claremontdesign\Cdbase\Repository\Traits\Filterable;
use Claremontdesign\Cdbase\Repository\Traits\Joinable;
use Claremontdesign\Cdbase\Repository\Traits\Sortable;
use Claremontdesign\Cdbase\Model\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Claremontdesign\Cdbase\Widgets\ModelInterface as WidgetModelInterface;
use Claremontdesign\Cdbase\Widgets\WidgetTypes\WidgetTypeInterface;

class Customer extends Model implements WidgetModelInterface, FilterableInterface, JoinableInterface, SortableInterface
{

	use SoftDeletes,
	 Filterable,
	 Joinable,
	 Sortable;

	// <editor-fold defaultstate="collapsed" desc="Laravel">
	/**
	 * The primary key for the model.
	 *
	 * @var string
	 */
	protected $primaryKey = null;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = null;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	// </editor-fold>

	/**
	 * Create a new Eloquent model instance.
	 *
	 * @param  array  $attributes
	 * @return void
	 */
	public function __construct(array $attributes = [])
	{
		$this->table = cd_config('database.customers.table.name');
		$this->primaryKey = cd_config('database.customers.table.primary');
		$this->fillable = cd_config('database.customers.model.fillable');
		parent::__construct($attributes);
	}

	/**
	 * Return the gender
	 * @param type $value
	 * @return type
	 */
	public function getGenderAttribute($value)
	{
		if($value == 'f')
		{
			return 'Female';
		}
		return 'Male';
	}

	/**
	 * Customer Name
	 */
	public function name()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	// <editor-fold defaultstate="collapsed" desc="WIDGET">
	/**
	 * Check widget access
	 * @return boolean
	 */
	public function checkWidgetAccess(WidgetTypeInterface $widget, $crud, $access = null)
	{
		return true;
	}

	/**
	 *
	 * @param \Claremontdesign\Cdbase\Widgets\WidgetTypes\WidgetTypeInterface $widget
	 * @param type $crud
	 * @param type $data
	 */
	public function widgetPreProcess(WidgetTypeInterface $widget, $crud, $modelId, $data)
	{

	}

	/**
	 *
	 * @param \Claremontdesign\Cdbase\Widgets\WidgetTypes\WidgetTypeInterface $widget
	 * @param type $crud
	 * @param type $data
	 */
	public function widgetPostProcess(WidgetTypeInterface $widget, $crud, $modelId, $data, $result)
	{

	}

	// </editor-fold>

	/**
	 * Fix array values to column values
	 * 	Map the given values to column values
	 * @param  array $assocArray [description]
	 * @return array
	 */
	public function fixValueToColumnValue($assocArray, $mode = null)
	{
		if(!empty($assocArray['gender']))
		{
			if(strtolower($assocArray['gender']) == 'female')
			{
				$assocArray['gender'] = 'f';
			}
			else
			{
				$assocArray['gender'] = 'm';
			}
		}
		return $assocArray;
	}

}
