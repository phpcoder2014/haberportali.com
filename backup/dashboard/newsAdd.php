<?php date_default_timezone_set('Europe/Istanbul'); ?>
<?php require_once('includes/date.php'); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>Akparti - Karacabey</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- Tagsinput -->
	<link rel="stylesheet" href="css/plugins/tagsinput/jquery.tagsinput.css">
	<!-- chosen -->
	<link rel="stylesheet" href="css/plugins/chosen/chosen.css">
	<!-- multi select -->
	<link rel="stylesheet" href="css/plugins/multiselect/multi-select.css">
	<!-- timepicker -->
	<link rel="stylesheet" href="css/plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- colorpicker -->
	<link rel="stylesheet" href="css/plugins/colorpicker/colorpicker.css">
	<!-- Datepicker -->
	<link rel="stylesheet" href="css/plugins/datepicker/datepicker.css">
	<!-- Daterangepicker -->
	<link rel="stylesheet" href="css/plugins/daterangepicker/daterangepicker.css">
	<!-- Plupload -->
	<link rel="stylesheet" href="css/plugins/plupload/jquery.plupload.queue.css">
	<!-- select2 -->
	<link rel="stylesheet" href="css/plugins/select2/select2.css">
	<!-- icheck -->
	<link rel="stylesheet" href="css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.slider.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Masked inputs -->
	<script src="js/plugins/maskedinput/jquery.maskedinput.min.js"></script>
	<!-- TagsInput -->
	<script src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
	<!-- Datepicker -->
	<script src="js/plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Daterangepicker -->
	<script src="js/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="js/plugins/daterangepicker/moment.min.js"></script>
	<!-- Timepicker -->
	<script src="js/plugins/timepicker/bootstrap-timepicker.min.js"></script>
	<!-- Colorpicker -->
	<script src="js/plugins/colorpicker/bootstrap-colorpicker.js"></script>
	<!-- Chosen -->
	<script src="js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- MultiSelect -->
	<script src="js/plugins/multiselect/jquery.multi-select.js"></script>
	<!-- CKEditor -->
	<script src="js/plugins/ckeditor/ckeditor.js"></script>
	<!-- PLUpload -->
	<script src="js/plugins/plupload/plupload.full.js"></script>
	<script src="js/plugins/plupload/jquery.plupload.queue.js"></script>
	<!-- Custom file upload -->
	<script src="js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
	<script src="js/plugins/mockjax/jquery.mockjax.js"></script>
	<!-- select2 -->
	<script src="js/plugins/select2/select2.min.js"></script>
	<!-- icheck -->
	<script src="js/plugins/icheck/jquery.icheck.min.js"></script>
	<!-- complexify -->
	<script src="js/plugins/complexify/jquery.complexify-banlist.min.js"></script>
	<script src="js/plugins/complexify/jquery.complexify.min.js"></script>
	<!-- Mockjax -->
	<script src="js/plugins/mockjax/jquery.mockjax.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body class='theme-grey'>
	<?php require_once('includes/navigation.php'); ?>
	<div class="container-fluid" id="content">
		<?php require_once('includes/left_menu.php'); ?>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Ak Parti Karacabey Yönetim Paneli Sistemi</h1>
					</div>
					<div class="pull-right">
						<ul class="minitiles">
							<li class='grey'>
								<a href="#"><i class="icon-cogs"></i></a>
							</li>
							<li class='lightgrey'>
								<a href="#"><i class="icon-globe"></i></a>
							</li>
						</ul>
						<ul class="stats">
							<li class='satgreen'>
								<i class="icon-money"></i>
								<div class="details">
									<span class="big">$324,12</span>
									<span>Balance</span>
								</div>
							</li>
							<li class='lightred'>
								<i class="icon-calendar"></i>
								<div class="details">
									<span class="big">February 22, 2013</span>
									<span>Wednesday, 13:56</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Panel</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="layouts-sidebar-hidden.html">Haber</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="layouts-color.html">Yeni haber ekleme</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#"><i class="icon-remove"></i></a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3><i class="icon-th-list"></i> YENI HABER ekleme paneli</h3>
								</div>
								<div class="box-content nopadding">
									<form action="#" method="POST" class='form-horizontal form-bordered' enctype='multipart/form-data'>
										<div class="control-group">
											<label for="textfield" class="control-label">Haber başlığı</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" class='username-check'>
													<a href="#" class="btn add-on username-check-force"><i class="icon-refresh"></i></a>
												</div>
												<span class="help-block">
													Lütfen girilmemiş bir başlık belirleyiniz.
												</span>
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Haberi yazan</label>
											<div class="controls">
												<div class="input-xlarge">
													<input type="text" class='complexify-me input-block-level'>
													<span class="help-block">
													</span>
												</div>
											</div>
										</div>
										<div class="control-group">
											<label for="autocom" class="control-label">Haber tarihi</label>
											<div class="controls">
												<input type="text" name="newsdate" value="<?php echo "$bugun&nbsp;","$ay_cikti&nbsp;","$yil&nbsp;","&nbsp;$saniye"; ?>">
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Haber etiketleri</label>
											<div class="controls">
												<div class="span12"><input type="text" name="textfield" id="textfield" class="tagsinput" value="PHP,Laravel,Java"></div>
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Haber kategorisi</label>
											<div class="controls">
												<div class="input-xlarge"><select name="select" id="select" class='chosen-select'>
													<option value="1">Slider haberi</option>
													<option value="2">Siyaset haberleri</option>
													<option value="3">Gündem haberleri</option>
													<option value="4">Yerel haberler</option>
												</select></div>
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Haber resmini seç</label>
											<div class="controls">
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div>
														<span class="btn btn-file"><span class="fileupload-new">Resim seç</span><span class="fileupload-exists">Değiştir</span><input type="file" name='imagefile' /></span>
														<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Temizle</a>
													</div>
												</div>
											</div>
										</div>
										<div class="control-group">
											<div class="box">
												<div class="box-title">
													<h3><i class="icon-th"></i> HABER Detaylarını yazınız</h3>
												</div>
												<div class="box-content nopadding">
													<form action="#" method="POST" class='form-wysiwyg'>
														<textarea name="ck" class='ckeditor span12' rows="5"></textarea>
													</form>
												</div>
											</div>
										</div>
										<div class="form-actions">
											<button type="button" class="btn btn-primary"><i class="icon-ok"></i> Haberi Ekle</button>
											<button type="button" class="btn btn-primary"><i class="icon-envelope-alt"></i> Arkadaşına öner</button>
											<button type="button" class="btn btn-primary"><i class="icon-trash"></i> Yayından kaldır</button>
										</div>
									</form>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div></div>
		
	</body>

	</html>