<?php
/**
 * @var $this SiteController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 28 November 2017, 15:07 WIB
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */
	
	$configTheme = Yii::app()->controller->themeSetting;

	if(Yii::app()->user->isGuest)
		$this->redirect(array('site/login'));

	$redirect = $configTheme['site-controller']['redirect']['rules'];
	if($redirect != null)
		$this->redirect($redirect);

	$this->breadcrumbs=array(
		'Main',
	);
	$this->pageTitle = Yii::t('phrase', 'Main');
	$this->pageDescription = '';
?>