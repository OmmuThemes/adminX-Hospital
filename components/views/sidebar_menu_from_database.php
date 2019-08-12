<?php
/**
 * @var $this SidebarMenuFromDatabase
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */
?>

<li class="header"><?php echo Yii::t('phrase', 'MAIN NAVIGATION');?></li>
<?php echo $this->generateMenu($menus, $setting->site_type);?>