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
		<link href='http://fonts.googleapis.com/css?family=Rajdhani|Abel|Lora|Slabo+27px|Noto+Sans|Open+Sans+Condensed:700|Lora&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<meta name="google-site-verification" content="uKA6-3gAxHu4nP0PTtcuL80DQ8sCbXl7WnFyt2JNfjY" />

		<!-- Styles -->
        <link rel="stylesheet" href="styleswitcher/css/styleswitcher.css">
        <link rel="stylesheet" type="text/css" href="css/frenzy-orange.css" title="frenzy-orange" />

        <script type="text/javascript" src="js/styleswitcher.js"></script>
        <!-- Styles -->

		
        <link rel="stylesheet" type="text/css" href="css/frenzy-orange.css" title="frenzy-orange" />

        <script type="text/javascript" src="js/styleswitcher.js"></script>
		<script src="js/libs/jquery.js"></script>
		
		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="img/ico/photo.png">

		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
		
		<!-- JS Libs -->
		
		<script>window.jQuery || document.write('<script src="js/libs/jquery.js"><\/script>')</script>

		<script src="js/libs/modernizr.js"></script>
		<script src="js/libs/selectivizr-min.js"></script>
		
		<script src="styleswitcher/js/styleswitcher.js"></script>
		<script src="js/bootstrap/bootstrap.js"></script>
		<script src="js/plugins/slides.jquery.js"></script>
		<script src="js/plugins/camera.min.js"></script>
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
		<!-- Header End -->
	<!--///////////////////////////// Slider Area //////////////////////////////////-->
		<!-- Main Slider Start -->
		<div class="container hidden-phone" id="slideshow">
			<section id="slider" class="row">
				<div class="span8">
					<!-- Begin Slider -->
					<div id="slidejs">
						<!-- Slide items -->
						<div class="slides-container">	
						<?php 
							require('includes/db.php');
							$query = $db->query("SELECT * FROM tbl_slider where category='3' order by slider_id desc limit 5", PDO::FETCH_ASSOC);
							if ( $query->rowCount() ){
								 foreach( $query as $row ){
								
						?>
							<div class="slide-outer span8">
								<div class="slide-inner">
									<a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>" title="<?php echo $row['baslik']; ?>"><img src="img/assets/slideshow/<?php echo $row['resim']; ?>" alt="<?php echo $row['baslik']; ?>"></a>
								</div>
							
								<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption" style="font-family: 'Rajdhani', sans-serif;">
											<?php echo $row['baslik']; ?>
										</div>
									</div>
								</div>
							</div>
						<?php }} ?>
						</div>
					</div>
					<!-- End Slider -->
				</div>
				<!-- End Span8 -->

				<!-- Begin Span4 Carousel Slider --> 
				<div class="span4 carousel-widget visible-desktop" id="slider-widget">
					<div class="widget-header">
						<img src="img/assets/sol_taraf.png"/>
					</div>
					<div class="widget-content carousel slide" id="carousel-widget">
						<!-- Begin Carousel Inner -->
						<div class="carousel-inner">
							<!-- Begin Slide Section / Carousel Item -->
							<div class="slide-section active item">
								<div class="separator"></div>
								<?php 
									$query = $db->query("SELECT * FROM tbl_slider order by rand() limit 3", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){										
								?>
							    <div class="slide-item media">
								    <a class="pull-left media-thumbnail" href="haber_detay.php?id=<?php echo $row['slider_id']; ?>" title="<?php echo $row['baslik']; ?>">
								    	<img class="media-object" src="img/assets/slideshow/thumbnail-square/<?php echo $row['kucuk_resim']; ?>" alt="<?php echo $row['baslik']; ?>" />
								    </a>
								    <div class="media-body">
									    <h4 class="media-heading" ><a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>" title="<?php echo $row['baslik']; ?>"><?php echo $row['baslik']; ?></a></h4>
										<p style="font-size:13px;"><?php echo $row['spot']; ?></p> 
								    </div>
								</div>

								<div class="separator"></div>
								<?php }} ?>
							</div>
							<div class="slide-section item">
								<div class="separator"></div>
								<?php 
									$query = $db->query("SELECT * FROM tbl_slider order by rand() limit 3", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){										
								?>
							    <div class="slide-item media">
								    <a class="pull-left media-thumbnail" href="haber_detay.php?id=<?php echo $row['slider_id']; ?>" title="<?php echo $row['baslik']; ?>">
								    	<img class="media-object" src="img/assets/slideshow/thumbnail-square/<?php echo $row['kucuk_resim']; ?>" alt="<?php echo $row['baslik']; ?>" />
								    </a>
								    <div class="media-body">
									    <h4 class="media-heading"><a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>"><?php echo $row['baslik']; ?></a></h4>
										<p style="font-size:13px;"><?php echo $row['spot']; ?></p> 
								    </div>
								</div>

								<div class="separator"></div>
								<?php }} ?>
							</div>
							<!-- End Slide Section / Carousel Item -->
							<!-- =================================================================== -->
							<!-- Begin Slide Section / Carousel Item -->
							<div class="slide-section item">
								<div class="separator"></div>
								<?php 
									$query = $db->query("SELECT * FROM tbl_slider order by rand() limit 3", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){										
								?>
							    <div class="slide-item media">
								    <a class="pull-left media-thumbnail" href="#">
								    	<img class="media-object" src="img/assets/slideshow/thumbnail-square/<?php echo $row['kucuk_resim']; ?>" alt="<?php echo $row['baslik']; ?>" />
								    </a>
								    <div class="media-body">
									    <h4 class="media-heading"><a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>"><?php echo $row['baslik']; ?></a></h4>
										<p style="font-size:13px;"><?php echo $row['spot']; ?></p> 
								    </div>
								</div>

								<div class="separator"></div>
								<?php }} ?>
							</div>
							<!-- End Slide Section / Carousel Item -->
							
						</div>
						<!-- End Carousel Inner -->
					
					</div>
				</div>
				<!-- End Span 4 Carousel Slider -->
			</section>
		</div>
		<!-- Main Slider End -->

		<!--///////////////////////////// End Slider Area //////////////////////////////////-->

		<!--///////////////////////////// Main Content Area //////////////////////////////////-->

		<!-- Main Content Wrapper Start -->
		<div class="container" role="main">
			<section id="popular-content" class="row visible-desktop">
				<div class="popular-item span3">
					<div class="popular-image">
						<a title="Murat Erol"><img src="img/yonetim/murat_erol.jpg" alt="Murat Erol" /></a>
					</div>
					<div class="popular-content">
						<h4 style="font-family: 'Open Sans Condensed', sans-serif;"><a href="#" title="title">Karacabey İlçe Teşkilatı Başkanımız</a></h4>
						<p>
							Murat EROL<br/> Karacabey Ak Parti İlçe Başkanı
						</p>
					</div>
				</div>
				<div class="popular-item span3">
					<div class="popular-image">
						<a title="title"><img src="img/yonetim/ali_ozkan.jpg" alt="Ali Özkan" /></a>
					</div>
					<div class="popular-content">
						<h4 style="font-family: 'Open Sans Condensed', sans-serif;"><a href="#" title="title">Karacabey Belediye Başkanımız</a></h4>
						<p>
							Ali ÖZKAN<br/> Karacabey Belediye Başkanı
						</p>
					</div>
				</div>
				<div class="popular-item span3">
					<div class="popular-image">
						<a title="title"><img src="img/yonetim/recep_altepe.jpg" alt="Recep Altepe" /></a>
					</div>
					<div class="popular-content">
						<h4 style="font-family: 'Open Sans Condensed', sans-serif;"><a href="#" title="title">Bursa Büyükşehir Belediye Başkanı</a></h4>
						<p>
							Recep ALTEPE<br/> Büyükşehir Belediye Başkanı
						</p>
					</div>
				</div>
				<div class="popular-item span3">
					<div class="popular-image">
						<a title="title"><img src="img/yonetim/onder_matli.png" alt="Önder Matlı" /></a>
					</div>
					<div class="popular-content">
						<h4 style="font-family: 'Open Sans Condensed', sans-serif;"><a href="#" title="title">Bursa Milletvekilimiz</a></h4>
						<p>
							Önder MATLI<br/> Bursa Milletvekili 
						</p>
					</div>
				</div>

			</section>

			<section id="main-content" class="row home">
				<!-- Sidebar Content -->
				<div id="left-sidebar" class="span3 visible-desktop">

					<div class="sidebar-widget" id="ads">
						<div class="sidebar-content ads-widget">
							<ul>
								<li class="sidebar-item">
									<a href="https://itunes.apple.com/tr/app/ak-parti-adalet-ve-kalk-nma/id770943041?mt=8" target="_blank" title="Akparti Cebinizde">
										<img src="img/assets/iphone_rv.jpg" style="height:200px;" alt="ads" />
										
									</a>
									
								</li>
							</ul>
						</div>
					</div><br/><br/><br/><br/>
					<!-- Latest News Widget -->
					<div class="sidebar-widget" id="latest-news">
						
						<div class="sidebar-header">
							<h3>GUNDEM'DEN HABERLER</h3>
							<div class="separator"></div>
						</div>
						<div class="sidebar-content post-widget">
							<ul>
								<?php 
									$query = $db->query("SELECT * FROM tbl_slider where category = '2' limit 6", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){										
								?>
								<li class="sidebar-item">
									<a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>" class="image-polaroid" title="<?php echo $row['baslik']; ?>">
										<img src="img/assets/slideshow/bos_logo.jpg" alt="<?php echo $row['baslik']; ?>" />
									</a>
									<strong class="haber"><a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>"><?php echo $row['baslik']; ?></a></strong>
									<span class="post-date"><em><?php echo $row['zaman']; ?></em></span>
								</li>
								<?php }} ?>
								
							</ul>
						</div>
					</div>
									<!-- Sidebar Block Widget -->				
					<div class="sidebar-widget sidebar-block sidebar-color">
						<div class="sidebar-header">
							<h2 style="text-shadow:0px 1px #fff;">SENDE UYEMİZ OL...!</h2>
							<p style="font-family: 'Noto Sans', sans-serif; color:#fff;">Ak Parti'ye üye olmak için lütfen formu eksiksiz doldurunuz.!</p>
						</div>
						<div class="sidebar-content login-widget">
							<form>
							<label class="control-label" for="inputEmail">Adın : (zorunlu)</label>
								<div class="input-prepend">
									<input type="text" class="span2" id="inputInfo" style="width:215px;" />
								</div>							
								<label class="control-label" for="inputEmail">Soyadın : (zorunlu)</label>
								<div class="input-prepend">
									<input type="text" class="span2" id="inputInfo" style="width:215px;"/>
								</div>								
								<label class="control-label" for="inputEmail">E-Posta : (zorunlu)</label>
								<div class="input-prepend">
									<input type="text" class="span2" id="inputInfo" style="width:215px;"/>
								</div>
								<div class="controls">
									<button class="btn btn-warning" type="submit">KAYIT OL</button>
								</div>
							</form>
						</div>
					</div>
										<!-- Sidebar Block Widget -->
					<div class="sidebar-widget hidden-phone" id="sidebar-tabs">
						<div class="sidebar-header">
							<ul class="nav nav-tabs" id="tab1">
								<li class="active"><a href="#comments">Ziyaret Defteri</a></li>
								<li><a href="#tags">Etiket</a></li>
							</ul>
						</div>
						<div class="sidebar-content tab-content">
								<div class="sidebar-item tab-pane active post-widget" id="comments">
									<ul>
								<?php 
									$query = $db->query("SELECT * FROM tbl_yorumlar order by yorum_id desc limit 8", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){										
									
											 $title = $row['text'];
											 $limit = "55";
											 $pad="...";
											 if(strlen($title) <= $limit)
											 {
											 $yorum = $title;
											 }
											 else
											 {
											 $title = mb_substr($title, 0, $limit, 'UTF-8') . $pad;
											 $yorum = $title;
											 }
											
								
								?>
										<li class="sidebar-item">
											<a href="#signInModal" class="image-polaroid" title="<?php echo $row['baslik']; ?>">
												<img src="img/member.png" alt="Image" />
											</a>
											<p style="font-size:12px;">
												<?php echo $yorum; ?><br/>
												<span class="post-date"><em>Gönderen : <a href="#"><?php echo $row['ad_soyad']; ?></a></em></span>
											</p>
										</li>
								<?php }} ?>	
										<a href="http://www.karacabeykentkonseyi.org.tr" target="_blank" >
										<li class="sidebar-item">
												<img src="img/backlink/ken_konsey.png" alt="Karacabey Kent Konseyi" />
										</li>	
										</a>
										<a href="http://www.karacabey.bel.tr" target="_blank" >
										<li class="sidebar-item">
												<img src="img/backlink/belediye.png" alt="Karacabey Belediyesi" />
										</li></a>										
										<li class="sidebar-item">
												<img src="img/banner_cerceve_sag.png" alt="AK Parti Gençlik Kolları" />
										</li>
									</ul>
								</div>
								<div class="sidebar-item tab-pane tag-widget" id="tags">
									<a href="#">akparti</a>
									<a href="#">davutoğlu</a>
									<a href="#">tayyip erdoğan</a>
									<a href="#">gençlik kolları</a>
									<a href="#">karacabey</a>
									<a href="#">murat erol</a>
									<a href="#">ali özkan</a>
									<a href="#">bülent arınç</a>
									<a href="#">yola devam</a>
									<a href="#">ak icraatlar</a>
									<a href="#">hedef 2023</a>
								</div>
						</div>
					</div>
				</div>

				<!-- End Sidebar -->

				<!-- Main Content -->
				<div id="content" class="span6">
					<div class="post-lists">
						<?php 
							$query = $db->query("SELECT * FROM tbl_slider where category='4' order by slider_id desc limit 7", PDO::FETCH_ASSOC);
							if ( $query->rowCount() ){
								 foreach( $query as $row ){																	
						
						?>
						<article class="latest-article">
							<div class="article-info">
							</div>
							<div class="article-thumbnail">
								<a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>" title="<?php echo $row['baslik']; ?>"><img src="img/assets/slideshow/<?php echo $row['resim']; ?>" alt="<?php echo $row['baslik']; ?>"/></a>
							</div>
							<div class="article-content">
								<div class="article-header">
									<h3 style="font-family: 'Rajdhani', sans-serif;"><a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>" title="<?php echo $row['baslik']; ?>"><?php echo $row['baslik']; ?></a></h3>
								</div>
								<div class="article-excerpt">
									<p style="text-align:justify;"><?php echo $row['spot']; ?>
									<a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>" title="<?php echo $row['baslik']; ?>">&nbsp;habere git >></a>
									</p>
								</div>
							</div>
						</article>
					
						<div class="separator"></div>
						<?php }} ?>
					</div>										
				</div>
				<!-- End Main Content -->

				<!-- Sidebar Right -->
				<div id="right-sidebar" class="span3">
					<!-- Latest Review Widget -->
					<div class="sidebar-widget sidebar-block sidebar-color-delege  hidden-phone">
						<div class="sidebar-header">
							<h2 style=" text-shadow:0px 1px #fff;">Ak Parti Uye Girisi</h2>
						</div>
						<div class="sidebar-content login-widget">
							<form>
								<div class="input-prepend">
									<span class="add-on "><i class="icon-user"></i></span>
									<input type="email" class="span2" style="width:185px;" placeholder="T.C Numaran" />
								</div>
								<div class="input-prepend">
									<span class="add-on "><i class="icon-lock"></i></span>
									<input type="password" class="span2" style="width:185px;" placeholder="Parolan" />
								</div>
								<label class="checkbox">
									<input type="checkbox">
									Beni hatırla
								</label>
								<div class="controls">
									<button class="btn signin" type="submit">Üye Giriş</button>
									<button class="btn signup" type="submit">Kayıt Ol</button>
								</div>
							</form>
						</div>
					</div>	
					<div class="sidebar-widget hidden-phone" id="latest-reviews">
						<div class="sidebar-header">
							<h3>SIYASET HABERLERI</h3>
							<div class="separator"></div>
						</div>
						<div class="sidebar-content post-widget">
							<ul>
								<?php 
									$query = $db->query("SELECT * FROM tbl_slider where category = '1' limit 5", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){										
								?>
								<li class="sidebar-item">
									<a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>" class="image-polaroid" title="<?php echo $row['baslik']; ?>">
										<img src="img/assets/slideshow/bos_logo.jpg" alt="<?php echo $row['baslik']; ?>" />
									</a>
									<strong class="haber"><a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>"><?php echo $row['baslik']; ?></a></strong>
									<span class="post-date"><em><?php echo $row['zaman']; ?></em></span>
									<div class="rating-static star-small rate1">
										<span class="awe-star"></span>
										<span class="awe-star"></span>
										<span class="awe-star"></span>
										<span class="awe-star"></span>
										<span class="awe-star"></span>
									</div>
								</li>
								<?php }} ?>
							</ul>
						</div>
					</div>
					<!-- Latest Review Widget -->
					<div class="sidebar-widget sidebar-block sidebar-color-defter hidden-phone">
						<div class="sidebar-header">
							<h2 style="color:#fff; text-shadow:0px 1px #fff;">Ziyaretci Defteri</h2>
							<p style="font-family: 'Noto Sans', sans-serif; color:#fff;">Sitemiz hakkında görüş ve önerilerinizi bize yazınız.</p>
						</div>
						<div class="sidebar-content login-widget">
							<form>
								<div class="input-prepend">
									<input type="text" id="inputInfo" style="width:220px;" placeholder="Adın ve Soyadın...." />
								</div>
								<div class="input-prepend">
									<textarea type="text" id="inputInfo" style="width:220px;" placeholder="Görüşlerini yaz gönder...."></textarea>
								</div>
								<div class="controls">
									<button class="btn btn-info btn-flatten" type="button">Mesajı Gönder</button>
								</div>
							</form>
						</div>
					</div>


					<!-- Latest Review Widget -->
					<div class="sidebar-widget hidden-phone" id="sidebar-tabs">
						<div class="sidebar-header">
							<ul class="nav nav-tabs" id="tab1">
								<li class="active"><a href="#comments">MİLLETVEKİLLERİMİZ</a></li>
							</ul>
						</div>
						<div class="sidebar-content tab-content">
								<div class="sidebar-item tab-pane active post-widget" id="comments">
									<ul>
								<?php 
									$query = $db->query("SELECT * FROM tbl_vekil order by vekil_id asc", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){										
									
											 $title = $row['aciklama'];
											 $limit = "45";
											 $pad="...";
											 if(strlen($title) <= $limit)
											 {
											 $yorum = $title;
											 }
											 else
											 {
											 $title = mb_substr($title, 0, $limit, 'UTF-8') . $pad;
											 $yorum = $title;
											 }
											
								
								?>
										<li class="sidebar-item">
											<a class="image-polaroid" title="<?php echo $row['adi_soyadi']; ?>">
												<img src="img/vekiller/<?php echo $row['resim']; ?>" alt="<?php echo $row['adi_soyadi']; ?>" />
											</a>
											<p style="font-size:15px; text-shadow:0px 0px #000; line-height: 50%;"><?php echo $row['adi_soyadi']; ?></p>
											<p style="font-size:13px;">
												<?php echo $yorum; ?><br/>
												<span class="post-date"><em>Şehir : <?php echo $row['sehir']; ?></em></span>
											</p>
										</li>
								<?php }} ?>	
									<a href="http://www.karacabeydh.gov.tr/">
										<li class="sidebar-item">
												<img src="img/backlink/hastane.png" alt="Karacabey Devlet Hastanesi" />
											
										</li>
									</a>
									</ul>
								</div>
						</div>
					</div>
				</div>
				<!-- Sidebar End -->
			
			</section>
		</div>
		<!-- Main Content Wrapper End -->
		<!--///////////////////////////// Footer Area //////////////////////////////////-->
	<?php require("includes/footer.php"); ?>

	</body>
</html>