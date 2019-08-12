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
		'Forgot Password',
	);
?>

<?php if($token == null) {?>
	<?php $form=$this->beginWidget('application.libraries.yii-traits.system.OActiveForm', array(
		'id'=>'user-forgot-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
		'htmlOptions'=>array(
			'class'=>'col-md-12 admin-x',
		),
	)); ?>
		<div class="form-group form-float">
			<div class="form-line <?php echo $model->email_i != '' ? 'focused' : '';?>">
				<?php echo $form->textField($model,'email_i', array('maxlength'=>32, 'class'=>'form-control')); ?>
				<?php echo $form->labelEx($model,'email_i', array('class'=>'form-label')); ?>
			</div>
			<?php echo $form->error($model,'email_i'); ?>
		</div>
		<?php echo CHtml::submitButton(Yii::t('phrase', 'RESET MY PASSWORD'), array('onclick'=>'setEnableSave()', 'class'=>'btn btn-raised g-bg-cyan waves-effect')); ?>
		<div class="m-t-10">
			<?php echo CHtml::link(Yii::t('phrase', 'Forgot Username?'), Yii::app()->controller->createUrl('username'));?><br/>
			<?php echo CHtml::link(Yii::t('phrase', 'Sign In!'), Yii::app()->createUrl('site/login'));?>
		</div>
	<?php $this->endWidget(); ?>

<?php } else {?>
	<div class="col-md-12">
		<?php echo CHtml::link(Yii::t('phrase', 'SIGN IN'), Yii::app()->createUrl('site/login'), array('class'=>'btn btn-raised g-bg-cyan waves-effect'));?>
		<div class="m-t-10">
			<?php echo CHtml::link(Yii::t('phrase', 'Forgot Username?'), Yii::app()->controller->createUrl('username'));?>
		</div>
	</div>
<?php }?>