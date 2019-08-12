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
		'Sign Up',
	);
?>

<?php if($token == null) {?>
	<?php $form=$this->beginWidget('application.libraries.yii-traits.system.OActiveForm', array(
		'id'=>'signup-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
		'htmlOptions'=>array(
			'class'=>'col-md-12 admin-x',
		),
	)); ?>
		<div class="form-group form-float">
			<div class="form-line <?php echo $model->displayname != '' ? 'focused' : '';?>">
				<?php echo $form->textField($model,'displayname', array('maxlength'=>32, 'class'=>'form-control')); ?>
				<?php echo $form->labelEx($model,'displayname', array('class'=>'form-label')); ?>
			</div>
			<?php echo $form->error($model,'displayname'); ?>
		</div>
		<div class="form-group form-float">
			<?php if($email != null) {
				$model->email = $email;
				echo $form->hiddenField($model,'email');
			}?>
			<div class="form-line <?php echo $model->email != '' ? 'focused' : '';?>">
				<?php echo $form->textField($model,'email', array('maxlength'=>32, 'class'=>'form-control')); ?>
				<?php echo $form->labelEx($model,'email', array('class'=>'form-label')); ?>
			</div>
			<?php echo $form->error($model,'email'); ?>
		</div>
		<?php if($setting->signup_random != 1) {?>
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
		<?php }?>
		<div>
			<input type="checkbox" name="terms" id="terms" class="filled-in chk-col-cyan">
			<label for="terms"><?php echo Yii::t('phrase', 'I read and agree to the {terms}.', array('{terms}'=>CHtml::link(Yii::t('phrase', 'terms of usage'), '', array('target' => '_blank'))));?></label>
		</div>
		<?php echo CHtml::submitButton(Yii::t('phrase', 'SIGN UP'), array('onclick'=>'setEnableSave()', 'class'=>'btn btn-raised g-bg-cyan waves-effect')); ?>
		<div class="m-t-10">
			<?php echo CHtml::link(Yii::t('phrase', 'You already have a membership?'), Yii::app()->createUrl('site/login'));?>
		</div>
	<?php $this->endWidget(); ?>

<?php } else {?>
	<div class="col-md-12">
		<?php echo CHtml::link(Yii::t('phrase', 'SIGN IN'), Yii::app()->createUrl('site/login'), array('class'=>'btn btn-raised g-bg-cyan waves-effect'));?>
		<div class="m-t-10">
			<?php echo CHtml::link(Yii::t('phrase', 'Forgot Password?'), Yii::app()->controller->createUrl('forgot'));?>
		</div>
	</div>
<?php }?>