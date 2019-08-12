<?php
/**
 * @var $this Footer
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */
?>

<?php if(!$condition || in_array($configTheme['footer']['publish'], array('', 1))) {?>
<div class="row clearfix">
	<div class="col-sm-12 col-md-12">
		<div class="card">
			<div class="body" id="footer">
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-4">
						<h5>Email Newsletters</h5>
						<p>Sign up for new MaterialWrap content, updates, and offers.</p>
						<div class="input-group">
							<div class="form-line">
								<input type="text" class="form-control date" placeholder="Enter your email...">
							</div>
							<span class="input-group-addon"> <i class="material-icons">send</i> </span> </div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-2">
						<h5>Company</h5>
						<ul class="list-unstyled company">
							<li><a href="javascript:void(0)">About Us </a></li>
							<li><a href="javascript:void(0)">Careers</a></li>
							<li><a href="javascript:void(0)">Privacy Policy</a></li>
							<li><a href="javascript:void(0)">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6">
						<h5>Want to Work with Us?</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					</div>
					<div class="col-sm-12">
						<p class="copy m-b-0">&copy; <?php echo Yii::t('phrase', 'Copyright');?>
							<time class="year"><?php echo date("Y") ?></time>
							<a href="<?php echo Yii::app()->createUrl('site/index');?>" title="<?php echo $setting->site_title;?>"><?php echo $setting->site_title;?></a>  - <?php echo Yii::t('phrase', 'All Rights Reserved');?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>