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
		'customersForm' => [
			'enable' => true,
			'type' => 'form',
			'access' => 'admin',
			'request' => [
				/**
				 * The Request Index
				 * the index of requests/inputs to check for recordId
				 */
				'index' => 'record',
				/**
				 * Allow multiple forms/records to be manipulated
				 * @TODO, currently true
				 */
				'multiple' => true
			],
			'attributes' => [
				'recordName' => [
					'singular' => 'Customer',
					'plural' => 'Customers'
				],
			],
			'form' => [
				'messages' => [
					'empty' => 'No data found.',
					'notfound' => 'Cannot find the record/s you are looking for. Kindly try again.'
				],
				'ui' => [
					'html' => [
						'form' => []
					],
				],
				// text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color, static
				'fieldsets' => [
				],
				'tabs' => [
				],
				'actions' => [
					'submit' => [
						'type' => 'submit',
						'enable' => true,
						'ui' => [
							'html' => [
								'input' => []
							],
						],
						'attributes' => [
							'label' => 'Submit',
						],
					],
					'confirm' => [
						'enable' => false,
						'type' => 'confirm',
						'ui' => [
							'html' => [
								'input' => []
							],
						],
						'attributes' => [
							'label' => 'Confirm',
						],
					],
					'cancel' => [
						'enable' => true,
						'type' => 'cancel',
						'ui' => [
							'tag' => 'a',
							'url' => [
								'route' => [
									'name' => 'Module',
									'module' => MODULE_CUSTOMERS,
								]
							],
							'html' => [
								'input' => []
							],
						],
						'attributes' => [
							'label' => 'Cancel',
						],
					],
				],
				'elements' => [
					'title' => [
						'enable' => true,
						'select' => [
							'empty' => [
								'enable' => true,
							],
							'options' => [
								'options' => 'persontitle',
							]
						],
						'model' => [
							'value' => [
								'index' => 'title',
							],
						],
						'type' => 'select',
						'position' => 20,
						'attributes' => [
							'label' => 'Title',
							'placeholder' => 'Title'
						],
						'validation' => [
							'required' => [
								'enable' => false,
								'message' => 'Title.'
							],
						],
					],
					'firstName' => [
						'enable' => true,
						'model' => [
							'value' => [
								'index' => 'first_name',
							],
						],
						'type' => 'text',
						'position' => 20,
						'attributes' => [
							'label' => 'First Name',
							'placeholder' => 'First Name'
						],
						'validation' => [
							'required' => [
								'enable' => true,
								'message' => 'First Name is required.'
							],
						],
					],
					'lastName' => [
						'enable' => true,
						'model' => [
							'value' => [
								'index' => 'last_name',
							],
						],
						'type' => 'text',
						'position' => 19,
						'attributes' => [
							'label' => 'Last Name',
							'placeholder' => 'Last Name'
						],
						'validation' => [
							'required' => [
								'enable' => true,
								'message' => 'Last Name is required.'
							],
						],
					],
					'email' => [
						'enable' => true,
						'model' => [
							'value' => [
								'index' => 'email_address',
							],
						],
						'type' => 'email',
						'position' => 19,
						'attributes' => [
							'label' => 'Email Address',
							'placeholder' => 'Email Address'
						],
						'validation' => [
							'required' => [
								'enable' => true,
								'message' => 'Email address is required.'
							],
							'email' => [
								'enable' => true
							],
						],
					],
					'gender' => [
						'enable' => true,
						'model' => [
							'value' => [
								'index' => 'gender',
							],
						],
						'type' => 'select',
						'select' => [
							'empty' => [
								'enable' => true,
							],
							'options' => [
								'options' => 'gender'
							]
						],
						'position' => 20,
						'attributes' => [
							'label' => 'Gender',
							'placeholder' => 'Gender'
						],
						'validation' => [
							'required' => [
								'enable' => true,
								'message' => 'Kindly select a gender.'
							],
						],
					],
				],
			],
			'model' => [
				'value' => [
					/**
					 * The property/method of the model
					 * 	to use extract the value that will be passed from page to page
					 * @see WidgetType\Form::valueIndex()
					 */
					'index' => 'id'
				],
				'class' => cd_config('database.customers.model.class'),
				'repository' => [
					'class' => cd_config('database.customers.repository.class'),
					/**
					 * The table.columnName that will be used
					 * to query database
					 * @see WidgetType\Form::modelIndex()
					 */
					'index' => cd_config('database.customers.table.name') . '.' . cd_config('database.customers.table.primary'),
				],
				'crud' => [
					'duplicate' => [
						'enable' => false					],
					'create' => [
						'enable' => true,
						'type' => 'create',
						'crud' => [
							'type' => 'crud',
							'enable' => true,
						],
						'success' => [
							/**
							 * Redirec to route
							 */
							'redirect' => [
								'enable' => true,
								'route' => [
									'name' => 'Module',
									'module' => MODULE_CUSTOMERS
								]
							],
							'back' => [],
							'message' => 'Created successfull!'
						],
					],
					'update' => [
						'enable' => true,
						'type' => 'update',
						'success' => [
							'route' => [],
							'message' => 'Update successfull!'
						],
						'crud' => [
							'type' => 'crud',
							'enable' => true,
							'ui' => [
								'tag' => 'a',
								'url' => [
									'route' => [
										'name' => 'Module',
										'module' => MODULE_CUSTOMERS,
										'action' => 'update'
									]
								],
								'html' => [
									'input' => []
								],
							],
							'attributes' => [
								'label' => 'Update',
							],
						],
					],
					'view' => [
						'enable' => true,
						'type' => 'view',
						/**
						 * @see WidgetType\Form::_actions()
						 */
						'actions' => ['update', 'delete']
					],
					'delete' => [
						'enable' => true,
						'type' => 'delete',
						/**
						 * Crud settings
						 * When a record is viewed (@see crud.view),
						 * action anchors can be displayed as actions for that record.
						 * if this crud is in the list of actions (@see crud.view.actions),
						 * this will be the settings that will be used
						 * This settings is also used to check role for data access
						 * @see Widget\ModelInterface
						 * @see WidgetType\Form::_actions()
						 */
						'crud' => [
							'type' => 'crud',
							'enable' => true,
							'ui' => [
								'tag' => 'a',
								'url' => [
									'route' => [
										'name' => 'Module',
										'module' => MODULE_CUSTOMERS,
										'action' => 'delete'
									]
								],
								'html' => [
									'input' => []
								],
							],
							'attributes' => [
								'label' => 'Delete',
							],
						],
						'view' => [
							/**
							 * Template to use to load this form
							 * when CrudAction == delete
							 * @see WidgetType\Form::getForm()
							 */
							'form' => [
								'enable' => false,
								'path' => 'form.index',
								/**
								 * render template before form tag
								 */
								'pre' => [],
								/**
								 * render template after form tag
								 */
								'post' => [],
							],
						],
						/**
						 * After success action configuration
						 */
						'success' => [
							'redirect' => [
								'enable' => true,
								'route' => [
									'name' => 'Module',
									'module' => MODULE_CUSTOMERS
								]
							],
							'message' => 'Delete successfull!'
						],
					],
				],
			],
		],
	],
];
