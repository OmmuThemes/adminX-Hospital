<?php
/**
 * @var $this UiController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'User Interface (UI)'=>array('index'),
		'Tabs',
	);
?>

<?php //begin.Example Tab ?>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="header">
				<h2> EXAMPLE TAB <small>Add quick, dynamic tab functionality to transition through panes of local content</small> </h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another action</a></li>
							<li><a href="javascript:void(0);">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body"> 
				<?php //begin.Nav tabs ?>
				<ul class="nav nav-tabs">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">HOME</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">PROFILE</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages">MESSAGES</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">SETTINGS</a></li>
				</ul>
				<?php //begin.Tab panes ?>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane in active" id="home"> <b>Home Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile"> <b>Profile Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
					<div role="tabpanel" class="tab-pane" id="messages"> <b>Message Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
					<div role="tabpanel" class="tab-pane" id="settings"> <b>Settings Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php //end.Example Tab ?> 

<?php //begin.Tabs With Only Icon Title ?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="header">
				<h2> TABS WITH ONLY ICON TITLE </h2>
			</div>
			<div class="body"> 
				<?php //begin.Nav tabs ?>
				<ul class="nav nav-tabs">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_only_icon_title"><i class="material-icons">home</i></a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_only_icon_title"><i class="material-icons">person</i></a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages_only_icon_title"><i class="material-icons">email</i></a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_only_icon_title"><i class="material-icons">settings</i></a></li>
				</ul>
				<?php //begin.Tab panes ?>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane in active" id="home_only_icon_title"> <b>Home Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile_only_icon_title"> <b>Profile Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
					<div role="tabpanel" class="tab-pane" id="messages_only_icon_title"> <b>Message Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
					<div role="tabpanel" class="tab-pane" id="settings_only_icon_title"> <b>Settings Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php //end.Tabs With Only Icon Title ?> 

<?php //begin.Tabs With Icon Title ?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="header">
				<h2> TABS WITH ICON TITLE </h2>
			</div>
			<div class="body"> 
				<?php //begin.Nav tabs ?>
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_with_icon_title"> <i class="material-icons">home</i> HOME </a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_with_icon_title"><i class="material-icons">person</i> PROFILE </a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages_with_icon_title"><i class="material-icons">email</i> MESSAGES </a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_with_icon_title"><i class="material-icons">settings</i> SETTINGS </a></li>
				</ul>
				
				<?php //begin.Tab panes ?>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane in active" id="home_with_icon_title"> <b>Home Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile_with_icon_title"> <b>Profile Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
					<div role="tabpanel" class="tab-pane" id="messages_with_icon_title"> <b>Message Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
					<div role="tabpanel" class="tab-pane" id="settings_with_icon_title"> <b>Settings Content</b>
						<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
							Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
							pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
							sadipscing mel. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php //end.Tabs With Icon Title ?>

<?php //begin.Tabs With Custom Animations ?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="header">
				<h2> TABS WITH CUSTOM ANIMATIONS <small>You can use different animation class. We used Animation.css which link is <a href="https://daneden.github.io/animate.css/" target="_blank">https://daneden.github.io/animate.css/</a></small> </h2>
			</div>
			<div class="body">
				<div class="row clearfix">
					<div class="col-sm-12 col-md-12 col-lg-12"> 
						<?php //begin.Nav tabs ?>
						<ul class="nav nav-tabs">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_animation_1">HOME</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_animation_1">PROFILE</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages_animation_1">MESSAGES</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_animation_1">SETTINGS</a></li>
						</ul>
						
						<?php //begin.Tab panes ?>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane animated flipInX active" id="home_animation_1"> <b>Home Content</b>
								<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
									Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
									aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
									gubergren sadipscing mel. </p>
							</div>
							<div role="tabpanel" class="tab-pane animated flipInX" id="profile_animation_1"> <b>Profile Content</b>
								<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
									Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
									aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
									gubergren sadipscing mel. </p>
							</div>
							<div role="tabpanel" class="tab-pane animated flipInX" id="messages_animation_1"> <b>Message Content</b>
								<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
									Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
									aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
									gubergren sadipscing mel. </p>
							</div>
							<div role="tabpanel" class="tab-pane animated flipInX" id="settings_animation_1"> <b>Settings Content</b>
								<p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
									Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
									aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
									gubergren sadipscing mel. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php //end.Tabs With Custom Animations ?> 