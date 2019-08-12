<?php
/**
 * @var $this SidebarMenuAccount
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$image = $this->imageDefault;
	if($model != null) {
		$userPath = "public/users/".Yii::app()->user->id;
		if($model->photos != '' && file_exists($userPath.'/'.$model->photos))
			$image = Yii::app()->request->baseUrl.'/'.$userPath.'/'.$model->photos;
	}
	$displayname = !Yii::app()->user->isGuest ? Yii::app()->user->displayname : 'Ommu Platform';
?>

<li> 
	<?php //begin.User Info ?>
	<div class="user-info">
		<div class="admin-image"> <img src="<?php echo Utility::getTimThumb($image, 65, 65, 1);?>" alt="<?php echo $displayname;?>"> </div>
		<div class="admin-action-info">
			<span><?php echo Yii::t('phrase', 'Welcome');?></span>
			<h3><?php echo $displayname;?></h3>
			<ul>
				<li><a data-placement="bottom" title="<?php echo Yii::t('phrase', 'Go to Inbox');?>" href="<?php echo Yii::app()->createUrl('adminxExtra/chat');?>"><i class="zmdi zmdi-email"></i></a></li>
				<li><a data-placement="bottom" title="<?php echo Yii::t('phrase', 'Go to Profile');?>" href="<?php echo Yii::app()->createUrl('adminxDoctor/profile');?>"><i class="zmdi zmdi-account"></i></a></li>
				<?php if(Yii::app()->user->isGuest):?>
				<li><a data-placement="bottom" title="<?php echo Yii::t('phrase', 'Sign In');?>" href="<?php echo Yii::app()->createUrl('site/login');?>" ><i class="zmdi zmdi-sign-in"></i></a></li>
				<?php endif;?>
			</ul>
		</div>
	</div>
	<?php //end.User Info ?>
</li>