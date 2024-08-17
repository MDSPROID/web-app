@extends('header')
@section('judul_halaman', '')
@section('konten')
<section class="homex">
    <div class="home__slider__wrapperx">
      	<div class="home__sliderx">
	        <div class="slide slide__ctax">
	          	<div class=" slide__cover">
					<div class="cover__wrapperx">
						<div class="image image--lazyload"
					      data-bgset="<?php echo asset('assets/img/homepage/home-contact-bg-white.jpg');?>" data-sizes="auto" style="background-image: transparent; background-position: center center;-webkit-filter:none;filter:none;font-family: arial;margin-top: 80px;">
					      	<div class="container-fluid rpaddmob bg-new">
					      		<div id="myCarousel" class="carousel slide" data-ride="carousel">
								  	<!-- Indicators -->
								  	<ol class="carousel-indicators">
								    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								    	<li data-target="#myCarousel" data-slide-to="1"></li>
								    	<li data-target="#myCarousel" data-slide-to="2"></li>
								    	<li data-target="#myCarousel" data-slide-to="3"></li>
								  	</ol>
								  	<!-- Wrapper for slides -->
								  	<div class="carousel-inner">
								    	<div class="item active">
								      		<img src="<?php echo asset('assets/img/homepage/home-3x.jpg'); //$s1['gambar'];?>" alt="Chania">
								      		<div class="carousel-caption">
								        		<h3><img src="<?php echo asset('assets/img/homepage/text-home1.png'); //$s1['konten1'];?>" class="img-home1"></h3>
								      		</div>
								    	</div>
								    	<div class="item">
								      		<img src="<?php echo asset('assets/img/homepage/home-1.jpg'); //$s3['gambar'];?>" alt="Chicago">
								      		<div class="carousel-caption">
								        		<h3><img src="<?php echo asset('assets/img/homepage/text-home1.png'); //$s1['konten1'];?>" class="img-home1"></h3>
								      		</div>
								    	</div>
								  	</div>

								  	<!-- Left and right controls -->
								  	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								    	<span class="glyphicon glyphicon-chevron-left"></span>
								    	<span class="sr-only">Previous</span>
								  	</a>
								  	<a class="right carousel-control" href="#myCarousel" data-slide="next">
								    	<span class="glyphicon glyphicon-chevron-right"></span>
									    <span class="sr-only">Next</span>
								  	</a>
								</div>
								<div class="container">
								    <div class="iframe-container text-center">
								        <iframe style="padding:0;background:none;margin-top:50px;" width="853" height="480" src="https://www.youtube.com/embed/vV6Qw7h7pOU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								    </div>
								</div>
								<div class="row">
    								<div class="col-md-3 col-xs-12"></div>
    								<div class="col-md-6 col-xs-12 text-center"><h3 style="border-bottom:3px solid #cfaa38;color:white;font-size: 20px;font-weight: 700;padding-bottom: 15px;">KESEHATAN KAMU NO 1 BUAT KAMI</h3></div>
    								<div class="col-md-3 col-xs-12"></div>
    								
    								<div class="col-md-2 col-xs-12"></div>
    								<div class="col-md-8 col-xs-12">
    								    <p style="color:white;margin-top:30px;text-align:center;line-height: normal;font-size: 18px;">Tim Alexander Photo Studio Cabang Tangcity Mall dan AEON Mall JGC serius jalankan<br>protokol cegah Covid 19, agar Anda tetap sehat dan terjaga dari virus selama sesi foto.<br>Tetap sehat dan semangat!</p>
    								</div>
    								<div class="col-md-2 col-xs-12"></div>
    								
    								<div class="col-md-3 col-xs-12"></div>
    								<div class="col-md-6 col-xs-12">
    								    <div style="background-color:#efe9be;padding:10px;color:#0c2219;text-align: center;font-size: 18px;line-height: normal;margin-top: 50px;border-radius: 10px;">Studio cabang Tangcity dan Aeon Mall JGC buka dari jam 10 pagi sampai jam 8 malam setiap hari. Tetap patuhi 3M dan mohon membawa sertifikat vaksin untuk syarat masuk kedalam mall. Terima kasih <a style=color:#EFE9BE; href="https://www.camerounagroservices.com/">rajaplay</a></div>
    								</div>
    								<div class="col-md-3 col-xs-12"></div>
    							</div>
								<div class="col-md-2 col-xs-12"></div>
								<div class="rowx">
								    <div class="col-md-12 col-xs-12 text-center">
								        <h3 style="color:white;font-size: 20px;font-weight: 700;padding-bottom: 15px;">GARANSI KAMI</h3>
								    </div>
							     	<div class="col-md-12x col-xs-12x" style="margin-top: 50px;">
							     		<img style="display:none;" src="<?php echo $s2['gambar'];?>" class="img-responsive">
							     		<div class="wdhx">
								    		<div class="col-md-2 col-xs-12">
								    			<h3 style="top:840px;" class="ab_out">Our Promise</h3>
								    		</div>
									    	<div class="col-md-5 col-xs-12 brd-cl p1x" style="font-size: 18px;color: white;">						   
									    		<?php echo $s2['konten3'];?>						    		
									    	</div>
									    	<div class="col-md-5 col-xs-12 p2x" style="font-size: 18px;color: white;margin-bottom: 50px;">
									    		<?php echo $s2['konten4'];?>
									    	</div>	
									    </div>
							     	</div>
							    </div>
						    </div>
						    <div class="container-fluid linemenux">
				             	<div class="row">
				                 	<div class="col-md-12x col-xs-12x" style="background-color:#efe9be;margin-top: 20px;">
				                 		<div class="rowx">
				                            
				                            <div class="col-xs-6 col-lg-6" style="margin-bottom: 20px;margin-top: 20px;">
			                                    <div class="hfooter xxf">
			                                    	<img src="<?php echo asset('assets/img/homepage/rsz_photo_2021-05-27_13-33-03.jpg');?>" class="img-toko1" style="image-rendering: -webkit-optimize-contrast">
			                                    </div>
			                                    <div class="hfooter xxf">
		            			     				<h2 class="fjd" style="font-size: 25px;color: black;margin-bottom: 15px;"><i class="glyphicon glyphicon-map-marker"></i> AEON Mall</h2>
		                                          	<div class="fds addressfoot" style="font-size:20px;line-height: 1.5;">AEON MALL JGC Unit 3 lantai 3. Jl. Jkt Garden City Boulevard, RT.8/RW.6 Cakung Tim<br>Kec. Cakung Kota Jakarta Timur<br>(021) 2246 3406<br>
		                                          	<a class="fds" style="color:inherit;font-size:20px;" href="https://g.co/kgs/ArFS8R">Open in Google Maps</a>
		                                          	</div>
			                                    </div>
				                            </div>
				                            <div class="col-xs-6 col-lg-6 paddfootst" style="margin-top: 20px;">
				                                <div class="hfooter xxf" style="text-align: -webkit-right;">
			                                    	<img src="<?php echo asset('assets/img/homepage/photo6134077218930928924.jpg');?>" class="img-toko1" style="display:initial;image-rendering: -webkit-optimize-contrast">
			                                    </div>
			                                    <div class="hfooter xxf" style="text-align:right;">
		            			     				<h2 class="fjd" style="font-size: 25px;color: black;margin-bottom: 15px;"><i class="glyphicon glyphicon-map-marker"></i> Tangcity Mall</h2>
		                                          	<div class="fds addressfoot" style="font-size:20px;line-height: 1.5;">Tangcity Mall Unit A No. 7-8 (Sebelah XXI) Tangcity Mall lt 2<br>Jalan Jend Sudirman No. 1, RT.001/RW.005, Cikokol, Kec. Tangerang Phone<br>(021) 29309745<br>
		                                          	<a class="fds" style="color:inherit;font-size:20px;" href="https://g.co/kgs/E8Npb7">Open in Google Maps</a>
		                                          	</div>
			                                    </div>
				                            </div>
				                 			<!--<div class="col-xs-6 col-lg-6" style="margin-bottom: 20px;margin-top: 20px;">-->
				                    <!--            <div class="row col-xs-12">-->
				                    <!--                <div class="col-xs-4 col-lg-6 text-center hfooter">-->
				                    <!--                	<img src="<?php echo asset('assets/img/homepage/rsz_photo_2021-05-27_13-33-03.jpg');?>" class="img-toko1" style="image-rendering: -webkit-optimize-contrast">-->
				                    <!--                </div>-->
				                    <!--                <div class="col-xs-3 col-lg-3">-->
				                    <!--                    <div class="toko1 iframe-container gfoot">-->
				                    <!--                    	<a href="https://g.co/kgs/ArFS8R">-->
				            			     <!--					<h2 style="font-size: 24px;color: black;margin-bottom: 15px;"><i class="glyphicon glyphicon-map-marker"></i> AEON Mall</h2>-->
				            			     <!--				</a>-->
				                    <!--                      	<div class="addressfoot" style="line-height: 18px;">AEON MALL JGC Unit 3 lantai 3. Jl. Jkt Garden City Boulevard, RT.8/RW.6 Cakung Tim<br>Kec. Cakung Kota Jakarta Timur<br><br>(021) 2246 3406</div>-->
				                    <!--                    </div>-->
				                    <!--                </div>-->
				                    <!--            </div>-->
				                    <!--        </div>-->
				                    <!--        <div class="col-xs-6 col-lg-6 paddfootst" style="margin-top: 20px;">-->
				                    <!--            <div class="row col-xs-12">-->
				                    <!--            	<div class="col-xs-3 col-lg-3">-->
				                    <!--                    <div class="toko1 iframe-container gfootx">-->
				                    <!--                    	<a href="https://g.co/kgs/E8Npb7">-->
				            			     <!--					<h2 style="font-size: 24px;color: black;margin-bottom: 15px;text-align: right;"><i class="glyphicon glyphicon-map-marker"></i> Tangcity Mall</h2>-->
				            			     <!--				</a>-->
				                    <!--                      	<div class="addressfoot gtr" style="text-align: right;line-height: 18px;">Tangcity Mall Unit A No. 7-8<br>(Sebelah XXI) Tangcity Mall lt 2<br>Jalan Jend Sudirman No. 1, RT.001/RW.005,<br>Cikokol, Kec. Tangerang Phone<br><br>(021) 29309745</div>-->
				                    <!--                    </div>-->
				                    <!--                </div>-->
				                    <!--                <div class="col-xs-6 col-lg-6 text-center hfooterx">-->
				                    <!--                	<img src="<?php echo asset('assets/img/homepage/photo6134077218930928924.jpg');?>" class="img-toko1x"  style="image-rendering: -webkit-optimize-contrast">-->
				                    <!--                </div>-->
				                    <!--            </div>-->
				                    <!--        </div>-->
				                            <div class="text-center col-xs-12 col-lg-12 taglinefoot">
				                            	"Alexander Photo hadir untuk calon pengantin & keluarga yang mendambakan memiliki foto profesional dan mewah namun masih terjangkau di jaman yang serba mahal ini."
				                            </div>
				             			<div class="col-md-12 col-xs-12" style="background-color:#0c2219;color: white;padding:20px 35px;">
				             			    <div class="col-md-2 col-xs-12 footct" style="margin-top: 10px;">
				             			        <span style="font-size:20px;font-family: cambria;">Connect with us</span>
				                 			</div>
				            				<div class="col-md-4 col-xs-4 sossty">	
				                 				<ul class="list-unstyled list-inline">
				                                  	<li>AEON Mall : </li>
				                                  	<li><a href="https://www.facebook.com/alexanderphotojakarta"><i class="fb fab fa-facebook-square" style="color: white;font-size: 32px;"></i></a></li>
				                                  	<li><a href="https://www.instagram.com/alexanderphoto_aeonjakarta"><i class="fab fa-instagram ig" style="color:white;font-size: 32px;"></i></a></li>
				                                </ul>
				                          </div>
				                          <div class="col-md-4 col-xs-4 sossty1">	
				                                <ul class="list-unstyled list-inline">
				                                  	<li>Tangcity : </li>
				                                  	<li><a href="https://www.facebook.com/alexanderfotostudio"><i class="fb fab fa-facebook-square" style="color: white;font-size: 32px;"></i></a></li>
				                                  	<li><a href="https://www.instagram.com/alexanderphotostudio"><i class="fab fa-instagram ig" style="color: white;font-size: 32px;"></i></a></li>
				                                </ul>
				                            </div>
				                            <div class="col-md-2 col-xs-4 footct" style="line-height: 20px;">
				                            	<a style="color:inherit" href="https://gass.co.id/cta">Chat With<br>Us now!</a>
				                            	<!-- https://api.whatsapp.com/send/?phone=6285967174008&text=Hallo,%20Bisa%20tolong%20infokan%20pricelist%20dan%20promo%20yang%20menarik%20di%20Alexander%20Photo?%20Saya%20lihat%20dari%20website&app_absent=0 -->
				                            	<a style="position: absolute;top:0;left: 100px;" href="https://gass.co.id/cta">
				                            	    <i style="color: white;text-shadow: 1px 2px 16px black;" class="fab fa-whatsapp"></i>
				                            	</a>
				                 			</div>
				            	     	</div>
				            	     	<div class="col-md-12 col-xs-12" style="background-color:#0c2219;padding: 10px; color:#9b9b9b;text-align: center;font-size: 12px;">
				            	     	    © 2021 PT Alexander Karya Sukses. All rights reserved.
				            			</div>	
				                 	</div>
				                 </div>
				             </div>
				           </div>
                            </main>
                          </div>
                        </div>
					</div>
				</div>
	        </div>
    	</div>

<!-------------- PLACE HOMEPAGE TEXT ------------->
      	<div class="home__overlay" data-overlay>
        	<div class="home__overlay__data">
          		<div class="data__title">
          			<a href="#" data-overlay-cta-link>
            			<h2 class="paragraph paragraph__m2" data-overlay-title style="font-family: cambria;"></h2>
            		</a>
          		</div>
          		<div class="container">
            		<div class="data__baseline column clmn" style="margin: 20px <?php echo $s1['set_right_konten1']?>px;">
              			<p style="font-weight: 600;font-family: times new roman;font-size: 2rem;text-align:center;text-shadow: 0px 0px 5px #3c3c3c;" class="heading heading__m4 text--bold" data-overlay-baseline></p>
              			<div class="data__category" style="width:100%;text-align:center;right: <?php echo $s1['set_right_konten2']?>px !important;">
	              			<h3 class="action action__m1 text--bold text--uppercase" style="font-size: <?php echo $s1['set_konten2'];?>px;" data-overlay-category></h3>
	            		</div>
            		</div>
          		</div>
          		<div class="data__cta">
          			<a href="#" data-overlay-cta-link>
              			<span class="button buttonx button__label action action__m0 text--bold grabimg" data-overlay-cta-label></span>
              		</a>
          		</div>
        	</div>
      	</div>
      	<div class="home__ui" data-ui style="display: none;">
	        <div class="home__ui__data">
	          	<div class="data__featured" data-ui-featured>
	            	<p class="action action__m0 text--bold text--uppercase">Featured</p>
	          	</div>
	          	<div class="data__counter text--right" data-ui-counter>
	            	<p class="heading heading__m6 text--bold" data-ui-current></p>
	            	<span class="data__separator"></span>
	            	<p class="action action__m0 text--bold" data-ui-total></p>
	          	</div>
	          	<div class="data__cta data__cta--inactive" data-ui-cta>
	            	<p class="action action__m0 text--bold text--uppercase">Contact</p>
	          	</div>
	        </div>
      	</div>
      	<!-------------- PLACE HOMEPAGE TEXT ------------->
    </div>
  </section>
 </main>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var srx = $(".grabimg").text();
		if(srx != ""){
			$(".srxx").attr("src",srx);
		}
	});
</script>
<script type='text/javascript' src='https://mareinesarquitetura.pixelfordinner.cloud/themes/mareines/dist/js/bootstrap.min.js' async ></script>
</body>
</html>
@endsection