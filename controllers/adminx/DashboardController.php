<?php
/**
 * DashboardController
 * @var $this DashboardController
 * Reference start
 *
 * TOC :
 *	Index
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 *----------------------------------------------------------------------------------------------------------
 */

class DashboardController extends Controller
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
				'actions'=>array('index','rtl'),
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
		$this->pageTitle = Yii::t('phrase', 'Dashboard');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/dashboard/front_index');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionRtl()
	{
		$this->pageTitle = Yii::t('phrase', 'لوحة القيادة (Dashboard)');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/dashboard/front_rtl');
	}
}