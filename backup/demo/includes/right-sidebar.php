<!-- Sidebar Right -->
				<div id="right-sidebar" class="span3 hidden-phone">
									<!-- Sidebar Block Widget -->
<a href="https://itunes.apple.com/tr/app/ak-parti-adalet-ve-kalk-nma/id770943041?mt=8" target="_blank" ><img src="img/assets/iphone_rv.jpg" style="height:200px; width:300px;" alt="ads"></a><br/><br/>
					<!-- Latest Review Widget -->
					<div class="sidebar-widget" id="latest-reviews">
						<div class="sidebar-header">
							<h3>HABERLERIMIZDEN BAZI BASLIKLAR</h3>
							<div class="separator"></div>
						</div>
						<div class="sidebar-content post-widget">
							<ul>
								<?php 
									$query = $db->query("SELECT * FROM tbl_slider order by slider_id desc limit 6", PDO::FETCH_ASSOC);
									if ( $query->rowCount() ){
										 foreach( $query as $row ){										
								?>
								<li class="sidebar-item">
									<a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>" class="image-polaroid" title="<?php echo $row['baslik']; ?>">
										<img src="img/assets/slideshow/thumbnail-square/<?php echo $row['kucuk_resim']; ?>" alt="<?php echo $row['baslik']; ?>" />
									</a>
									<p style="font-size:13px;"><a href="haber_detay.php?id=<?php echo $row['slider_id']; ?>-<?php echo seo($row['baslik']); ?>"><?php echo $row['baslik']; ?></a></p>
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
					<div class="sidebar-widget" id="sidebar-tabs">
						<div class="sidebar-header">
							<ul class="nav nav-tabs" id="tab1">
								<li class="active"><a href="#comments">Yorumlar</a></li>
								<li><a href="#tags">Etiket</a></li>
							</ul>
						</div>
						<div class="sidebar-content tab-content">
								<div class="sidebar-item tab-pane active post-widget" id="comments">
									<ul>
								<?php 
									$query = $db->query("SELECT * FROM tbl_yorumlar order by yorum_id desc limit 3", PDO::FETCH_ASSOC);
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

					<!-- Sidebar Block Widget -->
					<div class="sidebar-widget sidebar-block sidebar-color">
						<div class="sidebar-header">
							<h2 style=" text-shadow:0px 1px #fff;">Ak Parti Uye Girisi</h2>
						</div>
						<div class="sidebar-content login-widget">
							<form>
								<div class="input-prepend">
									<span class="add-on "><i class="icon-user"></i></span>
									<input type="email" class="span2" style="width:188px;" placeholder="T.C Numaran" />
								</div>
								<div class="input-prepend">
									<span class="add-on "><i class="icon-lock"></i></span>
									<input type="password" class="span2" style="width:188px;" placeholder="Parolan" />
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
					

				</div>
				<!-- Sidebar End -->