<?php
/**
 * Ommu Settings (ommu-settings)
 * @var $this MaintenanceController
 * @var $model OmmuSettings
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->layout = 'login';
 
	$this->breadcrumbs=array(
		'Maintenance',
	);
	$this->pageTitle = Yii::t('phrase', 'The General Shutdown');
	$this->pageDescription = CHtml::encode($setting->construction_text);
?>

<form class="col-md-12 admin-x" id="sign_in" method="POST">
	<div class="form-group form-float">
		<div class="form-line">
			<input type="text" class="form-control">
			<label class="form-label"><?php echo Yii::t('phrase', 'Search...');?></label>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<a class="btn btn-raised g-bg-cyan waves-effect" href="<?php echo Yii::app()->createUrl('site/index');?>"><?php echo Yii::t('phrase', 'GO TO HOMEPAGE');?></a>
			<a class="btn btn-raised waves-effect" href="<?php echo Yii::app()->createUrl('site/login');?>"><?php echo Yii::t('phrase', 'Sign In');?></a>
		</div>
	</div>
</form>