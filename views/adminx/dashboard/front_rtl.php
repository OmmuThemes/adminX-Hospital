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
		'RTL Dashboard',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/morrisjs/morris.css');
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/css/rtl.css');
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jquery-sparkline/jquery.sparkline.js', CClientScript::POS_END); // Sparkline Plugin
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/chart.js/Chart.bundle.min.js', CClientScript::POS_END); // Chart Plugins Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/morrisjs/morris.js', CClientScript::POS_END); // Morris Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/sparkline.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/chartjs.js', CClientScript::POS_END);
?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="header">
				<h2>hello السلام عليكم</h2>
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
				<p>أبجد هوز هو مجرد دمية النص من صناعة الطباعة والتنضيد. وكان أبجد هوز نص الدمية القياسية في هذه الصناعة من أي وقت مضى منذ 1500s، عندما استغرقت طابعة غير معروفة المطبخ من نوع وسارعت لجعل كتاب عينة نوع. وقد نجا ليس فقط خمسة قرون، ولكن أيضا قفزة في التنضيد الإلكترونية، وتبقى دون تغيير أساسا. وقد شاع في 1960s مع الافراج عن أوراق ليتراسيت تحتوي على مقاطع أبجد هوز، ومؤخرا مع برامج النشر المكتبي مثل ألدوس باجيماكر بما في ذلك إصدارات أبجد هوز.</p>
			</div>
		</div>
	</div>
</div>

<div class="row clearfix">
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card">
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
		<div class="card">
			<div class="body">
				<h3 class="m-t-0">26.8%</h3>
				<p class="text-muted">Server Load</p>
				<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="32" type="danger">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>
				</div>
				<small>4% higher than last month</small>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card">
			<div class="body">
				<h3 class="m-t-0">$ 14,500</h3>
				<p class="text-muted">Total Sale</p>
				<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="warning">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
				</div>
				<small>15% higher than last month</small> </div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-12">
		<div class="card">
			<div class="body">
				<h3 class="m-t-0">1,600</h3>
				<p class="text-muted">Total Feedbacks</p>
				<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="info">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
				</div>
				<small>10% higher than last month</small> </div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-lg-8 col-md-12">
		<div class="card">
			<div class="header">
				<h2>PRODUCT REPORT</h2>
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
				<canvas id="line_chart" height="150"></canvas>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-12">
		<div class="card">
			<div class="header">
				<h2>Income Analysis<small>18% High then last month</small></h2>
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
						 data-offset="90" data-width="100%" data-height="132px" data-line-Width="1" data-line-Color="rgb(96, 125, 139, 0.7)"
						 data-fill-Color="rgba(96, 125, 139, 0.3)"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
			</div>
		</div>
		<div class="card">
			<div class="header">
				<h2>INCOME ANALYSIS</h2>
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
				<div class="sparkline" data-type="bar" data-width="97%" data-height="85px" data-bar-Width="5" data-bar-Spacing="4" data-bar-Color="rgb(0, 0, 0)"> 6,7,8,6,7,5,8,5,6,8,5,6,7,6,8,7,6,7,5,8,5,6</div>
				<p class="m-b-0 p-t-10 text-center">Last Year 2016</p>
			</div>
		</div> 
	</div>
</div>

<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="header">
				<h2>Social Media</h2>
				<small>Lorem Ipsum is simply dummy</small>
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
				<div class="table-responsive social_media_table">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Media</th>
								<th>Name</th>
								<th>Like</th>
								<th>Comments</th>
								<th>Share</th>
								<th>Members</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="list-icon linkedin"><i class="zmdi zmdi-linkedin"></i></span>
								</td>
								<td><span class="list-name">Linked In</span>
									<span class="text-muted">Florida, United States</span>
								</td>
								<td>19K</td>
								<td>14K</td>
								<td>10K</td>
								<td>
									<span class="label label-success">2341</span>
								</td>
							</tr>
							<tr>
								<td><span class="list-icon twitter-table"><i class="zmdi zmdi-twitter"></i></span>
								</td>
								<td><span class="list-name">Twitter</span>
									<span class="text-muted">Arkansas, United States</span>
								</td>
								<td>7K</td>
								<td>11K</td>
								<td>21K</td>
								<td>
									<span class="label label-success">952</span>
								</td>
							</tr>
							<tr>
								<td><span class="list-icon facebook"><i class="zmdi zmdi-facebook"></i></span>
								</td>
								<td><span class="list-name">Facebook</span>
									<span class="text-muted">Illunois, United States</span>
								</td>
								<td>15K</td>
								<td>18K</td>
								<td>8K</td>
								<td>
									<span class="label label-success">6127</span>
								</td>
							</tr>
							<tr>
								<td><span class="list-icon google"><i class="zmdi zmdi-google-plus"></i></span>
								</td>
								<td><span class="list-name">Google Plus</span>
									<span class="text-muted">Arizona, United States</span>
								</td>
								<td>15K</td>
								<td>18K</td>
								<td>154</td>
								<td>
									<span class="label label-success">325</span>
								</td>
							</tr>
							<tr>
								<td><span class="list-icon youtube"><i class="zmdi zmdi-youtube-play"></i></span>
								</td>
								<td><span class="list-name">YouTube</span>
									<span class="text-muted">Alaska, United States</span>
								</td>
								<td>15K</td>
								<td>18K</td>
								<td>200</td>
								<td>
									<span class="label label-success">160</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
</div>

<div class="row clearfix">
	<div class="col-sm-12 col-md-12">
		<div class="card">
			<div class="body" id="footer">
				<div class="row">
					<div class="col-lg-4 col-sm-12 col-md-6">
						<h5>Email Newsletters</h5>
						<p>Sign up for new MaterialWrap content, updates, and offers.</p>
						<form class="admin-x input-group">
							<div class="form-line">
								<input type="text" class="form-control date" placeholder="أدخل بريدك الإلكتروني...">
							</div>
							<span class="input-group-addon"> <i class="material-icons">send</i> </span>
						</form>
					</div>
					<div class="col-lg-2 col-sm-12 col-md-6">
						<h5>Company</h5>
						<ul class="list-unstyled company">
							<li><a href="javascript:void(0)">About Us </a></li>
							<li><a href="javascript:void(0)">Careers</a></li>
							<li><a href="javascript:void(0)">Privacy Policy</a></li>
							<li><a href="javascript:void(0)">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-lg-6 col-sm-12 col-md-12">
						<h5>تريد أن تعمل معنا؟</h5>
						<p>أبجد هوز هو مجرد دمية النص من صناعة الطباعة والتنضيد. وكان أبجد هوز نص الدمية القياسية في هذه الصناعة من أي وقت مضى منذ 1500s، عندما استغرقت طابعة غير معروفة المطبخ من نوع وسارعت لجعل كتاب عينة نوع. وقد نجا ليس فقط خمسة قرون، ولكن أيضا قفزة في التنضيد الإلكترونية، وتبقى دون تغيير أساسا.</p>
					</div>
					<div class="col-sm-12">
						<p class="copy m-b-0">© Copyright
							<time class="year">2017</time>
							WrapTheme - All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>