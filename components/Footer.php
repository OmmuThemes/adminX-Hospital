<?php
/**
 * Footer
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

class Footer extends CWidget
{
	public function init() {
	}

	public function run() {
		$this->renderContent();
	}

	protected function renderContent() {
		$module = strtolower(Yii::app()->controller->module->id);
		$controller = strtolower(Yii::app()->controller->id);
		$action = strtolower(Yii::app()->controller->action->id);
		$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
		$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
		$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);

		$condition = 0;
		$theme = OmmuThemes::model()->findByAttributes(array(
			'folder'=>Yii::app()->theme->name,
		));
		$configTheme = unserialize($theme->config);
		if($theme != null && !empty($configTheme) && is_array($configTheme))
			$condition = 1;

		$setting = OmmuSettings::model()->findByPk(1, array(
			'select' => 'site_title, site_description',
		));

		$this->render('footer',array(
			'condition'=>$condition,
			'configTheme'=>$configTheme,
			'setting'=>$setting,
			'module'=>$module,
			'controller'=>$controller,
			'action'=>$action,
			'currentAction'=>$currentAction,
			'currentModule'=>$currentModule,
			'currentModuleAction'=>$currentModuleAction,
		));
	}
}
