<?php
/**
 * @var $this UiController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'User Interface (UI)'=>array('index'),
		'Media Object',
	);
?>

<?php //begin.Default Media ?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> DEFAULT MEDIA</h2>
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
				<div class="media mleft">
					<div class="media-left"> <a href="javascript:void(0);"> <img class="media-object" src="http://placehold.it/64x64" width="64" height="64" alt=""> </a> </div>
					<div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
						ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
						turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
						in faucibus.
					</div>
				</div>
				<div class="media mleft">
					<div class="media-left"> <a href="#"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
					<div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
						ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
						turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
						in faucibus.
						<div class="media m-t-20">
							<div class="media-left"> <a href="#"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
							<div class="media-body">
								<h4 class="media-heading">Nested media heading</h4>
								Cras sit amet nibh libero, in gravida nulla. Nulla
								vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum
								in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
								fringilla. Donec lacinia congue felis in faucibus. </div>
						</div>
					</div>
				</div>
				<div class="media mright">
					<div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
						ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
						turpis. </div>
					<div class="media-right"> <a href="#"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
				</div>
				<div class="media mleft">
					<div class="media-left"> <a href="#"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
					<div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
						ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
						turpis. </div>
					<div class="media-right"> <a href="#"> <img class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php //end.Default Media ?>

<?php //begin.Media Alignment ?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
		<div class="card">
			<div class="header">
				<h2> MEDIA ALIGNMENT</h2>
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
				<div class="bs-example" data-example-id="media-alignment">
					<div class="media">
						<div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
						<div class="media-body">
							<h4 class="media-heading">Top aligned media</h4>
							<p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
								commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
								Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
								in faucibus. </p>
							<p> Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
								natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
						</div>
					</div>
					<div class="media">
						<div class="media-left media-middle"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
						<div class="media-body">
							<h4 class="media-heading">Middle aligned media</h4>
							<p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
								commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
								Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
								in faucibus. </p>
							<p> Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
								natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
						</div>
					</div>
					<div class="media">
						<div class="media-left media-bottom"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
						<div class="media-body">
							<h4 class="media-heading">Bottom aligned media</h4>
							<p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
								commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
								Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
								in faucibus. </p>
							<p> Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis
								natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php //end.Media Alignment ?>