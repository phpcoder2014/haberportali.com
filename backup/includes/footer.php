<div style="text-align:center;"><img src="img/assets/alt_link.jpg" /></div>
		<!-- Footer Start -->
		<footer class="footer hidden-phone">
			<div class="container footer-container">
				<section class="row">
					<div class="span4 visible-desktop">
						<div class="row footer-left">
							
							<!-- Begin Span4 Carousel Slider --> 
							<div class="span4 carousel-widget">								
								<div class="widget-header">
									<img src="img/assets/sol_taraf.png" />
								</div>
								<div class="widget-content carousel slide" id="carousel-widget2">
									<!-- Begin Carousel Inner -->
									<div class="carousel-inner">
							<!-- Begin Slide Section / Carousel Item -->
							<div class="slide-section active item">
								<div class="separator"></div>
								<?php 
									require_once("includes/db.php");
									$query = $db->query("SELECT * FROM tbl_slider order by rand() limit 3", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){										
								?>
							    <div class="slide-item media">
								    <a class="pull-left media-thumbnail" href="haber_detay.php?id=<?php echo $row['slider_id'];?>">
								    	<img class="media-object" src="img/assets/slideshow/thumbnail-square/<?php echo $row['kucuk_resim']; ?>" alt="<?php echo $row['baslik']; ?>" />
								    </a>
								    <div class="media-body">
									    <h4 class="media-heading" ><a href="haber_detay.php?id=<?php echo $row['slider_id'];?>"><?php echo $row['baslik']; ?></a></h4>
										<p><?php echo $row['spot']; ?></p> 
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
								    <a class="pull-left media-thumbnail" href="haber_detay.php?id=<?php echo $row['slider_id'];?>-<?php echo seo($row['baslik']);?>">
								    	<img class="media-object" src="img/assets/slideshow/thumbnail-square/<?php echo $row['kucuk_resim']; ?>" alt="<?php echo $row['baslik']; ?>" />
								    </a>
								    <div class="media-body">
									    <h4 class="media-heading"><a href="haber_detay.php?id=<?php echo $row['slider_id'];?>-<?php echo seo($row['baslik']);?>"><?php echo $row['baslik']; ?></a></h4>
										<p><?php echo $row['spot']; ?>.
										</p> 
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
								    <a class="pull-left media-thumbnail" href="haber_detay.php?id=<?php echo $row['slider_id'];?>-<?php echo seo($row['baslik']);?>">
								    	<img class="media-object" src="img/assets/slideshow/thumbnail-square/<?php echo $row['kucuk_resim']; ?>" alt="<?php echo $row['baslik']; ?>" />
								    </a>
								    <div class="media-body">
									    <h4 class="media-heading"><a href="haber_detay.php?id=<?php echo $row['slider_id'];?>-<?php echo seo($row['baslik']);?>"><?php echo $row['baslik']; ?></a></h4>
										<p><?php echo $row['spot']; ?>
										</p> 
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
						</div>
					
					</div>
					
					<div class="span3 footer-extra">
						<div class="footer-box">
							<h4>Menu</h4>
							<ul>
								<li><a class="" href="#">Anasayfa</a></li>
								<li><a href="#">Kurumsal</a></li>
								<li><a href="#">Yönetim</a></li>
								<li><a href="#">Gençlik Kolları</a></li>
								<li><a href="#">Kadın Kolları</a></li>
								<li><a href="#">Foto Galeri</a></li>
								<li><a href="#">Video Galeri</a></li>
								<li><a href="#">Basında Biz</a></li>
							</ul>
						</div>
						<div class="footer-box">
							<h4>AK PARTI BIRIMLERI</h4>
							<ul>
								<li><a href="#">Siyasi ve Hukuki İşler</a></li>
								<li><a href="#">Teşkilat</a></li>
								<li><a href="#">Seçim İşleri</a></li>
								<li><a href="#">Tanıtım ve Medya</a></li>
								<li><a href="#">Dış İşler</a></li>
								<li><a href="#">Sosyal İşler</a></li>
							    <li><a href="#">Yerel Yönetimler</a></li>
							    <li><a href="#">Ekonomi İşleri</a></li>
							</ul>
						</div>
					</div>
					<div class="span3 footer-extra">
						<div class="footer-box">
							<h4>Ak Parti</h4>
							<p><a href="#"><img src="img/assets/logo_alt.png" alt="Frenzy" ></a></p>
							<p style="font-family: 'Noto Sans', sans-serif; color:#fff;"><em>"Siyasetin Tek Limanı Ahlaktır."</em></p>
							<address>
								<p style="font-family: 'Noto Sans', sans-serif; color:#fff;"><strong>Karacabey Ilçe Başkanlığı</strong></p>
								<p style="font-family: 'Noto Sans', sans-serif; color:#fff;"><span class="awe-home"></span> Atatürk Bulvarı Belediye<br/>&nbsp;&nbsp;&nbsp;&nbsp; İşhanı Kat: 3</p>
								<p style="font-family: 'Noto Sans', sans-serif; color:#fff;"><span class="awe-map-marker"></span> Karacabey, BURSA</p>
								<p style="font-family: 'Noto Sans', sans-serif; color:#fff;"><span class="awe-phone"></span><abbr title="Phone"> Telefon:</abbr> 0(224) 676-57 57</p>
								<p style="font-family: 'Noto Sans', sans-serif; color:#fff;"><span class="awe-phone"></span><abbr title="Email"> Email:</abbr> info@akpartikaracabey.org.tr</p>
							</address>
						</div>
					</div>
					<div class="span2 footer-extra">
						<div class="footer-box">
							<h4>HIZLI MENU</h4>
							<ul>
								<li><a href="#">Kadın Kolları</a></li>
								<li><a href="#">Gençlik Kolları</a></li>
								<li><a href="#">Akim</a></li>
								<li><a href="#">Yaşlılar Koordinasyon M.</a></li>
								<li><a href="#">Siyaset Akademisi</a></li>
								<li><a href="#">Kütüphane</a></li>
								<li><a href="#">Ak Icraatlar</a></li>
								<li><a href="#">İllerde Ak Icraatlar</a></li>
							</ul>
						</div>
						<div class="footer-box">
							<h4>Sosyal Medya</h4>
							<ul class="social-media">
								<li><a href="https://www.facebook.com/akkaracabey?fref=ts" target="_blank"><span class="awe-facebook"></span></a></li>
								<li><a href="#"><span class="awe-twitter"></span></a></li>
								<li><a href="#"><span class="awe-pinterest"></span></a></li>
								<li><a href="https://plus.google.com/u/0/104112252153251104841/posts" target="_blank"><span class="awe-google-plus"></span></a></li>
								<li><a href="#"><span class="awe-linkedin"></span></a></li>
							</ul>
						</div>
					</div>
				</section>
			</div>
			<div class="container" role="navigation">
				<section class="row">

					<div class="footer-logo visible-desktop">
						<a href="#" title="Frenzy">Frenzy</a>
					</div>
					<div class="copyright">
						<p>Copyright &copy; 2015 Tasarım ve Programlama  <a href="mailto:nihatsendil@gmail.com" title="Ak Parti">Nihat ŞENDİL</a>. Tüm hakları gizlidir.
						</p>
					</div>
				</section>
			</div>
		</footer>
		<!-- Footer End -->