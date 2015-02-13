<?php require_once('includes/db.php');?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> 
<html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Ak Parti | Karacabey İlçe Başkanlığı</title>
		<meta name="description" content="">
		<meta name="author" content="Ak Parti | www.karacabeyakparti.org.tr">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Rajdhani|Abel|Open+Sans+Condensed:700|Lora&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<meta name="google-site-verification" content="uKA6-3gAxHu4nP0PTtcuL80DQ8sCbXl7WnFyt2JNfjY" />
		<!-- Styles -->
		<link rel="stylesheet" href="styleswitcher/css/styleswitcher.css">
		<link rel="stylesheet" type="text/css" href="css/frenzy-orange.css" title="frenzy-orange" />

        <script type="text/javascript" src="js/styleswitcher.js"></script>
		
		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="img/ico/photo.png">

		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
		<link rel="stylesheet" type="text/css" href="css/plugins/bootstrap-image-gallery.css">
		<!-- JS Libs -->
		
		<script>window.jQuery || document.write('<script src="js/libs/jquery.js"><\/script>')</script>

		<script src="js/libs/modernizr.js"></script>
		<script src="js/libs/selectivizr-min.js"></script>
		
		<script src="styleswitcher/js/styleswitcher.js"></script>
		<script src="js/bootstrap/bootstrap.js"></script>
		<script src="js/plugins/slides.jquery.js"></script>
		<script type="text/javascript" src="js/plugins/load-image.min.js"></script>
		<script type="text/javascript" src="js/bootstrap/bootstrap-image-gallery.min.js"></script>
		<script src="js/custom.js"></script>

	</head>
	<body style="background-image: url(img/assets/bg/pattern/bg-grid.png);"><br/><br/><br/>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-57811713-1', 'auto');
		  ga('send', 'pageview');
	</script>
		<div id="bonfire-switcher-wrapper"></div>
		<div id="bg" class="hidden-phone">
		<img src="img/assets/bg/kongre_bg.jpg" alt="Ak Parti" />
		</div>

		<!-- Header Start -->
			<?php require("includes/menu.php"); ?>

		<!-- Main Content Wrapper Start -->
		<div class="container" role="main">
			<!-- Main Content -->
			<section id="main-content" class="row">						
							<div id="content" class="span9">
								<h3 style="font-family: 'Open Sans Condensed', sans-serif; text-align:right;">AKPARTİ KARACABEY İLÇE YÖNETİM KURULU</h3>
								<table class="table table-stripped table-bordered">
									<thead>
										<tr>
											<th>SIRA</th>
											<th>GÖREVİ</th>
											<th>ADI SOYADI</th>
										</tr>
									</thead>
									<tbody>
									<?php 
									$query = $db->query("SELECT * FROM tbl_yonetim_kurulu where durum = '3'", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){	
									?>
										<tr>
											<td style="text-align:center;"><?php echo $row['id']; ?></td>
											<td><?php echo $row['gorevi']; ?></td>
											<td><?php echo $row['adi_soyadi']; ?></td>
										</tr>
									<?php }} ?>
									</tbody>
								</table>
									<br/>
								<h3 style="font-family: 'Open Sans Condensed', sans-serif; text-align:right;">AKPARTİ KARACABEY GENÇLİK KOLLARI YÖNETİM KURULU</h3>
								<table class="table table-stripped table-bordered">
									<thead>
										<tr>
											<th>SIRA</th>
											<th>GÖREVİ</th>
											<th>ADI SOYADI</th>
										</tr>
									</thead>
									<tbody>
									<?php 
									$query = $db->query("SELECT * FROM tbl_yonetim_kurulu where durum = '2'", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){	
									?>
										<tr>
											<td style="text-align:center;"><?php echo $row['id']; ?></td>
											<td><?php echo $row['gorevi']; ?></td>
											<td><?php echo $row['adi_soyadi']; ?></td>
										</tr>
									<?php }} ?>
									</tbody>
								</table>									
								<br/>
								<h3 style="font-family: 'Open Sans Condensed', sans-serif; text-align:right;">AKPARTİ KARACABEY KADIN KOLLARI YÖNETİM KURULU</h3>
								<table class="table table-stripped table-bordered">
									<thead>
										<tr>
											<th>SIRA</th>
											<th>GÖREVİ</th>
											<th>ADI SOYADI</th>
										</tr>
									</thead>
									<tbody>
									<?php 
									$query = $db->query("SELECT * FROM tbl_yonetim_kurulu where durum = '2'", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){	
									?>
										<tr>
											<td style="text-align:center;"><?php echo $row['id']; ?></td>
											<td><?php echo $row['gorevi']; ?></td>
											<td><?php echo $row['adi_soyadi']; ?></td>
										</tr>
									<?php }} ?>
									</tbody>
								</table>
							</div>
				<?php require_once("includes/right-sidebar.php"); ?>
			</section>
			<!-- End Main Content -->
		</div>

		<?php require("includes/footer.php"); ?>
		<!-- modal-gallery is the modal dialog used for the image gallery -->
		<div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
		    <div class="modal-header">
		        <a class="close" data-dismiss="modal">&times;</a>
		        <h3 class="modal-title"></h3>
		    </div>
		    <div class="modal-body"><div class="modal-image"></div></div>
		    <div class="modal-footer">
		        <a class="btn btn-primary modal-next">ILERI <i class="icon-arrow-right icon-white"></i></a>
		        <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> GERI</a>
		        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> GOSTERI</a>
		        <a class="btn modal-download" target="_blank"><i class="icon-download"></i> INDIR</a>
		    </div>
		</div>
	</body>
</html>