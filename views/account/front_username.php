<?php
/**
 * @var $this AccountController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->layout = 'login';

	$this->breadcrumbs=array(
		'Forgot Username',
	);
	
	$this->pageTitle = Yii::t('phrase', 'Forgot Username?');
	$this->pageDescription = Yii::t('phrase', 'Enter your e-mail address below to reset your username.');
?>

<form class="col-md-12 admin-x" id="sign_in" method="POST">
	<div class="form-group form-float">
		<div class="form-line">
			<input type="email" class="form-control">
			<label class="form-label"><?php echo Yii::t('phrase', 'Email');?></label>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<a href="#" class="btn btn-raised waves-effect g-bg-cyan"><?php echo Yii::t('phrase', 'GET MY USERNAME');?></a>
		</div>
		<div class="m-t-10 col-sm-12"> <a href="<?php echo Yii::app()->controller->createUrl('forgot');?>"><?php echo Yii::t('phrase', 'Forgot Password?');?></a> </div>
		<div class="col-sm-12"> <a href="<?php echo Yii::app()->createUrl('site/login');?>"><?php echo Yii::t('phrase', 'Sign In!');?></a> </div>
	</div>
</form>