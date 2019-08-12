<?php
/**
 * @var $this PatientController
 * @var $error array
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	$this->breadcrumbs=array(
		'Patients',
	);
?>

<div class="row clearfix">
	<div class="col-md-12 col-xs-12">
		<div class="card patients-list">
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
								<th>Last Visit</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00598</span></td>
								<td>Daniel</td>
								<td>32</td>
								<td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
								<td>404-447-6013</td>
								<td>11 Aug 2017</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00258</span></td>
								<td>Alexander</td>
								<td>22</td>
								<td>123 6th St. Melbourne, FL 32904</td>
								<td>404-447-6013</td>
								<td>15 Aug 2017</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00369</span></td>
								<td>Richard</td>
								<td>26</td>
								<td>123 6th St. Melbourne, FL 32904</td>
								<td>404-447-6013</td>
								<td>16 Aug 2017</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00147</span></td>
								<td>Samuel</td>
								<td>45</td>
								<td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
								<td>404-447-6013</td>
								<td>17 Aug 2017</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00123</span></td>
								<td>Stephen</td>
								<td>55</td>
								<td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
								<td>404-447-6013</td>
								<td>18 Aug 2017</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00456</span></td>
								<td>Joseph</td>
								<td>27</td>
								<td>70 Bowman St. South Windsor, CT 06074</td>
								<td>404-447-6013</td>
								<td>19 Aug 2017</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00789</span></td>
								<td>Cameron</td>
								<td>38</td>
								<td>123 6th St. Melbourne, FL 32904</td>
								<td>404-447-6013</td>
								<td>19 Aug 2017</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00987</span></td>
								<td>Alex</td>
								<td>39</td>
								<td>123 6th St. Melbourne, FL 32904</td>
								<td>404-447-6013</td>
								<td>20 Aug 2017</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00951</span></td>
								<td>James</td>
								<td>32</td>
								<td>44 Shirley Ave. West Chicago, IL 60185</td>
								<td>404-447-6013</td>
								<td>22 Aug 2017</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00953</span></td>
								<td>charlie</td>
								<td>51</td>
								<td>123 6th St. Melbourne, FL 32904</td>
								<td>404-447-6013</td>
								<td>22 Aug 2017</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00984</span></td>
								<td>William</td>
								<td>35</td>
								<td>123 6th St. Melbourne, FL 32904</td>
								<td>404-447-6013</td>
								<td>22 Aug 2017</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td><span class="list-icon"><img class="patients-img" src="<?php echo Yii::app()->theme->baseUrl;?>/images/avatar.jpg" alt=""></span></td>
								<td><span class="list-name">KU 00934</span></td>
								<td>thomas</td>
								<td>26</td>
								<td>123 6th St. Melbourne, FL 32904</td>
								<td>404-447-6013</td>
								<td>29 Aug 2017</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>