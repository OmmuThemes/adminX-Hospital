<?php
/**
 * @var $this SidebarMenuBackoffice
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$menuRender = 0;
	if(($module == null && in_array($controller, array('admin'))) || ($module != null && (($module == 'report' && !in_array($controller, array('o/category','o/setting'))) || ($module == 'support' && !in_array($controller, array('o/contact','o/contactcategory','o/mailsetting','o/widget'))) || ($module == 'telegrambot')))) {
		$menuRender = 1;
		$title = 'Submenu';
		
	} elseif($module == null && in_array($controller, array('content','view','history','module','globaltag','translate','menu'))) {
		$menuRender = 2;
		$title = 'Submenu';
		
	} elseif($module != null && $module == 'users') {
		$menuRender = 3;
		$title = 'Submenu';
		
	} elseif($module == null && in_array($controller, array('settings','language','theme','meta','menucategory','zonecountry','zoneprovince','zonecity','zonedistrict','zonevillage')) || ($module != null && ($module == 'report' && (in_array($controller, array('o/category','o/setting'))) || ($module == 'support' && in_array($controller, array('o/contact','o/contactcategory','o/mailsetting','o/widget')))))) {
		$menuRender = 4;
		$title = 'Submenu';
	}

	$displayname = !Yii::app()->user->isGuest ? Yii::app()->user->displayname : 'Ommu Platform';
?>

<li class="header">BACKOFFICE MENUS</li>
<li <?php echo $menuRender == 1 ? 'class="active open"' : ''; ?>>
	<a class="menu-toggle" href="javascript:void(0);" title="<?php echo Yii::t('phrase', 'Dashboard');?>"><i class="zmdi zmdi-home"></i><span><?php echo Yii::t('phrase', 'Dashboard');?></span></a>
	<ul class="ml-menu">
		<li <?php echo $currentAction == 'admin/dashboard' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('admin/dashboard');?>" title="<?php echo Yii::t('phrase', 'Summary');?>"><?php echo Yii::t('phrase', 'Summary');?></a></li>
		<?php
		$core = OmmuPlugins::getPlugin(2, 'directory', false);
		if($core != null) {
			foreach($core as $key => $val) {
				$menus = Utility::getModuleMenu($val->folder);
				if($menus != null) {
					$liClass = '';
					if($val->folder == $module)
						$liClass = 'class="active"';
					$menu = $val->name;
					$url = count($menus) > 1 ? 'javascript:void(0);' : Yii::app()->createUrl($val->folder.'/'.$menus[0]['urlPath']['url']);
					$aClass = count($menus) > 1 ? array('class'=>'menu-toggle') : '';

					echo '<li '.$liClass.'>';
					echo CHtml::link($menu, $url, $aClass);
					if(count($menus) > 1) {
						echo '<ul class="ml-menu">';
						foreach($menus as $key => $data) {
							$submenu = $data['submenu'];
	
							$arrAttrParams = array();
							if($data['urlPath']['attr'] != null && $data['urlPath']['attr'] != '-') {
								$arrAttr = explode(',', $data['urlPath']['attr']);
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
							if($data['urlPath']['url'] != null && $data['urlPath']['url'] != '-') {
								$controllerArray = explode('/', $controller);
								$urlArray = explode('/', $data['urlPath']['url']);
								array_pop($urlArray);
								$liClass = $controller == implode('/', $urlArray) ? 'class="active"' : '';
							}
							$url = $data['urlPath']['url'] != null && $data['urlPath']['url'] != '-' ? Yii::app()->createUrl($val->folder.'/'.$data['urlPath']['url'], $arrAttrParams) : 'javascript:void(0)';
							$aClass = $submenu != null ? array('class'=>'menu-toggle') : '';

							echo '<li '.$liClass.'>';
							echo CHtml::link(Yii::t('phrase', $data['urlTitle']), $url, $aClass);
							echo '</li>';
						}
						echo '</ul>';
					}
					echo '</li>';
				}
			}
		}?>
		<li><a href="<?php echo Yii::app()->createUrl('users/o/admin/edit')?>" title="<?php echo Yii::t('phrase', 'Edit Account: {displayname}', array('{displayname}'=>$displayname));?>"><?php echo Yii::t('phrase', 'Edit Account');?></a></li>
		<li><a href="<?php echo Yii::app()->createUrl('users/o/admin/password')?>" title="<?php echo Yii::t('phrase', 'Change Password: {displayname}', array('{displayname}'=>$displayname));?>"><?php echo Yii::t('phrase', 'Change Password');?></a></li>
	</ul>
</li>

<li <?php echo $menuRender == 2 ? 'class="active open"' : ''; ?>>
	<a class="menu-toggle" href="javascript:void(0);" title="<?php echo Yii::t('phrase', 'Content');?>"><i class="zmdi zmdi-home"></i><span><?php echo Yii::t('phrase', 'Content');?></span></a>
	<ul class="ml-menu">
		<li <?php echo in_array($controller, array('content','view','history')) ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('content/manage');?>" title="<?php echo Yii::t('phrase', 'Pages');?>"><?php echo Yii::t('phrase', 'Pages');?></a></li>
		<?php if(!Yii::app()->user->isGuest && Yii::app()->user->level == 1) {?>
			<li <?php echo $controller == 'module' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('module/manage');?>" title="<?php echo Yii::t('phrase', 'Modules');?>"><?php echo Yii::t('phrase', 'Modules');?></a></li>
		<?php }?>
		<li <?php echo $controller == 'globaltag' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('globaltag/manage');?>" title="<?php echo Yii::t('phrase', 'Tags');?>"><?php echo Yii::t('phrase', 'Tags');?></a></li>
		<?php if(!Yii::app()->user->isGuest && Yii::app()->user->level == 1) {?>
			<li <?php echo $controller == 'menu' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('menu/manage');?>" title="<?php echo Yii::t('phrase', 'Menus');?>"><?php echo Yii::t('phrase', 'Menus');?></a></li>
		<?php }?>
		<li <?php echo $controller == 'translate' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('translate/manage');?>" title="<?php echo Yii::t('phrase', 'Translate');?>"><?php echo Yii::t('phrase', 'Translate');?></a></li>
	</ul>
</li>

<?php $plugin = OmmuPlugins::getPlugin(1, 'directory', false);
	if($plugin != null) {
		foreach($plugin as $key => $val) {
			$parent = $val->parent_id ? $val->parent->folder : null;
			$menus = Utility::getModuleMenu($val->folder, $parent);
			if($menus != null) {
				$liClass = '';
				$plugin = Yii::app()->getRequest()->getParam('plugin');
				if(isset($plugin)) {
					if($val->parent_id && $val->folder == $plugin)
						$liClass = 'class="active open"';
				} else {
					if(!$val->parent_id && $val->folder == $module)
						$liClass = 'class="active open"';
				}

				$folder = $val->parent_id ? $val->parent->folder : $val->folder;
				$icon = CHtml::tag('i', array('class'=>'zmdi zmdi-home'), '');
				$menu = CHtml::tag('span', array(), Yii::t('phrase', $val->name));
				$aClass = $menus != null ? array('class'=>'menu-toggle') : '';

				echo '<li '.$liClass.'>';
				echo CHtml::link($icon.$menu, 'javascript:void(0);', $aClass);
				if($menus != null) {
					echo '<ul class="ml-menu">';
					$this->generateMenu($menus, $folder);
					echo '</ul>';
				}
				echo '</li>';
			}
		}
	}
?>
<li <?php echo $menuRender == 3 ? 'class="active open"' : ''; ?>>
	<a class="menu-toggle" href="javascript:void(0);" title="<?php echo Yii::t('phrase', 'Users');?>"><i class="zmdi zmdi-home"></i><span><?php echo Yii::t('phrase', 'Users');?></span></a>
	<ul class="ml-menu">
		<?php $menus = Utility::getModuleMenu('users');
		$this->generateMenu($menus, 'users');?>
	</ul>
</li>
<li <?php echo $menuRender == 4 ? 'class="active open"' : ''; ?>>
	<a class="menu-toggle" href="javascript:void(0);" title="<?php echo Yii::t('phrase', 'Settings');?>"><i class="zmdi zmdi-home"></i><span><?php echo Yii::t('phrase', 'Settings');?></span></a>
	<ul class="ml-menu">
		<?php if(!Yii::app()->user->isGuest && Yii::app()->user->level == 1) {?>
			<li <?php echo $currentAction == 'settings/general' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('settings/general');?>" title="<?php echo Yii::t('phrase', 'General Settings');?>"><?php echo Yii::t('phrase', 'General Settings');?></a></li>
			<?php if($setting->site_type == 1) {?>
				<li <?php echo $currentAction == 'settings/banned' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('settings/banned');?>" title="<?php echo Yii::t('phrase', 'Spam & Banning Tools');?>"><?php echo Yii::t('phrase', 'Spam & Banning Tools');?></a></li>
			<?php }?>
			<li <?php echo $currentAction == 'settings/signup' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('settings/signup');?>" title="<?php echo Yii::t('phrase', 'Signup Settings');?>"><?php echo Yii::t('phrase', 'Signup Settings');?></a></li>
			<li <?php echo $controller == 'meta' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('meta/edit');?>" title="<?php echo Yii::t('phrase', 'Meta Settings');?>"><?php echo Yii::t('phrase', 'Meta Settings');?></a></li>
			<li <?php echo $currentAction == 'settings/analytic' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('settings/analytic');?>" title="<?php echo Yii::t('phrase', 'Google Analytics Settings');?>"><?php echo Yii::t('phrase', 'Google Analytics Settings');?></a></li>
			<li <?php echo in_array($controller, array('language')) ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('language/manage');?>" title="<?php echo Yii::t('phrase', 'Language Settings');?>"><?php echo Yii::t('phrase', 'Language Settings');?></a></li>
			<li <?php echo $currentAction == 'settings/locale' || in_array($controller, array('zonecountry','zoneprovince','zonecity','zonedistrict','zonevillage')) ? 'class="active"' : '';?>>
				<a <?php echo $currentAction == 'settings/locale' ? 'class="menu-toggle active"' : 'class="menu-toggle"';?> href="<?php echo Yii::app()->createUrl('settings/locale');?>" title="<?php echo Yii::t('phrase', 'Locale Settings');?>"><?php echo Yii::t('phrase', 'Locale Settings');?></a>
				<ul class="ml-menu">
					<li <?php echo $controller == 'zonecountry' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('zonecountry/manage');?>" title="<?php echo Yii::t('phrase', 'Country');?>"><?php echo Yii::t('phrase', 'Country');?></a></li>
					<li <?php echo $controller == 'zoneprovince' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('zoneprovince/manage');?>" title="<?php echo Yii::t('phrase', 'Province');?>"><?php echo Yii::t('phrase', 'Province');?></a></li>
					<li <?php echo $controller == 'zonecity' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('zonecity/manage');?>" title="<?php echo Yii::t('phrase', 'City');?>"><?php echo Yii::t('phrase', 'City');?></a></li>
					<li <?php echo $controller == 'zonedistrict' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('zonedistrict/manage');?>" title="<?php echo Yii::t('phrase', 'Districts');?>"><?php echo Yii::t('phrase', 'Districts');?></a></li>
					<li <?php echo $controller == 'zonevillage' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('zonevillage/manage');?>" title="<?php echo Yii::t('phrase', 'Village');?>"><?php echo Yii::t('phrase', 'Village');?></a></li>
				</ul>
			</li>
			<li <?php echo $controller == 'o/mailsetting' ? 'class="active"' : '';?>>
				<a <?php echo $controller == 'o/mailsetting' ? 'class="active"' : '';?> href="<?php echo Yii::app()->createUrl('support/o/mailsetting/edit');?>" title="<?php echo Yii::t('phrase', 'Mail Settings');?>"><?php echo Yii::t('phrase', 'Mail Settings');?></a>
			</li>
			<li <?php echo in_array($controller, array('o/contact','o/contactcategory','o/widget')) ? 'class="active"' : '';?>>
				<a class="menu-toggle" href="javascript:void(0);" title="<?php echo Yii::t('phrase', 'Contact Settings');?>"><?php echo Yii::t('phrase', 'Contact Settings');?></a>
				<ul class="ml-menu">
					<li <?php echo $controller == 'o/contact' && $action != 'setting' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('support/o/contact/manage');?>" title="<?php echo Yii::t('phrase', 'Manage Contact');?>"><?php echo Yii::t('phrase', 'Manage Contact');?></a></li>
					<li <?php echo $controller == 'o/contactcategory' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('support/o/contactcategory/manage');?>" title="<?php echo Yii::t('phrase', 'Contact Categories');?>"><?php echo Yii::t('phrase', 'Contact Categories');?></a></li>
					<li <?php echo $controller == 'o/contact' && $action == 'setting' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('support/o/contact/setting');?>" title="<?php echo Yii::t('phrase', 'Address Settings');?>"><?php echo Yii::t('phrase', 'Address Settings');?></a></li>
					<li <?php echo $controller == 'o/widget' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('support/o/widget/manage');?>" title="<?php echo Yii::t('phrase', 'Social Media Widget');?>"><?php echo Yii::t('phrase', 'SosMed Widget');?></a></li>
				</ul>
			</li>
			<li <?php echo in_array($controller, array('o/setting','o/category')) ? 'class="active"' : '';?>>
				<a class="menu-toggle" href="javascript:void(0);" title="<?php echo Yii::t('phrase', 'Report Settings');?>"><?php echo Yii::t('phrase', 'Report Settings');?></a>
				<ul class="ml-menu">
					<li <?php echo $controller == 'o/setting' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('report/o/setting/edit');?>" title="<?php echo Yii::t('phrase', 'Report Settings');?>"><?php echo Yii::t('phrase', 'Report Settings');?></a></li>
					<li <?php echo $controller == 'o/category' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('report/o/category/manage');?>" title="<?php echo Yii::t('phrase', 'Manage Category');?>"><?php echo Yii::t('phrase', 'Manage Category');?></a></li>
				</ul>
			</li>
			<li <?php echo $controller == 'menucategory' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('menucategory/manage');?>" title="<?php echo Yii::t('phrase', 'Menu Settings');?>"><?php echo Yii::t('phrase', 'Menu Settings');?></a></li>
			<li <?php echo $controller == 'theme' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('theme/manage');?>" title="<?php echo Yii::t('phrase', 'Theme Settings');?>"><?php echo Yii::t('phrase', 'Theme Settings');?></a></li>
		<?php } else {?>
			<li <?php echo in_array($controller, array('o/contact','o/contactcategory')) ? 'class="active"' : '';?>><a class="menu-toggle" href="javascript:void(0);" title="<?php echo Yii::t('phrase', 'Contact Settings');?>"><?php echo Yii::t('phrase', 'Contact Settings');?></a>
				<ul class="ml-menu">
					<li <?php echo $controller == 'o/contact' && $action != 'setting' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('support/o/contact/manage');?>" title="<?php echo Yii::t('phrase', 'Manage Contact');?>"><?php echo Yii::t('phrase', 'Manage Contact');?></a></li>
					<li <?php echo $controller == 'o/contactcategory' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('support/o/contactcategory/manage');?>" title="<?php echo Yii::t('phrase', 'Contact Categories');?>"><?php echo Yii::t('phrase', 'Contact Categories');?></a></li>
					<li <?php echo $controller == 'o/contact' && $action == 'setting' ? 'class="active"' : '';?>><a href="<?php echo Yii::app()->createUrl('support/o/contact/setting');?>" title="<?php echo Yii::t('phrase', 'Address Settings');?>"><?php echo Yii::t('phrase', 'Address Settings');?></a></li>
			</li>
		<?php }?>
	</ul>
</li>