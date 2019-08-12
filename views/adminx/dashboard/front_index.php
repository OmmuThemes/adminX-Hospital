<?php
/**
 * @var $this DashboardController
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
		'Dashboard',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/morrisjs/morris.css');
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/sparkline.bundle.js', CClientScript::POS_END); 
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/flotscripts.bundle.js', CClientScript::POS_END); 
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/morrisscripts.bundle.js', CClientScript::POS_END); 
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jquery-knob/jquery.knob.min.js', CClientScript::POS_END); // Jquery Knob Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/countto.bundle.js', CClientScript::POS_END); 
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js', CClientScript::POS_END); 
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jvectormap/jquery-jvectormap-world-mill-en.js', CClientScript::POS_END); 
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/index.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/sparkline.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/jvectormap.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/jquery-knob.js', CClientScript::POS_END);
?>

<div class="row clearfix">
	<div class="col-sm-12">
		<div class="card">
			<div class="body">
				<div class="row clearfix">
					<div class="col-lg-4 col-md-4 col-sm-12 text-center">
						<div class="body">
							<h2 class="number count-to m-t-0" data-from="0" data-to="501" data-speed="1000" data-fresh-interval="700">501</h2>
							<small class="text-muted">New Patient</small>
							<span id="linecustom1">7,8,9,6,5,3,5,8,5,7</span>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 text-center">
						<div class="body">
							<h2 class="number count-to m-t-0" data-from="0" data-to="2501" data-speed="2000" data-fresh-interval="700">2501</h2>
							<small class="text-muted ">Satisfied Patient</small>
							<span id="linecustom2">6,9,8,5,8,5,7,5,9</span>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 text-center">
						<div class="body">
							<h2 class="number count-to m-t-0" data-from="0" data-to="6051" data-speed="2000" data-fresh-interval="700">6051</h2>
							<small class="text-muted">Visitors</small>
							<span id="linecustom3">7,9,7,6,6,3,6,8,4,7</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-sm-12 col-md-12 col-lg-8 col-xl-9">
		<div class="card product-report">
			<div class="header">
				<h2>Hospital Annual Report</h2>
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
				<div class="row clearfix m-b-15">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="icon"><i class="zmdi zmdi-chart-donut"></i></div>
						<div class="col-in">
							<h3 class="counter m-b-0">$4516</h3>
							<small class="text-muted m-t-0">Sales Report</small> </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="icon"><i class="zmdi zmdi-chart"></i></div>
						<div class="col-in">
							<h3 class="counter m-b-0">$6481</h3>
							<small class="text-muted m-t-0">Annual Revenue </small> </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="icon"><i class="zmdi zmdi-card"></i></div>
						<div class="col-in">
							<h3 class="counter m-b-0">$3915</h3>
							<small class="text-muted m-t-0">Monthly Revenue</small> </div>
					</div>
				</div>
				<div id="area_chart" class="graph"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-3">
		<div class="card activities">
			<div class="header">
				<h2>Hospital Activities</h2>
				<small>Hospital</small>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<div class="streamline b-l b-accent">
					<div class="sl-item">
						<div class="sl-content">
							<div class="text-muted-dk">Just now</div>
							<p>Finished task <a href="" class="text-info">#features 4</a>.</p>
						</div>
					</div>
					<div class="sl-item b-info">
						<div class="sl-content">
							<div class="text-muted-dk">11:30</div>
							<p><a href="">@Jessi</a> retwit your post</p>
						</div>
					</div>
					<div class="sl-item b-primary b-l">
						<div class="sl-content">
							<div class="text-muted-dk">10:30</div>
							<p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
						</div>
					</div>
					<div class="sl-item b-warning">
						<div class="sl-content">
							<div class="text-muted-dk">3 days ago</div>
							<p><a href="" class="text-info">Jessi</a> commented your post.</p>
						</div>
					</div>
					<div class="sl-item b-primary b-l">
						<div class="sl-content">
							<div class="text-muted-dk">10:30</div>
							<p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
						</div>
					</div>
					<div class="sl-item b-primary b-l">
						<div class="sl-content">
							<div class="text-muted-dk">10:30</div>
							<p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card top-report">
			<div class="body">
				<h3 class="m-t-0">50.5 Gb</h3>
				<p class="text-muted">Traffic this month</p>
				<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="success">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
				</div>
				<small>4% higher than last month</small>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card top-report">
			<div class="body">
				<h3 class="m-t-0">$ 14,500</h3>
				<p class="text-muted">Total Sale</p>
				<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="warning">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
				</div>
				<small>15% higher than last month</small>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card">
			<div class="body">
				<div class="sparkline" data-type="bar" data-width="97%" data-height="87px" data-bar-Width="5" data-bar-Spacing="5" data-bar-Color="rgb(48, 55, 62)"> 6,7,8,6,7,5,8,5,7,6,8,7,6,7,5,6</div>
				<p class="m-b-0 p-t-10 text-center">bounce rate 46.41%</p>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card">
			<div class="body">
				<div class="sparkline" data-type="bar" data-width="97%" data-height="87px" data-bar-Width="5" data-bar-Spacing="5" data-bar-Color="rgb(120, 184, 62)"> 4,2,8,6,7,6,8,3,5,8,5,6,2,8,6,7,6 </div>
				<p class="m-b-0 p-t-10 text-center">Growth Rate 46.43%</p>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-12 col-lg-12">
		<div class="card visitors-map">
			<div class="header">
				<h2>Global Analytics</h2>
				<small>Hospital</small>
			</div>
			<div class="body">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-8 col-xl-9">
						<div id="world-map-markers" class="jvector-map"></div>
					</div>
					<div class="col-md-12 col-sm-12 col-lg-4 col-xl-3">
						<div class="progress-list">
							<h4>All <span class="badge pull-right bg-green">47%</span></h4>
							<div class="progress-xs not-rounded progress">
								<div class="progress-bar bg-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40%</span> </div>
							</div>
						</div>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text</p>
						<div class="table-responsive">
							<table class="table table-hover">
								<tbody>
									<tr>
										<td>USA</td>
										<td>$2,009</td>
										<td class="text-muted">4.22%</td>
										<td class="text-danger">-0.01%</td>
									</tr>
									<tr>
										<td>Germany</td>
										<td>$3,526</td>
										<td class="text-muted">4.17%</td>
										<td class="text-success">+0.06%</td>
									</tr>
									<tr>
										<td>Australia</td>
										<td>$2,357</td>
										<td class="text-muted">3.15%</td>
										<td class="text-danger">-0.12%</td>
									</tr>
									<tr>
										<td>Canada</td>
										<td>$3,129</td>
										<td class="text-muted">4.01%</td>
										<td class="text-success">+0.07%</td>
										</tr>
									<tr>
										<td>France</td>
										<td>$2,143</td>
										<td class="text-muted">2.80%</td>
										<td class="text-success">+0.06%</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row clearfix">
	<div class="col-sm-12 col-md-12 col-lg-4">
		<div class="card weather l-khaki">
			<div class="body">
				<div class="city">
					<span>sky is clear</span>
					<h3>New York</h3>
					<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/weather/summer.svg" alt="">
				</div>
				<ul class="row days list-unstyled">
					<li>
						<h5>SUN</h5>
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/weather/sky.svg" alt="">
						<span class="degrees">77</span>
					</li>
					<li>
						<h5>MON</h5>
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/weather/rain.svg" alt="">
						<span class="degrees">81</span>
					</li>
					<li>
						<h5>TUE</h5>
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/weather/summer.svg" alt="">
						<span class="degrees">82</span>
					</li>
					<li>
						<h5>WED</h5>
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/weather/summer.svg" alt="">
						<span class="degrees">82</span>
					</li>
					<li>
						<h5>THU</h5>
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/weather/cloudy.svg" alt="">
						<span class="degrees">81</span>
					</li>
					<li>
						<h5>FRI</h5>
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/weather/summer.svg" alt="">
						<span class="degrees">67</span>
					</li>
					<li>
						<h5>SAT</h5>
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/weather/cloudy.svg" alt="">
						<span class="degrees">81</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-4">
		<div class="card">
			<div class="header">
				<h2>Heart Surgeries <small>18% High then last month</small></h2>
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
				<div class="stats-report">
					<div class="stat-item">
					<h5>Overall</h5>
					<b class="col-blue-grey">80.40%</b></div>
					<div class="stat-item">
					<h5>Montly</h5>
					<b class="col-blue-grey">13.00%</b></div>
					<div class="stat-item">
					<h5>Day</h5>
					<b class="col-blue-grey">9.50%</b></div>
				</div>
				<div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
							data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(96, 125, 139)" data-spot-Color="rgb(96, 125, 139, 0.7)"
							data-offset="90" data-width="100%" data-height="93px" data-line-Width="1" data-line-Color="rgb(96, 125, 139, 0.7)"
							data-fill-Color="rgba(96, 125, 139, 0.3)">5,5,8,6,4,7,5,5,7,8</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-4">
		<div class="card">
			<div class="header">
				<h2>Medical Treatment <small>18% High then last month</small></h2>
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
				<div class="stats-report">
					<div class="stat-item">
					<h5>Overall</h5>
					<b class="col-green">84.60%</b></div>
					<div class="stat-item">
					<h5>Montly</h5>
					<b class="col-green">15.40%</b></div>
					<div class="stat-item">
					<h5>Day</h5>
					<b class="col-green">5.10%</b></div>
				</div>
				<div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
							data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(120, 184, 62, 0.7)"
							data-offset="90" data-width="100%" data-height="93px" data-line-Width="1" data-line-Color="rgb(120, 184, 62, 0.7)"
							data-fill-Color="rgba(120, 184, 62, 0.3)">5,8,6,8,7,7,9,6,6,8</div>
			</div>
		</div>
	</div>
</div>

<div class="row clearfix">
	<div class="col-sm-12 col-md-12 col-lg-12">
		<div class="card patients-list home-p">
			<div class="header">
				<h2>New Patients List</h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Media</th>
								<th>Patients ID</th>
								<th>Name</th>
								<th>Age</th>
								<th>Address</th>
								<th>Number</th>
								<th class="hidden-sm">Last Visit</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00456</span></td>
								<td>Joseph</td>
								<td>27</td>
								<td>70 Bowman St. South Windsor, CT 06074</td>
								<td>404-447-6013</td>
								<td class="hidden-sm">19 Aug 2017</td>
								<td><span class="label label-info">New</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00789</span></td>
								<td>Cameron</td>
								<td>38</td>
								<td>123 6th St. Melbourne, FL 32904</td>
								<td>404-447-6013</td>
								<td class="hidden-sm">19 Aug 2017</td>
								<td><span class="label label-info">New</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00987</span></td>
								<td>Alex</td>
								<td>39</td>
								<td>123 6th St. Melbourne, FL 32904</td>
								<td>404-447-6013</td>
								<td class="hidden-sm">20 Aug 2017</td>
								<td><span class="label label-info">New</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00951</span></td>
								<td>James</td>
								<td>32</td>
								<td>44 Shirley Ave. West Chicago, IL 60185</td>
								<td>404-447-6013</td>
								<td class="hidden-sm">22 Aug 2017</td>
								<td><span class="label label-info">New</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00953</span></td>
								<td>charlie</td>
								<td>51</td>
								<td>123 6th St. Melbourne, FL 32904</td>
								<td>404-447-6013</td>
								<td class="hidden-sm">22 Aug 2017</td>
								<td><span class="label label-info">New</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row clearfix">
	<div class="col-sm-12 col-md-6 col-lg-4">
		<div class="card">
			<div class="header">
				<h2>Browser Used</h2>
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
				<div id="donut_chart" class="graph dashboard-donut-chart"></div>
				<div class="sparkline" data-type="bar" data-width="97%" data-height="45px" data-bar-Width="5" data-bar-Spacing="4" data-bar-Color="rgb(0, 0, 0)"> 6,7,8,6,7,5,8,5,6,8,5,6,7,6,8,7,6,7,5,8,5,6</div>
				<p class="m-b-0 p-t-10 text-center">Pageviews 2,105</p>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-4">
		<div class="card current_progress">
			<div class="header">
				<h2>CHAT Box</h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<div class="chat-widget">
					<ul class="chat-scroll-list ">
						<li class="left "> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt="">
							<div class="chat-info"> <a class="name" href="#">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> It was popularised in the 1960s with the release of Letraset sheets containing</span> </div>
						</li>
						<li class="right-chat"> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt="">
							<div class="chat-info"> <a class="name" href="#">Austin</a> <span class="datetime">6:12</span> <span class="message">Richard McClintock, a Latin professor at Hampden-Sydney College</span> </div>
						</li>
						<li class="left"> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt="">
							<div class="chat-info"> <a class="name" href="#">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </span> </div>
						</li>
						<li class="right-chat"> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt="">
							<div class="chat-info"> <a class="name" href="#">Austin</a> <span class="datetime">6:12</span> <span class="message">There are many variations of passages of Lorem Ipsum available,</span> </div>
						</li>
					</ul>
				</div>
				<div class="input-group">
					<div class="form-line">
						<input type="text" class="form-control date" placeholder="Enter your email...">
					</div>
					<span class="input-group-addon"> <i class="material-icons">send</i> </span> </div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-12 col-lg-4">
		<div class="card">
			<div class="header">
				<h2>INBOX</h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
							<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<ul class="inbox-widget list-unstyled clearfix">
					<li class="inbox-inner"> <a href="#">
						<div class="inbox-item">
							<div class="inbox-img"> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""> </div>
							<div class="inbox-item-info">
								<p class="author">Aaron	Enlightened</p>
								<p class="inbox-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
								<p class="inbox-date">13:34 PM</p>
							</div>
						</div>
						</a> </li>
					<li class="inbox-inner"> <a href="#">
						<div class="inbox-item">
							<div class="inbox-img"> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""> </div>
							<div class="inbox-item-info">
								<p class="author">Alvin Doe</p>
								<p class="inbox-message">Lorem Ipsum is simply dummy text oftting industry. Lorem Ipsum has been the industry's</p>
								<p class="inbox-date">13:34 PM</p>
							</div>
						</div>
						</a> </li>
					<li class="inbox-inner"> <a href="#">
						<div class="inbox-item">
							<div class="inbox-img"> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""> </div>
							<div class="inbox-item-info">
								<p class="author">Austin</p>
								<p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
								<p class="inbox-date">13:34 PM</p>
							</div>
						</div>
						</a> </li>
					<li class="inbox-inner"> <a href="#">
						<div class="inbox-item">
							<div class="inbox-img"> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""> </div>
							<div class="inbox-item-info">
								<p class="author">John Benjamin</p>
								<p class="inbox-message">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
								<p class="inbox-date">13:34 PM</p>
							</div>
						</div>
						</a> </li>
					<li class="inbox-inner"> <a href="#">
						<div class="inbox-item">
							<div class="inbox-img"> <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""> </div>
							<div class="inbox-item-info">
								<p class="author">Broderick</p>
								<p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
								<p class="inbox-date">13:34 PM</p>
							</div>
						</div>
						</a> </li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="row clearfix">
	<div class="col-sm-12 col-md-12">
		<div class="card">
			<div class="body" id="footer">
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-4">
						<h5>Email Newsletters</h5>
						<p>Sign up for new MaterialWrap content, updates, and offers.</p>
						<form class="admin-x input-group">
							<div class="form-line">
								<input type="text" class="form-control date" placeholder="Enter your email...">
							</div>
							<span class="input-group-addon"> <i class="material-icons">send</i> </span>
						</form>
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
						<p class="copy m-b-0">© Copyright
							<time class="year">2017</time>
							WrapTheme  - All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>