<?php 
/**
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 28 November 2017, 14:48 WIB
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

 $this->beginContent('//layouts/default');
	Yii::import('webroot.themes.'.Yii::app()->theme->name.'.components.*');
	$module = strtolower(Yii::app()->controller->module->id);
	$controller = strtolower(Yii::app()->controller->id);
	$action = strtolower(Yii::app()->controller->action->id);
	$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
	$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
	$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);

	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/css/login.css');
?>

<div class="authentication">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 p-r-0">
				<div class="card">
					<h4 class="l-login"><?php echo CHtml::encode($this->pageTitle); ?> <?php echo strtolower($this->pageDescription) != strtolower(OmmuSettings::getInfo('site_description')) ? '<p class="msg">'.$this->pageDescription.'</p>' : '';?></h4>
					<?php echo $content;?>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 p-l-0">
				<div class="l-detail">
					<h5 class="position"><?php echo Yii::t('phrase', 'Welcome');?></h5>
					<h1 class="position"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/logo.svg" alt="profile img"><?php echo Yii::app()->controller->themeSetting['web-title'];?></h1>
					<h3 class="position"><?php echo Yii::t('phrase', 'Sign in to start your session');?></h3>
					<?php if(Yii::app()->controller->themeSetting['web-description'] && Yii::app()->controller->themeSetting['web-description'] != '-') {?>
					<p class="position"><?php echo Yii::t('phrase', Yii::app()->controller->themeSetting['web-description']);?></p>
					<?php }?>
					<ul class="list-unstyled l-social position">
						<li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>
						<li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
						<li><a href="#"><i class="zmdi zmdi-pinterest-box"></i></a></li>
						<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
						<li><a href="#"><i class="zmdi zmdi-google-plus-box"></i></a></li>
					</ul>
					<ul class="list-unstyled l-menu">
						<li><a href="#"><?php echo Yii::t('phrase', 'Contact Us');?></a></li>
						<li><a href="#"><?php echo Yii::t('phrase', 'About Us');?></a></li>
						<li><a href="#"><?php echo Yii::t('phrase', 'FAQ');?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->endContent(); ?>