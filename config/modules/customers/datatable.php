<?php

/**
 * Dx
 *
 * @link http://dennesabing.com
 * @author Dennes B Abing <dennes.b.abing@gmail.com>
 * @license proprietary
 * @copyright Copyright (c) 2015 ClaremontDesign/MadLabs-Dx
 * @version 0.0.0.1
 * @since Nov 7, 2015 1:25:03 PM
 * @file config.php
 * @project Cdbackend
 */
return [
	/**
	 * Collection of Widgets that this module is offered
	 * each widget is a content on itself.
	 * a datatable, a form, a button
	 * each is an instanceof /Widget/WidgetInterface
	 * AttributableInterface, ConfigurableInterface, AccessibleInterface, ViewableInterface,
	 * 		Modelable,
	 */
	'widgets' => [
		'customersData' => [
			/**
			 * The widget base route
			 * If module/action/task is given, route will be generated
			 * if url is given, will use URL instead
			 */
			'access' => 'admin',
			'enable' => true,
			'type' => 'datatable',
			'messages' => [
				'empty' => [
					'empty' => 'No data found.',
					'notfound' => 'Cannot find the record/s you are looking for. Kindly try again.'
				],
			],
			'config' => [
				'attributes' => [
					'recordName' => [
						'singular' => 'Customer',
						'plural' => 'Customers'
					],
				],
			],
			'toolbars' => [
				'topleft' => [
					'create' => [
						'enable' => true,
						'attributes' => [
							'label' => 'New Customer',
						],
						'url' => [
							'route' => [
								'name' => 'Module',
								'module' => MODULE_CUSTOMERS,
								'action' => 'create',
							],
						],
					],
				],
			],
			/**
			 * Datatable CRUD Setup
			 */
			'action' => [
				'enable' => true,
				'route' => [
					/**
					 * Route will be generated using the module settings
					 * each ACTION is an action of a module.
					 * each ACTION can also pass its own route setup
					 */
					'name' => 'Module',
					'module' => MODULE_CUSTOMERS
				],
				'create' => [
					'enable' => true,
					'attributes' => [
						'label' => 'New Customer',
					],
					'route' => [
						'name' => 'Module',
						'module' => MODULE_CUSTOMERS,
						'action' => 'create',
					],
				],
				'actions' => [
					'update' => [
						'enable' => true,
					],
					'delete' => [
						'enable' => true,
					],
					'view' => [
						'enable' => true,
					],
				],
			],
			/**
			 * Each is an instanceof /Widget/Datatable/ColumnInterface
			 * Columnnable, Attributable, Uitable, Htmlable
			 */
			'columns' => [
				'id' => [
					/**
					 * The name of DB tableColumn, if joint tables,
					 * 	include the DB column prefix
					 * default to columnIndex
					 */
					'enable' => true,
					'index' => cd_config('database.customers.table.primary'),
					'filter' => [
						'enable' => true,
						'index' => cd_config('database.customers.table.name') . '.' . cd_config('database.customers.table.primary')
					],
					'sort' => [
						'enable' => true,
						'index' => cd_config('database.customers.table.name') . '.' . cd_config('database.customers.table.primary')
					],
					/**
					 * Type of column
					 * The value that this column has to display
					 */
					'type' => 'integer',
					'attributes' => [
						'label' => 'ID',
					],
					/**
					 * Javascript Events
					 * Htmls attributes
					 * UI Actions,Events
					 */
					'ui' => [
						'html' => [
							'filterInput' => [
								'placeholder' => 'ID'
							],
						],
						'events' => [],
					],
				],
				'title' => [
					'index' => 'title',
					'type' => 'string',
					'attributes' => [
						'label' => 'Title',
					],
					'enable' => true,
					'ui' => [
						'html' => [
							'filterInput' => [
								'placeholder' => 'Search Title'
							],
						],
					],
					'sort' => [
						'enable' => true,
					],
					'filter' => [
						'enable' => true,
					],
				],
				'firstName' => [
					'index' => 'first_name',
					'type' => 'string',
					'attributes' => [
						'label' => 'First Name',
					],
					'enable' => true,
					'ui' => [
						'html' => [
							'filterInput' => [
								'placeholder' => 'Search First Name'
							],
						],
					],
					'sort' => [
						'enable' => true,
					],
					'filter' => [
						'enable' => true,
					],
				],
				'lastName' => [
					'index' => 'last_name',
					'type' => 'string',
					'attributes' => [
						'label' => 'Last Name',
					],
					'enable' => true,
					'ui' => [
						'html' => [
							'filterInput' => [
								'placeholder' => 'Search Last Name'
							],
						],
					],
					'sort' => [
						'enable' => true,
					],
					'filter' => [
						'enable' => true,
					],
				],
				'gender' => [
					'index' => 'gender',
					'type' => 'string',
					'attributes' => [
						'label' => 'Gender',
					],
					'enable' => true,
					'ui' => [
						'html' => [
							'filterInput' => [
								'placeholder' => 'Search Gender'
							],
						],
					],
					'sort' => [
						'enable' => true,
					],
					'filter' => [
						'enable' => true,
					],
				],
				'email' => [
					'index' => 'email_address',
					'type' => 'string',
					'attributes' => [
						'label' => 'Email Address',
					],
					'enable' => true,
					'ui' => [
						'html' => [
							'filterInput' => [
								'placeholder' => 'Search Email address'
							],
						],
					],
					'sort' => [
						'enable' => true,
					],
					'filter' => [
						'enable' => true,
					],
				],
				'created' => [
					'index' => 'created_at',
					'type' => 'datetime',
					'enable' => true,
					'attributes' => [
						'label' => 'Date Created',
					],
					'filter' => [
						'enable' => true,
						'index' => cd_config('database.customers.table.name') . '.created_at'
					],
					'sort' => [
						'enable' => true,
					],
				],
				'updated' => [
					'enable' => false,
					'type' => 'datetime',
					'index' => 'updated_at',
					'attributes' => [
						'label' => 'Last Update',
					],
					'sort' => [
						'enable' => true,
					],
					'filter' => [
						'enable' => true,
					],
				],
			],
			'model' => [
				/**
				 * value to pass from page to page, default to model primary key
				 */
				'value' => [
					'index' => cd_config('database.customers.table.primary')
				],
				'class' => cd_config('database.customers.model.class'),
				'repository' => [
					/**
					 * Default sorting
					 */
					'sort' => ['id' => 'desc'],
					/**
					 * Records to view per page
					 */
					'rowsPerPage' => 20,
					'class' => cd_config('database.customers.repository.class')
				],
			],
		]
	],
];
