<?php
/**
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 28 November 2017, 13:27 WIB
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */

	Yii::import('webroot.themes.'.Yii::app()->theme->name.'.components.*');
	$module = strtolower(Yii::app()->controller->module->id);
	$controller = strtolower(Yii::app()->controller->id);
	$action = strtolower(Yii::app()->controller->action->id);
	$currentAction = strtolower(Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
	$currentModule = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id);
	$currentModuleAction = strtolower(Yii::app()->controller->module->id.'/'.Yii::app()->controller->id.'/'.Yii::app()->controller->action->id);
	
	/**
	 * = Global condition
	 ** Construction condition
	 */
	$setting = OmmuSettings::model()->findByPk(1,array(
		'select' => 'site_oauth, site_title',
	));

	/**
	 * = Dialog Condition
	 */
	if($this->dialogDetail == true)
		$dialogWidth = !empty($this->dialogWidth) ? $this->dialogWidth.'px' : '650px';
	else
		$dialogWidth = '';
	$display = ($this->dialogDetail == true && !Yii::app()->request->isAjaxRequest) ? 'style="display: block;"' : '';
	
	/**
	 * = pushState condition
	 */
	$title = CHtml::encode($this->pageTitle).' | '.$setting->site_title;
	$description = $this->pageDescription;
	$keywords = $this->pageMeta;
	$urlAddress = Utility::getProtocol().'://'.Yii::app()->request->serverName.Yii::app()->request->requestUri;

	//if(Yii::app()->request->isAjaxRequest && !Yii::app()->getRequest()->getParam('ajax')) {
		/*
		if(Yii::app()->session['theme_active'] != Yii::app()->theme->name) {
			$return = array(
				'redirect' => $urlAddress,
			);

		} else {
			$page = $this->contentOther == true ? 1 : 0;
			$dialog = $this->dialogDetail == true ? (empty($this->dialogWidth) ? 1 : 2) : 0;		// 0 = static, 1 = dialog, 2 = notifier
			$header = $this->widget('MenuMain', array(), true);
			
			if($this->contentOther == true) {
				$render = array(
					'content' => $content, 
					'other' => $this->contentAttribute,
				);
			} else {
				$render = $content;
			}
			$return = array(
				'title' => $title,
				'description' => $description,
				'keywords' => $keywords,
				'address' => $urlAddress,
				'dialogWidth' => $dialogWidth,
			);
			$return['page'] = $page;
			$return['dialog'] = $dialog;
			$return['header'] = $this->dialogDetail != true ? $header : '';
			$return['render'] = $render;
			$return['script'] = $cs=Yii::app()->getClientScript()->getOmmuScript();
		}
		echo CJSON::encode($return);
		*/

	//} else {
		$cs = Yii::app()->getClientScript();
		$cs->registerCssFile(Yii::app()->theme->baseUrl.'/css/bootstrap.min.css');
		$cs->registerCssFile('https://fonts.googleapis.com/icon?family=Material+Icons');
		$cs->registerCssFile(Yii::app()->theme->baseUrl.'/css/main.css');
		$cs->registerCssFile(Yii::app()->theme->baseUrl.'/css/all-themes.css'); // choose a theme from css/themes instead of get all themes
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/libscripts.bundle.js', CClientScript::POS_BEGIN); // Bootstrap JS and jQuery v3.2.1
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/vendorscripts.bundle.js', CClientScript::POS_BEGIN); // slimscroll, waves Scripts Plugin Js
		$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/mainscripts.bundle.js', CClientScript::POS_END); // Custom Js
		Yii::app()->clientScript->scriptMap=array(
			'jquery.js'=>false,
		);
	?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title><?php echo $title;?></title>
  <meta name="author" content="Ommu Platform (support@ommu.co)" />
  <?php echo preg_replace('({baseUrl})', Yii::app()->request->baseUrl, $this->themeSetting['script']['desc']);?>
  <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl;?>/favicon.ico" />
 </head>
 <body class="theme-cyan <?php echo $currentAction == 'dashboard/rtl' ? 'rtl' : '';?>">

	<?php echo $content;?>
	<?php $this->widget('ComGoogleAnalytics'); ?>

	<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
				</div>
				<div class="modal-body"></div>
				<div class="modal-footer">
					<button id="modalSubmit" type="button" class="btn btn-raised btn-primary waves-effect">NEXT</button>
					<button id="modalCancel" type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
			</div>
		</div>
	</div>
 </body>
</html>

<?php //}?>