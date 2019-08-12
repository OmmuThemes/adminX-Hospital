<?php
/**
 * AppointmentController
 * @var $this AppointmentController
 * Reference start
 *
 * TOC :
 *	Index
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 *----------------------------------------------------------------------------------------------------------
 */

class AppointmentController extends Controller
{
	/**
	 * Initialize public template
	 */
	public function init() 
	{
		Yii::app()->theme = 'adminx-hospital';
		$this->layout = 'main';
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() 
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','schedule','book'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * Displays the login page
	 */
	public function actionIndex()
	{
		$this->redirect(Yii::app()->controller->createUrl('schedule'));
	}
	
	/**
	 * Displays the login page
	 */
	public function actionSchedule()
	{
		$this->pageTitle = Yii::t('phrase', 'Doctor Schedule');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/appointment/front_schedule');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionBook()
	{
		$this->pageTitle = Yii::t('phrase', 'Book Appointment');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/appointment/front_book');
	}
}