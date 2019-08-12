<?php
/**
 * @var $this AccountController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->layout = 'login';

	$this->breadcrumbs=array(
		'Reset Password',
	);
?>

<?php if($condition == 'success') {?>
	<div class="col-md-12">
		<?php echo CHtml::link(Yii::t('phrase', 'SIGN IN'), Yii::app()->createUrl('site/login'), array('class'=>'btn btn-raised g-bg-cyan waves-effect'));?>
	</div>

<?php } else if(in_array($condition, array('novalid','expired'))) {?>
	<div class="col-md-12">
		<?php echo CHtml::link(Yii::t('phrase', 'Verify?'), Yii::app()->controller->createUrl('verify'), array('class'=>'btn btn-raised g-bg-cyan waves-effect'));?>
		<div class="m-t-10">
			<?php echo CHtml::link(Yii::t('phrase', 'Sign In!'), Yii::app()->createUrl('site/login'));?>
		</div>
	</div>
	
<?php }?>