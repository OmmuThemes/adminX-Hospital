<?php
/**
 * @var $this MenuNotifications
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */
?>

<ul class="nav navbar-nav navbar-right">
	<?php if(!$condition || in_array($configTheme['topmenu']['search']['publish'], array('', 1))) {?>
	<li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
	<?php }
	if(!$condition || in_array($configTheme['topmenu']['feature']['publish'], array('', 1)))
		$this->widget('MenuNotificationChange'); // Menu Notification Change
	
	if(!$condition || in_array($configTheme['topmenu']['message']['publish'], array('', 1)))
		$this->widget('MenuNotificationMessage'); // Menu Notification Messsage
	
	if(!$condition || in_array($configTheme['topmenu']['notification']['publish'], array('', 1)))
		$this->widget('MenuNotificationAlert'); // Menu Notification Alert
	
	if(!$condition || in_array($configTheme['topmenu']['task']['publish'], array('', 1)))
		$this->widget('MenuNotificationTask'); // Menu Notification Task ?>
	<li><a href="<?php echo Yii::app()->createUrl('site/logout');?>" title="<?php echo Yii::t('phrase', 'Logout');?>" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
	
	<?php if(!$condition || in_array($configTheme['topmenu']['task']['publish'], array('', 1))) {?>
	<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-sort-amount-desc"></i></a></li>
	<?php }?>
</ul>