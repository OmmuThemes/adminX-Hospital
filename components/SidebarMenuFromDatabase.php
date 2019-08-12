<?php
/**
 * SidebarMenuFromDatabase
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

class SidebarMenuFromDatabase extends CWidget
{
	public $category;

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

		$criteria=new CDbCriteria;
		$criteria->with = array(
			'category' => array(
				'alias' => 'category',
				'select' => 'cat_id, cat_code',
			),
		);
		$criteria->compare('t.publish', 1);
		$criteria->compare('category.cat_code', $this->category);
		$menus = OmmuMenus::model()->findAll($criteria);

		$this->render('sidebar_menu_from_database',array(
			'setting'=>$setting,
			'menus'=>$menus,
			'module'=>$module,
			'controller'=>$controller,
			'action'=>$action,
			'currentAction'=>$currentAction,
			'currentModule'=>$currentModule,
			'currentModuleAction'=>$currentModuleAction,
		));	
	}

	public function generateMenu($menus, $site_type, $sub=false)
	{
		$module = strtolower(Yii::app()->controller->module->id);
		$controller = strtolower(Yii::app()->controller->id);
		$action = strtolower(Yii::app()->controller->action->id);
		$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
		$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
		$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);

		if($menus != null) {
			foreach($menus as $key => $val) {
				$siteType = unserialize($val->sitetype_access);
				$userLevel = unserialize($val->userlevel_access);
				if(in_array($site_type, $siteType) && in_array(Yii::app()->user->level, $userLevel)) {
					$submenu = $val->submenus;
	
					$arrAttrParams = array();
					if($val->attr && $val->attr != '-') {
						$arrAttr = explode(',', $val->attr);
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
					if($val->url && $val->url != '-') {
						$urlArray = explode('/', $val->url);
						array_pop($urlArray);
						$controllerVaribale[] = implode('/', $urlArray);
					}
					if($submenu != null)
						$controllerVaribale = array_merge($controllerVaribale, $this->getControllerVaribale($submenu));
					if($sub == false) {
						if($submenu == null) {
							if($module != null)
								$liClass = ($currentModuleAction == $val->url || in_array($currentModule, $controllerVaribale)) ? 'class="active open"' : '';
							else
								$liClass = ($currentAction == $val->url || in_array($controller, $controllerVaribale)) ? 'class="active open"' : '';
						} else {
							if($module != null)
								$liClass = in_array($currentModule, $controllerVaribale) ? 'class="active open"' : '';
							else
								$liClass = in_array($controller, $controllerVaribale) ? 'class="active open"' : '';
						}
					} else {
						if($module != null)
							$liClass = ($currentModuleAction == $val->url || in_array($currentModule, $controllerVaribale)) ? 'class="active"' : '';
						else
							$liClass = ($currentAction == $val->url || in_array($controller, $controllerVaribale)) ? 'class="active"' : '';
					}

					$icon = $sub == false ? CHtml::tag('i', array('class'=>'zmdi zmdi-home'), '') : '';
					$menu = $sub == false ? CHtml::tag('span', array(), Yii::t('phrase', $val->title->message)) : Yii::t('phrase', $val->title->message);
					$url = $val->url && $val->url != '-' ? Yii::app()->createUrl($val->url, $arrAttrParams) : 'javascript:void(0)';
					$aClass = $submenu != null ? array('class'=>'menu-toggle') : '';
		
					echo '<li '.$liClass.'>';
					echo CHtml::link($icon.$menu, $url, $aClass);
					if($submenu != null) {
						echo '<ul class="ml-menu">';
							$this->generateMenu($submenu, $site_type, true);
						echo '</ul>';
					}
					echo '</li>';
				}
			}
		}
	}

	public function getControllerVaribale($submenu)
	{
		$controllerVaribale = array();

		foreach($submenu as $key => $val) {
			$urlArray = explode('/',  $val->url);
			array_pop($urlArray);
			$controllerVaribale[] = implode('/', $urlArray);
		}

		return $controllerVaribale;
	}
}
