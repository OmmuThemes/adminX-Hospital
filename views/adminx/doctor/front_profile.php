<?php
/**
 * @var $this DoctorController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'Doctors'=>array('index'),
		'Profiles',
	);
?>

<div class="row profile-page">
	<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="card xl-blue text-center">
			<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/team_member.png" class="" alt="profile-image">
		</div>
		<div class="card l-blue">
			<div class="profile-sub-header">
				<ul class="text-center">
					<li><a href="#"><i class="zmdi zmdi-phone"></i><p>Call</p></a></li>
					<li> <a href="mail-inbox.html" class=""><i class="zmdi zmdi-email"></i><p>My Inbox</p></a></li>
					<li> <a href="image-gallery.html" class=""><i class="zmdi zmdi-camera"></i><p>Gallery</p></a></li>
					<li> <a href="doctor-schedule.html"><i class="zmdi zmdi-format-subject"></i><p>Schedule</p></a></li>
				</ul>
			</div>
		</div>
		<div class="card xl-parpl">
			<div class="header xl-parpl">
					<h2>General</h2>
				</div>
			<div class="body">
				<div class="profile-info">
					<ul class="list-unstyled">
						<li>
							<i class="zmdi zmdi-label"></i>
							<div class="p-i-list">
								<span class="text-muted">Position</span>
								Dentist
							</div>
						</li>
						<li>
							<i class="zmdi zmdi-hospital"></i>
							<div class="p-i-list">
								<span class="text-muted">Hospital</span>
								Cleveland Clinic
							</div>
						</li>
						<li>
							<i class="zmdi zmdi-smartphone"></i>
							<div class="p-i-list">
								<span class="text-muted">Mobile Number</span>
								(+880) 123456
							</div>
						</li>
						<li>
							<i class="zmdi zmdi-phone"></i>
							<div class="p-i-list">
								<span class="text-muted">Home Number</span>
								(+880) 123456
							</div>
						</li>
						<li>
							<i class="zmdi zmdi-email"></i>
							<div class="p-i-list">
								<span class="text-muted">E-mail</span>
								ClevelandClinict@gmail.net
							</div>
						</li>
						<li>
							<i class="zmdi zmdi-pin"></i>
							<div class="p-i-list">
								<span class="text-muted">Address</span>
								795 Folsom Ave, Suite 600 San Francisco, CADGE 94107
							</div>
						</li>
							
					</ul>
				</div>
			</div>
		</div>
		<div class="card xl-parpl">
			<div class="header xl-parpl">
				<h2>About Me</h2>
			</div>
			<div class="body">
				<p class="text-default">Lorem Ipsum is simply dummy text of the printing an specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<small>Designer <cite title="Source Title">Source Title</cite></small>
				</blockquote>
			</div>
		</div>
		<div class="card">
			<div class="header">
				<h2>My Portfolio Status</h2>
			</div>
			<div class="body">
				<ul class="list-unstyled">
					<li>
						<div>Behance</div>
						<div class="progress m-b-20">
							<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
						</div>
					</li>
					<li>
						<div>Themeforest</div>
						<div class="progress m-b-20">
							<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
						</div>
					</li>
					<li>
						<div>Dribbble</div>
						<div class="progress m-b-20">
							<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
						</div>
					</li>
					<li>
						<div>Pinterest</div>
						<div class="progress">
							<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12">
		<div class="card">
			<div class="body"> 
				<!-- Nav tabs -->
				<ul class="nav nav-tabs tab-nav-right" role="tablist">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">My Post</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Activities</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Setting</a></li>
				</ul>
				
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane in active" id="mypost">
						<div class="wrap-reset">
							<form class="admin-x mypost-form">
								<div class="form-group">
									<div class="form-line">
										<textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
									</div>
								</div>
								<div class="post-toolbar-b"> <a href="#" tooltip="Add File" class="btn btn-raised btn-default btn-sm"><i class="zmdi zmdi-attachment"></i></a> <a href="#" tooltip="Add Image" class="btn btn-raised btn-default btn-sm"><i class="zmdi zmdi-camera"></i></a> <a href="#" class="pull-right btn btn-raised btn-success btn-sm" tooltip="Post it!">Post</a> </div>
							</form>
							<div class="mypost-list">
								<div class="post-box"> <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 3 minutes ago</span>
									<div class="post-img"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/puppy-1.jpg" class="img-fluid" alt /></div>
									<div>
										<h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
										<p> <a href="" class="btn btn-raised btn-info btn-sm"><i class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a href="" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
									</div>
								</div>
								<hr>
								<div class="post-box"> <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 23 minutes ago</span>
									<div class="post-img"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/puppy-2.jpg" class="img-fluid" alt /></div>
									<div>
										<h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
										<p> <a href="" class="btn btn-raised btn-info btn-sm"><i class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a href="" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
									</div>
								</div>
								<hr>
								<div class="post-box"> <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 45 minutes ago</span>
									<div class="post-img"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/puppy-3.jpg" class="img-fluid" alt /></div>
									<div>
										<h4 class="">Lorem Ipsum is simply dummy text of the printing</h4>
										<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
										<p> <a href="" class="btn btn-raised btn-info btn-sm"><i class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a href="" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
									</div>
								</div>
								<hr>
								<div class="text-center"> <a href="#" class="btn btn-raised btn-default">Load More …</a> </div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="timeline">
						<div class="timeline-body">
							<div class="timeline m-border">
								<div class="timeline-item">
									<div class="item-content">
										<div class="text-small">Just now</div>
										<p>Finished task #features 4.</p>
									</div>
								</div>
								<div class="timeline-item border-info">
									<div class="item-content">
										<div class="text-small">11:30</div>
										<p>@Jessi retwit your post</p>
									</div>
								</div>
								<div class="timeline-item border-warning border-l">
									<div class="item-content">
										<div class="text-small">10:30</div>
										<p>Call to customer #Jacob and discuss the detail.</p>
									</div>
								</div>
								<div class="timeline-item border-warning">
									<div class="item-content">
										<div class="text-small">3 days ago</div>
										<p>Jessi commented your post.</p>
									</div>
								</div>
								<div class="timeline-item border-danger">
									<div class="item-content">
										<div class="text--muted">Thu, 10 Mar</div>
										<p>Trip to the moon</p>
									</div>
								</div>
								<div class="timeline-item border-info">
									<div class="item-content">
										<div class="text-small">Sat, 5 Mar</div>
										<p>Prepare for presentation</p>
									</div>
								</div>
								<div class="timeline-item border-danger">
									<div class="item-content">
										<div class="text-small">Sun, 11 Feb</div>
										<p>Jessi assign you a task #Mockup Design.</p>
									</div>
								</div>
								<div class="timeline-item border-info">
									<div class="item-content">
										<div class="text-small">Thu, 17 Jan</div>
										<p>Follow up to close deal</p>
									</div>
								</div>
								<div class="timeline-item">
									<div class="item-content">
										<div class="text-small">Just now</div>
										<p>Finished task #features 4.</p>
									</div>
								</div>
								<div class="timeline-item border-info">
									<div class="item-content">
										<div class="text-small">11:30</div>
										<p>@Jessi retwit your post</p>
									</div>
								</div>
								<div class="timeline-item border-warning border-l">
									<div class="item-content">
										<div class="text-small">10:30</div>
										<p>Call to customer #Jacob and discuss the detail.</p>
									</div>
								</div>
								<div class="timeline-item border-warning">
									<div class="item-content">
										<div class="text-small">3 days ago</div>
										<p>Jessi commented your post.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="usersettings">
						<div class="body">
							<h2 class="card-inside-title">Security Settings</h2>
							<div class="row clearfix">
								<form class="admin-x col-sm-12">
									<div class="form-group">
										<div class="form-line">
											<input type="text" class="form-control" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
											<input type="password" class="form-control" placeholder="Current Password">
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
											<input type="password" class="form-control" placeholder="New Password">
										</div>
									</div>
									<button class="btn btn-raised btn-success btn-sm">Save Changes</button>
								</form>
							</div>
							<h2 class="card-inside-title">Account Settings</h2>
							<div class="clearfix">
								<form class="admin-x row">
									<div class="col-md-6 col-xs-12">
										<div class="form-group">
											<div class="form-line">
												<input type="text" class="form-control" placeholder="First Name">
											</div>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="form-group">
											<div class="form-line">
												<input type="text" class="form-control" placeholder="Last Name">
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<div class="form-line">
												<textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-xs-12">
										<div class="form-group">
											<div class="form-line">
												<input type="text" class="form-control" placeholder="City">
											</div>
										</div>
									</div>
									<div class="col-md-4 col-xs-12">
										<div class="form-group">
											<div class="form-line">
												<input type="text" class="form-control" placeholder="E-mail">
											</div>
										</div>
									</div>
									<div class="col-md-4 col-xs-12">
										<div class="form-group">
											<div class="form-line">
												<input type="text" class="form-control" placeholder="Country">
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												<span class="checkbox-material"><span class="check"></span></span> Profile Visibility For Everyone </label>
										</div>
									</div>
									<div class="col-sm-12">
										<button class="btn btn-raised btn-success">Save Changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>