<?php 
/**
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 28 November 2017, 13:27 WIB
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
?>

<?php //begin.Page Loader ?>
<div class="page-loader-wrapper">
	<div class="loader">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
		<p>Please wait...</p>
	</div>
</div>

<?php //begin.Overlay For Sidebars ?>
<div class="overlay"></div>

<?php //begin.Search ?>
<div class="search-bar">
	<div class="search-icon"> <i class="material-icons">search</i> </div>
	<input type="text" placeholder="Explore adminX...">
	<div class="close-search"> <i class="material-icons">close</i> </div>
</div>

<?php //begin.Top Bar ?>
<nav class="navbar clearHeader">
	<div class="navbar-header">
		<a href="javascript:void(0);" class="bars"></a>
		<a class="navbar-brand" href="<?php echo Yii::app()->createUrl('site/index');?>"><img class="logo" src="<?php echo Yii::app()->theme->baseUrl;?>/images/logo.svg" alt="profile img"><?php echo Yii::app()->controller->themeSetting['web-title'];?></a>
	<?php if($currentAction == 'dashboard/rtl') {?>
	</div>
	<?php }
		$this->widget('MenuNotifications'); // Menu Notification
	if($currentAction != 'dashboard/rtl') {?>
	</div>
	<?php }?>
</nav>
<?php //end.Top Bar ?>

<?php //begin.Main sidebar ?>
<section>
	<?php $this->widget('Sidebar'); // Left Sidebar ?>
	<?php $this->widget('SidebarDynamics'); // Right Sidebar ?>
</section>
<?php //end.Main sidebar ?>

<?php //begin.Main Content ?>
<section class="content <?php echo $currentAction == 'doctor/profile' ? 'profile-page' : ($currentAction == 'extra/chat' ? 'chat-app' : '');?>">
	<div class="container-fluid">
		<?php if(!in_array($currentAction, array('doctor/profile','extra/chat'))) {?>
		<div class="block-header">
			<h2><?php echo CHtml::encode($this->pageTitle); ?></h2>
			<ol class="breadcrumb">
				<?php 
					$this->widget('Breadcrumbs', array(
						'links' => Yii::app()->controller->breadcrumbs,
					)); 
				?>
			</ol>
			<?php echo $this->pageDescription && strtolower($this->pageDescription) != strtolower(OmmuSettings::getInfo('site_description')) ? '<p class="intro">'.$this->pageDescription.'</p>' : '';?>
			<?php $this->widget('MenuContent', array('menus'=>$this->menu)); // Menu Content ?>
		</div>
		<?php }?>

		<?php echo $content;?>

		<?php $this->widget('Footer'); // Footer ?>
	</div>
</section>
<?php //end.Main Content ?>

<?php $this->endContent(); ?>