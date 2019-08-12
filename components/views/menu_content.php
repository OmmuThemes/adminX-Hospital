<?php
/**
 * @var $this MenuContent
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */
?>

<div class="contentmenu clearfix">
	<?php $this->generateMenu($menus);?>
	<?php $this->widget('adminx-hospital.components.system.CMenu', array(
		'items'=>$this->menus,
		'htmlOptions'=>array('class'=>'gridmenu clearfix'),
	)); ?>
</div>