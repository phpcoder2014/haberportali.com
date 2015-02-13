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
		
		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "cb80ab8f-ab93-4b73-9ce1-1e828d86f5ba", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	</head>
	<body style="background-image: url(img/assets/bg/pattern/bg-grid.png);"><br/><br/><br/>
		<div id="bonfire-switcher-wrapper">
		</div>
		<div id="bg" class="hidden-phone">
		<img src="img/assets/bg/kongre_bg.jpg" alt="Ak Parti" />
		</div>

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
								<?php 
								require('includes/db.php');
								$detay = $_GET['id'];
									$query = $db->query("SELECT * FROM tbl_slider where slider_id = '$detay'", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){										
								?>
							<article>
									<div class="article-header">
										<h1 class="title" style="font-family: 'Slabo 27px', serif;"><?php echo $row['baslik']; ?></h1>
										<div class="separator"></div>
									</div>
									<p class="spot"><?php echo $row['spot']; ?></p>
										<img style="width:453px; height:260px; float:left; padding-right:17px; padding-bottom:13px;" src="img/assets/slideshow/<?php echo $row['resim']; ?>" alt="<?php echo $row['baslik']; ?>" />
									<div class="article-content">									
									<p style="text-align:justify;"><?php echo $row['detay']; ?></p>
									<i><p><?php echo $row['zaman']; ?></p></i>
									</div>
									<!-- Go to www.addthis.com/dashboard to generate a new set of sharing buttons -->
										<span class='st_facebook_large' displayText='Facebook'></span>
										<span class='st_twitter_large' displayText='Tweet'></span>
										<span class='st_googleplus_large' displayText='Google +'></span>
										<span class='st_sharethis_large' displayText='ShareThis'></span>
										<span class='st_delicious_large' displayText='Delicious'></span>
										<span class='st_blogger_large' displayText='Blogger'></span>
										<span class='st_linkedin_large' displayText='LinkedIn'></span>
										<span class='st_pinterest_large' displayText='Pinterest'></span>
										<span class='st_email_large' displayText='Email'></span>

									<div class="article-review hidden-phone">
										<h3>Haber Oylama</h3>
										<div class="separator"></div>
										
										<div class="review-block">
											<div class="review-total">
												<div class="name">Toplam</div>
												<div class="total">
													<span class="value">80</span>
													<span class="grade">Reyting</span>
												</div>
											</div>
											<div class="user-review">
												<h4>Kullanici Oylamasi</h4>
												<div class="user-rating">
													<div class="rating-dynamic star-medium">
														<span class="awe-star"></span>
														<span class="awe-star"></span>
														<span class="awe-star"></span>
														<span class="awe-star"></span>
														<span class="awe-star"></span>
														<span class="awe-star"></span>
														<span class="awe-star"></span>
														<span class="awe-star"></span>
														<span class="awe-star"></span>
														<span class="awe-star"></span>
													</div>
													<div class="value">
														8/10
													</div>
												</div>
												<div class="user-overall">
													<span class="entered-rating">Senin Oyun: 8</span>
													<span class="user-total">Toplam Kullanici Oyu: 9.0 (10 Puan)</span>
												</div>
											</div>
										</div>
									</div>

									<div class="separator"></div>
									<div class="comments">
									<?php 
										$haberID = $_GET['id'];
										$count = current($db->query("select count(*) from tbl_slideryorum where haberID='$haberID'")->fetch());
										echo '<h3>'.$count.' Yorum mevcut</h3>';
									?>	
										<div class="separator"></div>
										<ul class="commentlists">
									<?php 
										$haberID = $_GET['id'];
											$sorgu = $db->query("SELECT * FROM tbl_slideryorum where haberID = '$haberID'", PDO::FETCH_ASSOC);
											
											if ( $sorgu->rowCount() ){
												 foreach( $sorgu as $yorum ){	
													if($yorum['onay'] == 1){
									?>	
											<li>
												<div class="comment-author image-polaroid">
													<img src="img/member.png" alt="avatar">
												</div>
												<div class="comment-body">
													<div class="comment-meta">
														<span><a href="#"><?php echo $yorum['adiSoyadi']; ?></a></span>
														<span class="meta-date"><?php echo $yorum['zaman']; ?></span>
														<div class="reply">
															<a href="#">Yanıtla</a>
														</div>
													</div>
													<p style="font-size:12px;">
														<?php echo $yorum['yorumText']; ?>
													</p>
												</div>												
											</li>
											<div class="separator"></div>
									<?php }}} ?>
										</ul>
									</div>
										<div class="respond">
										<h3>Yorum</h3>
										<div class="separator"></div>
										<div id="mesaj"></div>
										<form id="commentform" method="post" action="yorum_ekle.php?id=<?php echo $row['slider_id']; ?>">
											<div class="comment-input">
												<div class="control-group">
													<label class="control-label" for="input-name">Adın :</label>
													<div class="control">
														<div class="input-border">
															<input type="text" name="input-name" id="input-name" placeholder="Adınızı yazınız.">
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" for="input-email">Email</label>
													<div class="control">
														<div class="input-border">
															<input type="text" name="input-email" id="input-email" placeholder="email@domain.com">
														</div>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" for="input-homepage">Website</label>
													<div class="control">
														<div class="input-border">
															<input type="text" name="input-homepage" id="input-homepage" placeholder="http://www.domain.com">
														</div>
													</div>
												</div>
											</div>
											<div class="comment-text">
												<label class="control-label" for="text-comment">Yorum</label>
												<div class="control">
													<div class="input-border">
														<textarea rows="10" name="text-comment" id="text-comment" placeholder="Eklemek istediğiniz yorumu yazınız.."></textarea>
														
													</div>
												</div>
											</div>
											<div class="comment-submit">
												<button class="btn" type="submit">Yorum gönder</button>
											</div>
										</form>
									</div>							
								</article>
							<?php }} ?>
								
							</div>

							<!-- content inner -->
						</div>
						<!-- content outer -->
					</div>
				    
				</div>
					<?php require_once("includes/right-sidebar.php"); ?>				
			</section>
			<!-- End Main Content -->

		</div>
<?php require("includes/footer.php"); ?>
	</body>
</html>