<?php
/**
 * MenuContent
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

class MenuContent extends CWidget
{
	public $menus;

	public function init() {
	}

	public function run() {
		$this->renderContent();
	}

	protected function renderContent() 
	{
		$module = strtolower(Yii::app()->controller->module->id);
		$controller = strtolower(Yii::app()->controller->id);
		$action = strtolower(Yii::app()->controller->action->id);
		$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
		$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
		$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
		
		$plugin = Yii::app()->getRequest()->getParam('plugin');
		if(isset($plugin))
			$menus = Utility::getContentMenu($plugin, $module);
		else
			$menus = Utility::getContentMenu($module);
		
		$this->render('menu_content', array(
			'plugin'=>$plugin,
			'menus'=>$menus,
			'module'=>$module,
			'controller'=>$controller,
			'action'=>$action,
			'currentAction'=>$currentAction,
			'currentModule'=>$currentModule,
			'currentModuleAction'=>$currentModuleAction,
		));
	}

	public function generateMenu($menus, $sub=false)
	{
		$module = strtolower(Yii::app()->controller->module->id);
		$controller = strtolower(Yii::app()->controller->id);
		$action = strtolower(Yii::app()->controller->action->id);
		$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
		$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
		$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);

		if($menus != null) {
			echo $sub == false ? '<ul class="left">' : '<ul>';
			foreach ($menus as $key => $val) {
				$submenu = $val['submenu'];

				$arrAttrParams = array();
				if($val['urlPath']['attr'] != null && $val['urlPath']['attr'] != '-') {
					$arrAttr = explode(',', $val['urlPath']['attr']);
					if(count($arrAttr) > 0) {
						foreach($arrAttr as $row) {
							$part = explode('=', $row);
							if(strpos($part[1], '$_GET') !== false) {
								$list = explode('*', $part[1]);
								if(count($list) == 2)
									$arrAttrParams[$part[0]] = $_GET[$list[1]];
								elseif(count($list) == 3)
									$arrAttrParams[$part[0]] = $_GET[$list[1]][$list[2]];
								elseif(count($list) == 4)
									$arrAttrParams[$part[0]] = $_GET[$list[1]][$list[2]][$list[3]];
								elseif(count($list) == 5)
									$arrAttrParams[$part[0]] = $_GET[$list[1]][$list[2]][$list[3]][$list[4]];
							} else
								$arrAttrParams[$part[0]] = $part[1];
						}
					}
				}
				$icon = $sub == false ? ($val['urlPath']['icon'] != null && $val['urlPath']['icon'] != '-' ? CHtml::tag('i', array('class'=>$val['urlPath']['icon']), '') : CHtml::tag('i', array('class'=>'zmdi zmdi-home'), '')) : '';
				$menu = Yii::t('phrase', $val['urlTitle']);
				$url = $val['urlPath']['url'] != null && $val['urlPath']['url'] != '-' ? Yii::app()->controller->createUrl($val['urlPath']['url'], $arrAttrParams) : 'javascript:void(0);';

				$renderContentMenu = false;
				if(count($val['urlRules']) == 5) {
					$actionArray = explode(',', $val['urlRules'][2]);
					if($val['urlRules'][0] == $module && $val['urlRules'][1] == $controller && in_array($action, $actionArray))
						$renderContentMenu = true;
				} else {
					$actionArray = explode(',', $val['urlRules'][1]);
					if($val['urlRules'][0] == $controller && in_array($action, $actionArray))
						$renderContentMenu = true;
				}

				if($renderContentMenu == true) {
					echo '<li '.$liClass.'>';
					echo CHtml::link($icon.$menu, $url);
					$this->generateMenu($submenu, true);
					echo '</li>';
				}
			}
			echo '</ul>';
		}
	}
}
