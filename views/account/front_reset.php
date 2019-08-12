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
		'Reset Password',
	);
?>

<?php if($condition == 'success') {?>
	<div class="col-md-12">
		<?php echo CHtml::link(Yii::t('phrase', 'SIGN IN'), Yii::app()->createUrl('site/login'), array('class'=>'btn btn-raised g-bg-cyan waves-effect'));?>
	</div>

<?php } else if(in_array($condition, array('novalid','expired'))) {?>
	<div class="col-md-12">
		<?php echo CHtml::link(Yii::t('phrase', 'Forgot Password'), Yii::app()->controller->createUrl('forgot'), array('class'=>'btn btn-raised g-bg-cyan waves-effect'));?>
		<div class="m-t-10">
			<?php echo CHtml::link(Yii::t('phrase', 'Sign In!'), Yii::app()->createUrl('site/login'));?>
		</div>
	</div>

<?php } else if($condition == 'available') {?>
	<?php $form=$this->beginWidget('application.libraries.yii-traits.system.OActiveForm', array(
		'id'=>'users-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
		'htmlOptions'=>array(
			'class'=>'col-md-12 admin-x',
		),
	)); ?>
		<div class="form-group form-float">
			<div class="form-line <?php echo $model->newPassword != '' ? 'focused' : '';?>">
				<?php echo $form->passwordField($model,'newPassword', array('maxlength'=>32, 'class'=>'form-control')); ?>
				<?php echo $form->labelEx($model,'newPassword', array('class'=>'form-label')); ?>
			</div>
			<?php echo $form->error($model,'newPassword'); ?>
		</div>
		<div class="form-group form-float">
			<div class="form-line <?php echo $model->confirmPassword != '' ? 'focused' : '';?>">
				<?php echo $form->passwordField($model,'confirmPassword', array('maxlength'=>32, 'class'=>'form-control')); ?>
				<?php echo $form->labelEx($model,'confirmPassword', array('class'=>'form-label')); ?>
			</div>
			<?php echo $form->error($model,'confirmPassword'); ?>
		</div>
		<?php echo CHtml::submitButton(Yii::t('phrase', 'Change Password'), array('onclick'=>'setEnableSave()', 'class'=>'btn btn-raised g-bg-cyan waves-effect')); ?>
	<?php $this->endWidget(); ?>
	
<?php }?>