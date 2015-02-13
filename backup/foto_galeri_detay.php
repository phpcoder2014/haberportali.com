
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Ak Parti | Karacabey İlçe Başkanlığı</title>
		<meta name="description" content="">
		<meta name="author" content="Ak Parti | www.karacabeyakparti.org.tr">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Rajdhani|Abel|Open+Sans+Condensed:700|Lora&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		
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
		<div id="bonfire-switcher-wrapper">
		</div>
		<div id="bg" class="hidden-phone">
		<img src="img/assets/bg/kongre_bg.jpg" alt="Ak Parti" />
		</div>


		<!--///////////////////////////// Header Area //////////////////////////////////-->

		<!-- Header Start -->
			<?php require("includes/menu.php"); ?>



		<!--///////////////////////////// Main Content Area //////////////////////////////////-->

		<!-- Main Content Wrapper Start -->
		<div class="container" role="main">
			<!-- Main Content -->
			<section id="main-content" class="row">
							
				<div id="content" class="span9">
				  
					<div class="post-single" id="post">
						<div class="content-outer">
							<div class="content-inner">
								<div id="gallery">
								<h2 style="font-family: 'Rajdhani', sans-serif;">ETKINLIKLER</h2>
									<div class="separator"></div>
									<div id="gallery-list" class="row-fluid" data-toggle="modal-gallery" data-slideshow="5000" data-target="#modal-gallery">
											<?php 
												require('includes/db.php');
												$detay = $_GET['id'];
												$query = $db->query("SELECT * FROM tbl_foto_cat where cat_id ='".$detay."'", PDO::FETCH_ASSOC);
												if ( $query->rowCount() ){
													 foreach( $query as $row ){
													
											?>
										  <a class="gallery-item cat-1" href="img/genclik_kollari/<?php echo $row['alt_resim'];?>" title="ETKINLIK" rel="gallery">
										  <img class="image-polaroid" src="img/genclik_kollari/<?php echo $row['alt_resim'];?>" alt="Thumbnail"></a>
											<?php }}?>							    
									</div>

								</div>
								
							</div>

							<!-- content inner -->
						</div>
						<!-- content outer -->
					</div>				
				</div>
				    <!-- Sidebar Right -->
				<?php require_once("includes/right-sidebar.php"); ?>

			</section>
			<!-- End Main Content -->
		</div>
		<!-- Main Content Wrapper End -->

		<!--///////////////////////////// Footer Area //////////////////////////////////-->
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