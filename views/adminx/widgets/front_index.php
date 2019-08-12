<?php
/**
 * @var $this WidgetsController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'More Widgets',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/waitMe/waitMe.css');
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/waitMe/waitMe.js', CClientScript::POS_END); // SWait Me Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jquery-countto/jquery.countTo.js', CClientScript::POS_END); // Jquery CountTo Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jquery-knob/jquery.knob.min.js', CClientScript::POS_END); // Jquery Knob Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jquery-sparkline/jquery.sparkline.js', CClientScript::POS_END); // Sparkline Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/jquery-knob.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/sparkline.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/basic.js', CClientScript::POS_END);
?>

<div class="row clearfix">
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card widget-stat">
			<div class="body">
				<div class="media">
					<div class="media-icon g-bg-cyan">
						<i class="zmdi zmdi-shopping-basket zmdi-hc-2x"></i>
					</div>
					<div class="media-text">
						<span class="title">Total Sales</span>
						<span class="value">1305</span>
					</div>
				</div>
				<p class="media-footer text-success"><i class="zmdi zmdi-caret-up"></i> 13%
					<span>Compared to last week</span>
				</p>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12 ">
		<div class="card widget-stat">
			<div class="body">
				<div class="media">
					<div class="media-icon g-bg-blue">
						<i class="zmdi zmdi-account-o zmdi-hc-2x"></i>
					</div>
					<div class="media-text">
						<span class="title">Visitors </span>
						<span class="value">2,105</span>
					</div>
				</div>
				<p class="media-footer text-success"><i class="zmdi zmdi-caret-up"></i> 18%
					<span>Compared to last month</span>
				</p>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12 ">
		<div class="card widget-stat">
			<div class="body">
				<div class="media">
					<div class="media-icon g-bg-blush2">
						<i class="zmdi zmdi-label zmdi-hc-2x"></i>
					</div>
					<div class="media-text">
						<span class="title">Pageviews</span>
						<span class="value">4,054,876</span>
					</div>
				</div>
				<p class="media-footer text-danger"><i class="zmdi zmdi-caret-down"></i> 12%
					<span>Compared to last Week</span>
				</p>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12 ">
		<div class="card widget-stat">
			<div class="body">
				<div class="media">
					<div class="media-icon g-bg-green">
						<i class="zmdi zmdi-money zmdi-hc-2x"></i>
					</div>
					<div class="media-text">
						<span class="title">Total Revenue</span>
						<span class="value">$63.23M</span>
					</div>
				</div>
				<p class="media-footer text-success"><i class="zmdi zmdi-caret-up"></i> 21%
					<span>Compared to last Year</span>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="header">
				<h2>PATIENTS Status</h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another action</a></li>
							<li><a href="javascript:void(0);">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<p><span class="label label-success">3 Admit</span>
					<span class="label label-default">2 Discharge</span>
				</p>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>PATIENTS</th>
								<th>ADDRESS</th>
								<th>START DATE</th>
								<th>END DATE</th>
								<th>PRIORITY</th>
								<th>PROGRESS</th>
								<th>STATUS</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>John</span></td>
								<td><span class="text-info">70 Bowman St. South Windsor, CT 06074</span></td>
								<td>Sept 13, 2017</td>
								<td>Sept 16, 2017</td>
								<td><span class="label label-warning">MEDIUM</span></td>
								<td><div class="progress m-b-0 m-t-10">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
									</div>
								</td>
								<td><span class="label label-success">Admit</span></td>
							</tr>
							<tr>
								<td>2</td>
								<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Jack Bird</span></td>
								<td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
								<td>Sept 13, 2017</td>
								<td>Sept 22, 2017</td>
								<td><span class="label label-warning">MEDIUM</span></td>
								<td><div class="progress m-b-0 m-t-10">
										<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
									</div>
								</td>
								<td><span class="label label-default">Discharge</span></td>
							</tr>
							<tr>
								<td>3</td>
								<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Dean Otto</span></td>
								<td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
								<td>Sept 13, 2017</td>
								<td>Sept 23, 2017</td>
								<td><span class="label label-warning">MEDIUM</span></td>
								<td><div class="progress m-b-0 m-t-10">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
									</div>
								</td>
								<td><span class="label label-success">Admit</span></td>
							</tr>
							<tr>
								<td>4</td>
								<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Jack Bird</span></td>
								<td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
								<td>Sept 17, 2017</td>
								<td>Sept 16, 2017</td>
								<td><span class="label label-success">LOW</span></td>
								<td><div class="progress m-b-0 m-t-10">
										<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
									</div>
								</td>
								<td><span class="label label-default">Discharge</span></td>
							</tr>
							<tr>
								<td>5</td>
								<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Hughe L.</span></td>
								<td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
								<td>Sept 18, 2017</td>
								<td>Sept 18, 2017</td>
								<td><span class="label label-danger">HIGH</span></td>
								<td><div class="progress m-b-0 m-t-10">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
									</div>
								</td>
								<td><span class="label label-success">Admit</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card">
			<div class="card-body">
				<h4 class="m-t-0">63.5 Gb</h4>
				<p class="text-muted">Traffic this month</p>
				<div class="m-b-0 progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="success">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card">
			<div class="card-body">
				<h4 class="m-t-0">13.8%</h4>
				<p class="text-muted">Server Load</p>
				<div class="m-b-0 progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="danger">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card">
			<div class="card-body">
				<h4 class="m-t-0">$ 13,500</h4>
				<p class="text-muted">Total Sale</p>
				<div class="m-b-0 progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="warning">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card">
			<div class="card-body">
				<h4 class="m-t-0">1,26</h4>
				<p class="text-muted">Total Feedbacks</p>
				<div class="m-b-0 progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="info">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-lg-4 col-md-6 col-sm-12 ">
		<div class="card widget-reports">
			<div class="header">
				<h2>Reports</h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another action</a></li>
							<li><a href="javascript:void(0);">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<table class="table table-hover table-responsive">
					<thead>
						<tr>
							<th>Profile</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Charts</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" class="rounded-circle avatar" alt="profile-image"></td>
							<td>Dean Otto</td>
							<td>Dean Otto</td>
							<td><span class="sparkbar">5,8,6,3,5,9,2,9,4,3</span></td>
						</tr>
						<tr>
							<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" class="rounded-circle avatar" alt="profile-image"></td>
							<td>K. Thornton</td>
							<td>Dean Otto</td>
							<td><span class="sparkbar">10,8,9,3,5,8,5,6,5,4</span></td>
						</tr>
						<tr>
							<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" class="rounded-circle avatar" alt="profile-image"></td>
							<td>Kane D.</td>
							<td>Dean Otto</td>
							<td><span class="sparkbar">7,5,9,3,5,2,5,3,5,7</span></td>
						</tr>
						<tr>
							<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" class="rounded-circle avatar" alt="profile-image"></td>
							<td>Jack Bird</td>
							<td>Dean Otto</td>
							<td><span class="sparkbar">10,8,1,3,3,8,7,7,5,6</span></td>
						</tr>
						<tr>
							<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" class="rounded-circle avatar" alt="profile-image"></td>
							<td>Hughe L.</td>
							<td>Dean Otto</td>
							<td><span class="sparkbar">2,8,9,8,5,1,5,6,9,1</span></td>
						</tr>
						<tr>
							<td><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" class="rounded-circle avatar" alt="profile-image"></td>
							<td>Jack Bird</td>
							<td>Dean Otto</td>
							<td><span class="sparkbar">1,8,2,3,9,8,5,5,9,4</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-md-6 col-sm-12">
		<div class="card">
			<div class="header">
				<h2>Income Analysis <small>18% High then last month</small></h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another action</a></li>
							<li><a href="javascript:void(0);">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
							data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(96, 125, 139)" data-spot-Color="rgb(96, 125, 139, 0.7)"
							data-offset="90" data-width="100%" data-height="125px" data-line-Width="1" data-line-Color="rgb(96, 125, 139, 0.7)"
							data-fill-Color="rgba(96, 125, 139, 0.3)"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
			</div>
		</div>
		<div class="card">
			<div class="header">
				<h2>Income Analysis <small>18% High then last month</small></h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another action</a></li>
							<li><a href="javascript:void(0);">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
							data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(120, 184, 62, 0.7)"
							data-offset="90" data-width="100%" data-height="85px" data-line-Width="1" data-line-Color="rgb(120, 184, 62, 0.7)"
							data-fill-Color="rgba(120, 184, 62, 0.3)"> 6,4,7,6,9,3,3,5,7,4,2,3,7,6 </div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-lg-3 col-md-6 col-sm-12 text-center">
		<div class="card">
			<div class="body">
				<h5 class="m-b-25">Growth Rate%</h5>
				<input type="text" class="knob" value="33" data-width="110" data-height="110" data-thickness="0.10" data-fgColor="#FF9800" readonly>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12 text-center">
		<div class="card">
			<div class="body">
				<h5 class="m-b-25">Bounce Rate%</h5>
				<input type="text" class="knob" value="63" data-width="108" data-height="108" data-thickness="0.10" data-fgColor="#00bcd4" readonly>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12 text-center">
		<div class="card">
			<div class="body">
				<h5 class="m-b-25">Growth Rate%</h5>
				<input type="text" class="knob" value="75" data-width="110" data-height="110" data-thickness="0.10" data-fgColor="#4caf50" readonly>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12 text-center">
		<div class="card">
			<div class="body">
				<h5 class="m-b-25">Bounce Rate%</h5>
				<input type="text" class="knob" value="81" data-width="108" data-height="108" data-thickness="0.10" data-fgColor="#03a9f4" readonly>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card info-box-3 bg-light-green hover-expand-effect">
			<div class="icon"> <i class="material-icons">battery_charging_full</i> </div>
			<div class="content">
				<div class="text">BATTERY</div>
				<div class="number">Charging</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card info-box-3 bg-amber">
			<div class="icon"><i class="zmdi zmdi-bookmark"></i> </div>
			<div class="content">
				<div class="text">BOOKMARKS</div>
				<div class="number count-to" data-from="0" data-to="117" data-speed="1000" data-fresh-interval="20">117</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card info-box-3 bg-cyan hover-zoom-effect">
			<div class="icon"> <i class="material-icons">gps_fixed</i> </div>
			<div class="content">
				<div class="text">LOCATION</div>
				<div class="number">New York</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card info-box-4 hover-zoom-effect">
			<div class="icon"> <i class="material-icons col-blue">devices</i> </div>
			<div class="content">
				<div class="text">CPU USAGE</div>
				<div class="number">80%</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-sm-12">
		<div class="card">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/puppy-1.jpg" alt="Los Angeles" width="1100" height="500">
					</div>
					<div class="carousel-item">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/puppy-1.jpg" alt="Chicago" width="1100" height="500">
					</div>
					<div class="carousel-item">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/puppy-1.jpg" alt="New York" width="1100" height="500">
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
	</div>
</div>