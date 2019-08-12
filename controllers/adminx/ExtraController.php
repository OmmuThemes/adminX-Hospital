<?php
/**
 * ExtraController
 * @var $this ExtraController
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

class ExtraController extends Controller
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
				'actions'=>array('index','search','chat'),
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
		$this->redirect(Yii::app()->controller->createUrl('search'));
	}
	
	/**
	 * Displays the login page
	 */
	public function actionSearch()
	{
		$this->pageTitle = Yii::t('phrase', 'Search Results');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/extra/front_search');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionChat()
	{
		$this->pageTitle = Yii::t('phrase', 'Chats');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/extra/front_chat');
	}
}