	<!--///////////////////////////// Header Area //////////////////////////////////-->
		<script type="text/javascript">
		tday=new Array("Pazar","Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi");
		tmonth=new Array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");

		function GetClock(){
		var d=new Date();
		var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear(),nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

		if(nyear<1000) nyear+=1900;
		if(nmin<=9) nmin="0"+nmin;
		if(nsec<=9) nsec="0"+nsec;

		document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+"";
		}

		window.onload=function(){
		GetClock();
		setInterval(GetClock,1000);
		}
		</script>
		
		<!-- Header Start -->
		<header class="header">
			<div id="nav" class="container">
				<div class="row">
				<!-- Logo & Navigation -->
					<div class="span12" role="navigation" id="mainnav">
					<!-- Site Logo -->
					<h1 id="logo" class="visible-desktop"><a href="index.php">Ak Parti</a></h1>

					<!-- Navigation Start -->
					<nav id="responsive-nav" class="hidden-desktop">
						<div class="collapse-menu">
							<img src="img/assets/mobile-logo.png" style="float:left; width:45px; height:50px;" /><a href="index.php" class="brand">Ak Parti Karacabey</a>
							<span class="collapse-trigger icon awe-home"></span>
						</div>
						<ul class="first-level dropdown-nav">
							<li><a href="index.php">ANASAYFA</a></li>
							<li><a href="#">KURUMSAL <span class="pull-right icon awe-chevron-down"></span></a>
								<ul class="second-level">
									<li><a href="index.html">KURUMSAL KİMLİK</a></li>
									<li><a href="index2.html">PARTİ TÜZÜĞÜ</a></li>
									<li><a href="index3.html">PARTİ PROGRAMI</a></li>
								</ul>
							</li>
							<li><a href="yonetim_kurulu.php">YÖNETİM</a></li>
							<li><a href="kadin_kollari.php">KADIN KOLLARI</a></li>
							<li><a href="genclik_kollari.php">GENCLIK KOLLARI</a></li>
							<li><a href="foto_galeri.php">ETKINLIKLER</a></li>
							<li><a href="video.php">VIDEO GALERI</a></li>
							<li><a href="basinda_biz.php">ILETISIM</a></li>
						</ul>
					</nav>
					<nav id="main-navigation" class="visible-desktop">
						<ul class="first-level">
							<li class="current"><a href="index.php">Anasayfa</a></li>
							<li><a href="#">Kurumsal <span class="icon awe-chevron-down"></span></a>
								<ul class="second-level">
									<li><a href="index.html">KURUMSAL KİMLİK</a></li>
									<li><a href="index2.html">PARTİ TÜZÜĞÜ</a></li>
									<li><a href="index3.html">PARTİ PROGRAMI</a></li>
								</ul>
							</li>
							<li><a href="yonetim_kurulu.php">Yonetim</a></li>
							<li><a href="kadin_kollari.php">KADIN KOLLARI</a></li>
							<li><a href="genclik_kollari.php">GENCLIK KOLLARI</a></li>
							<li><a href="foto_galeri.php">ETKINLIKLER</a></li>
							<li><a href="video.php">VIDEO GALERI</a></li>
							<li><a href="basinda_biz.php">ILETISIM</a></li>
							
						</ul>
					</nav>
					<nav id="secondary-navigation" class="visible-desktop">
						<div class="social-media">
							<ul>
								<li><a href="https://www.facebook.com/akkaracabey?fref=ts" target="_blank"><span class="awe-facebook"></span></a></li>
								<li><a href="#"><span class="awe-twitter"></span></a></li>
								<li><a href="#"><span class="awe-pinterest"></span></a></li>
								<li><a href="https://plus.google.com/u/0/104112252153251104841/posts" target="_blank"><span class="awe-google-plus"></span></a></li>
								<li><a href="#"><span class="awe-linkedin"></span></a></li>
							</ul>
						</div>
						<div class="pull-right">
							<ul>
								<li>
									<ul>
									
										<li><a href="#signInModal" data-toggle="modal"></a></li>
										<li style="list-style-type: none;" id="clockbox"></li>
									</ul>
								</li>
								<li>
									<form class="search">
										<input class="input-medium" type="text" placeholder="Ara Bul">
									</form>
								</li>
							</ul>
						</div>
					</nav>
					<!-- Navigation End -->
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->