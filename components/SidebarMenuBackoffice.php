<?php
/**
 * SidebarMenuBackoffice
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

class SidebarMenuBackoffice extends CWidget
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

		$setting = OmmuSettings::model()->findByPk(1,array(
			'select' => 'site_type'
		));

		$this->render('sidebar_menu_backoffice',array(
			'setting'=>$setting,
			'module'=>$module,
			'controller'=>$controller,
			'action'=>$action,
			'currentAction'=>$currentAction,
			'currentModule'=>$currentModule,
			'currentModuleAction'=>$currentModuleAction,
		));	
	}

	public function generateMenu($menus, $mod)
	{
		$module = strtolower(Yii::app()->controller->module->id);
		$controller = strtolower(Yii::app()->controller->id);
		$action = strtolower(Yii::app()->controller->action->id);
		$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
		$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
		$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);

		if($menus != null) {
			foreach($menus as $key => $val) {
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
	
				$liClass = '';
				$controllerArray = explode('/', $controller);
				$controllerVaribale = array();
				if($val['urlPath']['url'] != null && $val['urlPath']['url'] != '-') {
					$urlArray = explode('/', $val['urlPath']['url']);
					array_pop($urlArray);
					$controllerVaribale[] = implode('/', $urlArray);
				}
				if($submenu != null)
					$controllerVaribale = array_merge($controllerVaribale, $this->getControllerVaribale($submenu));
				$liClass = in_array($controller, $controllerVaribale) ? 'class="active"' : '';

				$url = $val['urlPath']['url'] != null && $val['urlPath']['url'] != '-' ? Yii::app()->createUrl($mod.'/'.$val['urlPath']['url'], $arrAttrParams) : 'javascript:void(0)';
				$aClass = $submenu != null ? array('class'=>'menu-toggle') : '';
	
				echo '<li '.$liClass.'>';
				echo CHtml::link(Yii::t('phrase', $val['urlTitle']), $url, $aClass);
				if($submenu != null) {
					echo '<ul class="ml-menu">';
						$this->generateMenu($submenu, $mod);
					echo '</ul>';
				}
				echo '</li>';
			}
		}
	}

	public function getControllerVaribale($submenu)
	{
		$controllerVaribale = array();

		foreach($submenu as $key => $val) {
			$urlArray = explode('/', $val['urlPath']['url']);
			array_pop($urlArray);
			$controllerVaribale[] = implode('/', $urlArray);
		}

		return $controllerVaribale;
	}
}
