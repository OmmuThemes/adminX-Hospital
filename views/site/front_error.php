<?php
/**
 * @var $this SiteController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 28 November 2017, 15:07 WIB
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'Error',
	);
	
	$this->layout = 'login';
	$this->pageTitle = Yii::t('phrase', 'Error {code}', array('{code}'=>$code));
	$this->pageDescription = CHtml::encode($message);
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
		</div>
	</div>
</form>