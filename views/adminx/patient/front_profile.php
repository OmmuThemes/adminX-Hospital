<?php
/**
 * @var $this PatientController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'Patients'=>array('index'),
		'Profile',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/flotchartsscripts.bundle.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/flot.js', CClientScript::POS_END);
?>

<div class="row clearfix">
	<div class="col-lg-4 col-md-12 col-sm-12">
		<div class=" card patient-profile">
			<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/image.jpg" class="img-fluid" alt="">
		</div>
		<div class="card xl-khaki">
			<div class="header xl-khaki">
				<h2>About Patient</h2>
			</div>
			<div class="body">
				<strong>Name</strong>
				<p>Will Smith</p>
				<strong>Occupation</strong>
				<p>UI UX Design</p>
				<strong>Email ID</strong>
				<p>will.smith@info.com</p>
				<strong>Phone</strong>
				<p>+123 456 789</p>
				<hr>
				<strong>Address</strong>
				<address>85 Bay Drive, New Port Richey, FL 34653</address>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-md-12 col-sm-12">
		<div class="card">
			<div class="body"> 
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#report">Biography</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Timeline</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#report-chart">ECG Report</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane in active" id="report">
						<div class="wrap-reset">
							<div class="mypost-list">
								<div class="post-box">
									<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
								</div>
								<hr>
								<div class="post-box">
									<h4>General Report</h4>
									<div class="body">
										<ul class="list-unstyled">
											<li>
												<div>Blood Pressure</div>
												<div class="progress m-b-20">
													<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
												</div>
											</li>
											<li>
												<div>Heart Beat</div>
												<div class="progress m-b-20">
													<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
												</div>
											</li>
											<li>
												<div>Haemoglobin</div>
												<div class="progress m-b-20">
													<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
												</div>
											</li>
											<li>
												<div>Sugar</div>
												<div class="progress">
													<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<hr>
								<h4>Education</h4>
								<ul class="dis">
									<li>B.Com from Ski University</li>
									<li>In hac habitasse platea dictumst.</li>
									<li>In hac habitasse platea dictumst.</li>
									<li>Vivamus elementum semper nisi.</li>
									<li>Praesent ac sem eget est egestas volutpat.</li>
								</ul>
								<hr>
								<h4>Past Visit History</h4>
								<ul class="dis">
									<li>Integer tincidunt.</li>
									<li>Praesent vestibulum dapibus nibh.</li>
									<li>Integer tincidunt.</li>
									<li>Praesent vestibulum dapibus nibh.</li>
									<li>Integer tincidunt.</li>
									<li>Praesent vestibulum dapibus nibh.</li>
								</ul>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="timeline">
						<div class="timeline-body">
							<div class="timeline m-border">
								<div class="timeline-item">
									<div class="item-content">
										<div class="text-small">Just now</div>
										<p>Discharge.</p>
									</div>
								</div>
								<div class="timeline-item border-info">
									<div class="item-content">
										<div class="text-small">11:30</div>
										<p>Routine Checkup</p>
									</div>
								</div>
								<div class="timeline-item border-warning border-l">
									<div class="item-content">
										<div class="text-small">10:30</div>
										<p>Operation </p>
									</div>
								</div>
								<div class="timeline-item border-warning">
									<div class="item-content">
										<div class="text-small">3 days ago</div>
										<p>Routine Checkup</p>
									</div>
								</div>
								<div class="timeline-item border-danger">
									<div class="item-content">
										<div class="text--muted">Thu, 10 Mar</div>
										<p>Routine Checkup</p>
									</div>
								</div>
								<div class="timeline-item border-info">
									<div class="item-content">
										<div class="text-small">Sat, 5 Mar</div>
										<p>Routine Checkup</p>
									</div>
								</div>
								<div class="timeline-item border-danger">
									<div class="item-content">
										<div class="text-small">Sun, 11 Feb</div>
										<p>Blood checkup test</p>
									</div>
								</div>
								<div class="timeline-item border-info">
									<div class="item-content">
										<div class="text-small">Thu, 17 Jan</div>
										<p>Admit patient ward no. 21</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="report-chart">
						<h4>ECG Report</h4>
						<div class="stats-row">
								<div class="stat-item col-blue">
									<h6>Pulse <b>76</b></h6></div>
								<div class="stat-item col-blush">
									<h6>BP <b>112</b></h6></div>
							</div>
					   <div id="real_time_chart" class="flot-chart"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>