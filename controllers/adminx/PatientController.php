<?php
/**
 * PatientController
 * @var $this PatientController
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

class PatientController extends Controller
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
				'actions'=>array('index','add','profile','invoice'),
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
		$this->pageTitle = Yii::t('phrase', 'All Patients');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/patient/front_index');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionAdd()
	{
		$this->pageTitle = Yii::t('phrase', 'Add Patient');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/patient/front_add');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionProfile()
	{
		$this->pageTitle = Yii::t('phrase', 'Patient Profile');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/patient/front_profile');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionInvoice()
	{
		$this->pageTitle = Yii::t('phrase', 'Invoice');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/patient/front_invoice');
	}
}