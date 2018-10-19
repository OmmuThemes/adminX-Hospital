<?php
/**
 * DoctorController
 * @var $this DoctorController
 * Reference start
 *
 * TOC :
 *	Index
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 *----------------------------------------------------------------------------------------------------------
 */

class DoctorController extends Controller
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
				'actions'=>array('index','add','profile'),
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
		$this->pageTitle = Yii::t('phrase', 'All Doctors');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/doctor/front_index');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionAdd()
	{
		$this->pageTitle = Yii::t('phrase', 'Add Doctor');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/doctor/front_add');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionProfile()
	{
		$this->pageTitle = Yii::t('phrase', 'Profile');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/doctor/front_profile');
	}
}