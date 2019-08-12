<?php
/**
 * @var $this ReportsController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'Reports',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/morrisjs/morris.css');
	$cs->registerCssFile(Yii::app()->theme->baseUrl.'/plugins/h-timeline/h-timeline.css');
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/jquery-sparkline/jquery.sparkline.js', CClientScript::POS_END); // Sparkline Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/raphael/raphael.min.js', CClientScript::POS_END); // Morris Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/morrisjs/morris.js', CClientScript::POS_END); // Morris Plugin Js
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/h-timeline/h-timeline.js', CClientScript::POS_END); // Resource jQuery
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/index2.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/sparkline.js', CClientScript::POS_END);
?>

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
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card product-report">
			<div class="header">
				<h2>Product Report</h2>
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
				<div class="row clearfix m-b-25">
					<div class="col-lg-4 col-md-4 col-sm-4 text-center">
						<h3 class="counter m-b-0">$4516</h3>
						<small class="text-muted">Sales Report</small>
						<div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="5" data-bar-Spacing="4" data-bar-Color="rgb(134, 139, 239)"> 6,7,8,6,7,5,8,5,6,8,5,6,7,6,8,7,6,7,5,8,5,6</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 text-center">
						<h3 class="counter m-b-0">$6481</h3>
						<small class="text-muted">Annual Revenue </small>
						<div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="5" data-bar-Spacing="4" data-bar-Color="rgb(25, 161, 183)"> 6,7,8,6,7,5,8,5,6,8,5,6,7,6,8,7,6,7,5,8,5,6</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 text-center">
						<h3 class="counter m-b-0">$3915</h3>
						<small class="text-muted">Monthly Revenue</small>
						<div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="5" data-bar-Spacing="4" data-bar-Color="rgb(254, 191, 15)"> 6,7,8,6,7,5,8,5,6,8,5,6,7,6,8,7,6,7,5,8,5,6</div>
					</div>
				</div>
				<div id="area_chart" class="graph"></div>
			</div>
		</div>
	</div>
</div>

<div class="row clearfix">
	<div class="col-sm-12 col-md-12 col-lg-8">
		<div class="card">
			<div class="header">
				<h2>Timeline</h2>
			</div>
			<div class="body">
				<div class="cd-horizontal-timeline">
					<div class="timeline">
						<div class="events-wrapper">
							<div class="events">
								<ol class="list-unstyled">
									<li><a href="#0" data-date="16/01/2017" class="selected">16 Jan</a></li>
									<li><a href="#0" data-date="28/02/2017">28 Feb</a></li>
									<li><a href="#0" data-date="20/04/2017">20 Mar</a></li>
									<li><a href="#0" data-date="20/05/2017">20 May</a></li>
									<li><a href="#0" data-date="09/07/2017">09 Jul</a></li>
									<li><a href="#0" data-date="30/08/2017">30 Aug</a></li>
									<li><a href="#0" data-date="15/09/2017">15 Sep</a></li>
									<li><a href="#0" data-date="01/11/2017">01 Nov</a></li>
									<li><a href="#0" data-date="10/12/2017">10 Dec</a></li>
								</ol>

								<span class="filling-line" aria-hidden="true"></span>
							</div> <!-- .events -->
						</div> <!-- .events-wrapper -->
							
						<ul class="cd-timeline-navigation list-unstyled">
							<li><a href="#0" class="prev inactive">Prev</a></li>
							<li><a href="#0" class="next">Next</a></li>
						</ul> <!-- .cd-timeline-navigation -->
					</div> <!-- .timeline -->

					<div class="events-content">
						<ol class="list-unstyled">
							<li class="selected" data-date="16/01/2017">
								<div class="media">
									<div class="media-left"> <a href="javascript:void(0);"> <img class="media-object" src="http://placehold.it/64x64" width="85" height="85" alt=""> </a> </div>
									<div class="media-body">
										<h4 class="media-heading">Horizontal Timeline</h4>
										<em>January 16th, 2017</em>
										<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. ras purus odio, vestibulum in vulputate at, tempus viverra turpis.<p>
									</div>
								</div>
							</li>
							<li data-date="28/02/2017">
								<div class="media">
									<div class="media-left"> <a href="javascript:void(0);"> <img class="media-object" src="http://placehold.it/64x64" width="85" height="85" alt=""> </a> </div>
									<div class="media-body">
										<h4 class="media-heading">Event title here</h4>
										<em>February 28th, 2017</em>
										<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. ras purus odio, vestibulum in vulputate at, tempus viverra turpis.<p>
									</div>
								</div>
							</li>
							<li data-date="20/04/2017">
								<div class="media">
									<div class="media-left"> <a href="javascript:void(0);"> <img class="media-object" src="http://placehold.it/64x64" width="85" height="85" alt=""> </a> </div>
									<div class="media-body">
										<h4 class="media-heading">Event title here</h4>
										<em>March 20th, 2017</em>
										<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. ras purus odio, vestibulum in vulputate at, tempus viverra turpis.<p>
									</div>
								</div>
							</li>
							<li data-date="20/05/2017">
								<div class="media">
									<div class="media-left"> <a href="javascript:void(0);"> <img class="media-object" src="http://placehold.it/64x64" width="85" height="85" alt=""> </a> </div>
									<div class="media-body">
										<h4 class="media-heading">Event title here</h4>
										<em>May 20th, 2017</em>
										<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. ras purus odio, vestibulum in vulputate at, tempus viverra turpis.<p>
									</div>
								</div>
							</li>
							<li data-date="09/07/2017">
								<div class="media">
									<div class="media-left"> <a href="javascript:void(0);"> <img class="media-object" src="http://placehold.it/64x64" width="85" height="85" alt=""> </a> </div>
									<div class="media-body">
										<h4 class="media-heading">Event title here</h4>
										<em>July 9th, 2017</em>
										<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. ras purus odio, vestibulum in vulputate at, tempus viverra turpis.<p>
									</div>
								</div>
							</li>
							<li data-date="30/08/2017">
								<div class="media">
									<div class="media-left"> <a href="javascript:void(0);"> <img class="media-object" src="http://placehold.it/64x64" width="85" height="85" alt=""> </a> </div>
									<div class="media-body">
										<h4 class="media-heading">Event title here</h4>
										<em>August 30th, 2017</em>
										<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. ras purus odio, vestibulum in vulputate at, tempus viverra turpis.<p>
									</div>
								</div>
							</li>
							<li data-date="15/09/2017">
								<div class="media">
									<div class="media-left"> <a href="javascript:void(0);"> <img class="media-object" src="http://placehold.it/64x64" width="85" height="85" alt=""> </a> </div>
									<div class="media-body">
										<h4 class="media-heading">Event title here</h4>
										<em>September 15th, 2017</em>
										<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. ras purus odio, vestibulum in vulputate at, tempus viverra turpis.<p>
									</div>
								</div>
							</li>
							<li data-date="01/11/2017">
								<div class="media">
									<div class="media-left"> <a href="javascript:void(0);"> <img class="media-object" src="http://placehold.it/64x64" width="85" height="85" alt=""> </a> </div>
									<div class="media-body">
										<h4 class="media-heading">Event title here</h4>
										<em>November 1st, 2017</em>
										<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. ras purus odio, vestibulum in vulputate at, tempus viverra turpis.<p>
									</div>
								</div>
							</li>
							<li data-date="10/12/2017">
								<div class="media">
									<div class="media-left"> <a href="javascript:void(0);"> <img class="media-object" src="http://placehold.it/64x64" width="85" height="85" alt=""> </a> </div>
									<div class="media-body">
										<h4 class="media-heading">Event title here</h4>
										<em>December 10th, 2017</em>
										<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. ras purus odio, vestibulum in vulputate at, tempus viverra turpis.<p>
									</div>
								</div>
							</li>
						</ol>
					</div> <!-- .events-content -->
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-12 col-sm-12 ">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-6 ">
				<div class="card">
					<div class="header">
						<h2>Last Month Income Analysis <small>18% High then last month</small></h2>
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
								 data-offset="90" data-width="100%" data-height="70px" data-line-Width="1" data-line-Color="rgb(96, 125, 139, 0.7)"
								 data-fill-Color="rgba(96, 125, 139, 0.3)"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-6 ">
				<div class="card">
					<div class="header">
						<h2>2017 Income Analysis <small>28% High then last Year</small></h2>
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
								 data-offset="90" data-width="100%" data-height="75px" data-line-Width="1" data-line-Color="rgb(120, 184, 62, 0.7)"
								 data-fill-Color="rgba(120, 184, 62, 0.3)"> 6,4,7,6,9,3,3,5,7,4,2,3,7,6 </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row clearfix">
	<div class=" col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="header">
				<h2>Social Media</h2>
				<small>Lorem Ipsum is simply dummy</small>
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
</div>