<?php
$pagename = "Home";
include'header.php';

?>
				<!-- نهاية الناف بار -->	
			
			
				
				<!--  بداية الصور   -->	
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="30000">
				  <ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner topphoto">
					<div class="carousel-item active">
					  <img src="img/1.jpeg" class="d-block w-100" alt="Alexandria">
					  <div class="carousel-caption  d-md-block d-sm-block  d-xs-block">
						<h5 class="slidetextopt" style="font-weight: bold;"> تشغيل و تسويق الفنادق</h5>
					<!--	<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
					  </div>
					</div>
					<div class="carousel-item">
					  <img src="img/2.jpg" class="d-block w-100" alt="...">
					  <div class="carousel-caption d-md-block">
						<h5 class="slidetextopt" style="font-weight: bold;">توفير شركات بناء و أثاث</h5>
						<!--	<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
					  </div>
					</div>
					<div class="carousel-item">
					  <img src="img/3.jpg" class="d-block w-100" alt="...">
					  <div class="carousel-caption  d-md-block">
						<h5 class="slidetextopt" style="font-weight: bold;">دورات تدريبية في الفندقة و الضيافة</h5>
						<!--	<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
					  </div>
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			
			
				
				<!-- نهاية الصور -->	
			
			<section class="about text-center">
				<div class="container wow bounceInUp animate__swing "  data-wow-offset="0"  data-wow-duration="2s" data-wow-offset="100">
					<h1 class="h1h1h1 "> Welcome to our website <span> Best Trip </span> </h1>
					
					<!-- <p class="lead"> Hello let me introduce our template El-Bohemy Inc. Created with all Love with <strong>BootStrap</strong> </p> -->
	
				</div>
			</section>
			
			
			<!--
					
			<section class=" features text-center">
				<div class="container ">
					<h1> Our Features </h1>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
							<div class="feat1 feats wow  slideInLeft" data-wow-offset="0" data-wow-offset="30"  data-wow-duration="2s" >
								<span class="iconshapesfeat">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
									  	<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
									</svg>
								</span>
								<h4> 100% Responsive </h4>
								<p class="wow animate__fadeInUp" data-wow-offset="30"  data-wow-duration="5s" data-wow-delay="2s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						
						</div>
						
						<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
							<div class="feat2 feats wow  slideInDown"  data-wow-offset="30"  data-wow-duration="2s" >
								<span class="iconshapesfeat">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lightning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  										<path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"/>
									</svg>
								</span>
								<h4> Fast </h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						
						</div>
						
						<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
							<div class="feat3 feats wow slideInDown">
								<span class="iconshapesfeat" >
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
									</svg>
								</span>
								<h4> Amazing designs </h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						
						</div>
						
						<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
							<div class="feat4 feats wow slideInRight">
								<span class="iconshapesfeat">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-headset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									  <path fill-rule="evenodd" d="M8 1a5 5 0 0 0-5 5v4.5H2V6a6 6 0 1 1 12 0v4.5h-1V6a5 5 0 0 0-5-5z"/>
									  <path d="M11 8a1 1 0 0 1 1-1h2v4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V8zM5 8a1 1 0 0 0-1-1H2v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V8z"/>
									  <path fill-rule="evenodd" d="M13.5 8.5a.5.5 0 0 1 .5.5v3a2.5 2.5 0 0 1-2.5 2.5H8a.5.5 0 0 1 0-1h3.5A1.5 1.5 0 0 0 13 12V9a.5.5 0 0 1 .5-.5z"/>
									  <path d="M6.5 14a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1z"/>
									</svg>
								</span>
								<h4> 24h support </h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						
						</div>
						
						
					
					</div>
				
				</div>
			
			</section>
			
			 نهاية الفيوتشرز سكشن  -->
			
					
			

			<!-- بداية سكشن آراء العملاء  --> 
			
			 
				
					
				
				<!--  
				  بداية الصور  
				  
				  
					<div id="mytestimonials" class="carousel slide wow tada " data-ride="carousel" data-interval="50000" data-wow-offset="130" data-wow-duration="2s">
				  	<h2 class="">What Our Clients Say
					</h2>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  	 <p class="lead">
								 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</p>
						<span class="fansname">
							Ahmed Fouad
						</span>
					  <div class="carousel-caption d-none d-md-block">
						--> 
					<!--	<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->

					<!--
					  </div>
					</div>
					  
					  
					<div class="carousel-item">
					   <p class="lead">
								 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</p>
						<span class="fansname">
							Hassan Bahaa
						</span>
					  <div class="carousel-caption d-none d-md-block">
						  
						--> 
						<!--	<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->

					  <!-- </div>
						
					</div>
					  
					  
					<div class="carousel-item">
						 <p class="lead">
								 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</p>
						<span class="fansname">
							Abdel-Halem Hamdy
						</span>
					  <div class="carousel-caption d-none d-md-block">
						 --> 
						<!--	<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
<!-- 
					  </div>
						
					</div>
					  
				  </div>
					
					<ol class="carousel-indicators ssssffff" id="hhhhhhhhh">
						<li data-target="#mytestimonials" data-slide-to="0" class="active">
							<img src="img/hassan.jpg" class="rounded-circle">
						</li>
						<li data-target="#mytestimonials" data-slide-to="1">
							<img src="img/ahmed.jpg" class="rounded-circle">
						</li>
						<li data-target="#mytestimonials" data-slide-to="2">
							<img src="img/halem.png" class="rounded-circle">
						</li>
				  	</ol>
				
				</div> -->
			
			
				
				<!-- نهاية الصور -->	
			
				<section class="aboutcon">

<!-- start services divs -->
    <div class="row aboutus">

        <!-- Each service div  -->
        <div class="col-md-6 col-xs-12 content content-logo">
          <!-- <div class="content">   -->
            <img src="img/logo.png">
            
            <!-- <span>  </span> -->
          <!-- </div>  -->
        </div>
        <div class="col-md-6 col-xs-12 content">
          <!-- <div class="content">   -->
            
            <div class="text-con">
                <h2>About Best Trip</h2>
                <p class="contenttext">

									شركة سعودية مقرها الرئيسي مدينة جدة ولها فروع في عدة
					مدن حيث توفر خدماتها واعمالها في قطاع إدارة وتشغيل
					وتسويق الفنادق والمنتجعات السياحية ويدعمها في ذلك فهمها
					العميق وخبرتها الفريدة لثقافة المنطقة وشعوبها الى جانب
					الخبرات الواسعة التي يتمتع بها فريق العمل والتي تمتد الى ما
					يزيد عن 15 عاما من الخبرة المحلية والعالمية في قطاع
					الخدمات والضيافة عبر تقديم مزيج فريد من المعايير العالمية في
					الإدارة والتشغيل والتسويق السياحي.
				</p>
				<button class="btn btn-secondary readm-about-bttn"><a href="aboutus.php" target="blank" class="readm-about">Read More</a></button>

				

            </div>
            <!-- <span>  </span> -->
          <!-- </div>  -->
        </div>
    </div>

</section>


<section class="ourclient">
				<div class="container partnerrow ">
					<h3>Our Partners</h3>
					<div class="row partnerrow ">
						<!-- <span class="col-lg-4 col-md-4 col-sm-6 col-xs-6">0</span>
						<span class="col-lg-4 col-md-4 col-sm-6 col-xs-6">0</span>
						<span class="col-lg-4 col-md-4 col-sm-6 col-xs-6">0</span> -->
						
						<ul class="list-unstyled col-md-12 row partnerrow ">
							
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" ><a ><img class="img-fluid " src="img/partners/booking.png" ></a>  </li>
							
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" > <a > <img class="img-fluid " src="img/partners/expedia.png" > </a></li>
							
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" > <a  >  <img class="img-fluid " src="img/partners/hotels.png" > </a>

							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" ><a ><img class="img-fluid " src="img/partners/priceline.png" ></a>  </li>
							
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" > <a > <img class="img-fluid " src="img/partners/agoda.png" > </a></li>
							
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" > <a  >  <img class="img-fluid " src="img/partners/airbnb.png" > </a>

							
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" ><a ><img class="img-fluid " src="img/partners/Expedia-Group.png" ></a>  </li>
							
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" > <a > <img class="img-fluid " src="img/partners/trivago.png" > </a></li>
							
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" > <a >  <img class="img-fluid " src="img/partners/Vrbo-UK.png" > </a>

							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" ><a ><img class="img-fluid " src="img/partners/HomeAway.png" ></a>  </li>
							
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" > <a > <img class="img-fluid " src="img/partners/Kayak.png" > </a></li>
							
							<li class="col-lg-3 col-md-3 col-sm-6 col-xs-6" > <a >  <img class="img-fluid " src="img/partners/Tripadvisor.png" > </a>



							</li>
							
							
							<!-- href="www.booking.com"  -->
							
							
						
						</ul>
					
					</div>
				
				</div>
			
	</section>



				
				
				
				
				
<!-- 				
	
<section class="ourservices">
				<div class="container partnerrow ">
					<h3>Our Services</h3>
					<div class="row partnerrow ">
						 <span class="col-lg-4 col-md-4 col-sm-6 col-xs-6">0</span>
						<span class="col-lg-4 col-md-4 col-sm-6 col-xs-6">0</span>
						<span class="col-lg-4 col-md-4 col-sm-6 col-xs-6">0</span> 
						
						<ul class="list-unstyled col-md-12 row partnerrow ">
							
							<li class="col-lg-4 col-md-4 col-sm-6 col-xs-6" href="home.php"><img class="img-fluid " src="img/0.png" ></a>  </li>
							
							<li class="col-lg-4 col-md-4 col-sm-6 col-xs-6" href="home.php">  <img class="img-fluid " src="img/1.png" > </a></li>
							
							<li class="col-lg-4 col-md-4 col-sm-6 col-xs-6" href="home.php">  <img class="img-fluid " src="img/2.png" > </a>
							</li>
							
							<li class="col-lg-4 col-md-4 col-sm-6 col-xs-6" href="home.php"><img class="img-fluid " src="img/3.png" ></a>  </li>
							
							<li class="col-lg-4 col-md-4 col-sm-6 col-xs-6" href="home.php">  <img class="img-fluid " src="img/4.png" > </a></li>
							
							<li class="col-lg-4 col-md-4 col-sm-6 col-xs-6" href="home.php">  <img class="img-fluid " src="img/5.png" > </a>
							</li>
 href="www.booking.com"  
							
							
						
						</ul>
						<div class="col-md-12">
					
					
						<button class="btn btn-info explorebttn "><a href="services.php" target="blank" class="readm-about">Explore</a></button>


 readm-about-bttn 

						</div>
					</div>
				
				</div>
			
	</section>
			
				 -->
			
			

			
			
			
			<!-- نهاية سكشن آراء العملاء  --> 
			
			<!-- بداية سكشن جدول خطة الاسعار  --> 
			
<!-- 			
			<section class="prices text-center">
				<div class="container">
					<h1>Our Price plans</h1>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="price_box">
								<h3 class="text-primary"> Standard Plan </h3>
                                <p class="rrs">$20</p>
                                <ul class="list-unstyled">
                                    <li> Storage: 30 Gb </li>
                                    <li> E-mails: 30  </li>
                                    <li> 5 Ip </li>
                                    <li> Databases: 5 </li>
                                </ul>
                                <a href=# class="btn btn-primary">Order Now</a>
							</div>
							
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="price_box">
								<h3 class="text-success"> Premium Plan </h3>
                                <p class="rrs">$40</p>
                                <ul class="list-unstyled">
                                    <li> Storage: 50 Gb </li>
                                    <li> E-mails: 50  </li>
                                    <li> 7 Ip </li>
                                    <li> Databases: 8 </li>
                                </ul>
                                <a href=# class="btn btn-success">Order Now</a>
							</div>
							
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="price_box">
								<h3 class="text-info"> Super Plan </h3>
                                <p class="rrs">$70</p>
                                <ul class="list-unstyled">
                                    <li> Storage: 80 Gb </li>
                                    <li> E-mails: 70  </li>
                                    <li> 10 Ip </li>
                                    <li> Databases: 10 </li>
                                </ul>
                                <a href=# class="btn btn-info">Order Now</a>
							</div>
							
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="price_box">
								<h3 class="text-danger"> Gold Plan </h3>
                                <p class="center-block">$100</p>
                                <ul class="list-unstyled">
                                    <li> Storage: 120 Gb </li>
                                    <li> E-mails: 100  </li>
                                    <li> 20 Ip </li>
                                    <li> Databases: 20 </li>
                                </ul>
                                <a href=# class="btn btn-danger">Order Now</a>
							</div>
							
						</div>
					
					
					
					
					
					
					
					</div>
				
				</div>
			
			
			</section> -->
			
			
			
			<!-- نهاية سكشن جدول خطة الاسعار  --> 
			

			
			<!-- بداية سكشن فريقنا   --> 
<!-- 			
			<section class="ourteam text-center">
				<div class="contentteam">
					<div class="container">
						<h1>Meet Our Team</h1>
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="tmember">
									<img class="rounded-circle" src="img/m1.png">
									<h3>Hassan Bahaa</h3>
									<p>The Founder of El-Bohemy Inc.</p>
									<i class="icon-facebook-sign icon-large"></i>
									<i class="icon-twitter-sign icon-large"></i>
									<i class="icon-instagram icon-large"></i>
								</div>
							</div>
							
							<div class="col-lg-3 col-sm-6">
								<div class="tmember">
									<img class="rounded-circle" src="img/m6.png">
									<h3>John Smith</h3>
									<p> The Content Creator at El-Bohemy Inc. </p>
									<i class="icon-facebook-sign icon-large"></i>
									<i class="icon-twitter-sign icon-large"></i>
									<i class="icon-instagram icon-large"></i>
								</div>
							</div>
							
							<div class="col-lg-3 col-sm-6">
								<div class="tmember">
									<img class="rounded-circle" src="img/m1.png">
									<h3>Ahmed Fouad</h3>
									<p>Development department manager at El-Bohemy Inc. </p>
									<i class="icon-facebook-sign icon-large"></i>
									<i class="icon-twitter-sign icon-large"></i>
									<i class="icon-instagram icon-large"></i>
								</div>
							</div>
							
							<div class="col-lg-3 col-sm-6">
								<div class="tmember">
									<img class="rounded-circle" src="img/m5.png">
									<h3>John Wick </h3>
									<p>Development department manager at El-Bohemy Inc. </p>
									<i class="icon-facebook-sign icon-large"></i>
									<i class="icon-twitter-sign icon-large"></i>
									<i class="icon-instagram icon-large"></i>
								</div>
							</div>
							
						</div>
					</div>
				</div>	
			</section>
			 -->
			
			
			
			
			<!-- نهاية سكشن فريقنا   --> 
			
			
			
			<!-- بداية سكشن الاشتراك   --> 
<!-- 			
			<section class="subscribe text-center">
					<div class="container ">
						<h1>Keep in touch</h1>
						<p class="lead"> Sign Up for get all new updates </p>
						<form class="form-inline ">
							<input type="text" class="form-control-lg" placeholder="Type your email">
							<button class="btn btn-danger btn-lg"><i class="icon-envelope"></i> SUBSCRIBE</button>
						</form>
					
					
					</div>
			
			
				</section>
			 -->
			<!-- نهاية سكشن الاشتراك   --> 
			
			
					
			<!-- بداية سكشن الاحصائيات   -->
			
<!-- 			
			<section class="statssec text-center">
				<div class="datab">
					<div class="container">
						<h1>Our statistics </h1>
						<div class="row">
							 العمود الاول من الداتا -->
							<!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							
								<div class="datacol">
									<i class="icon-group icon-3x"></i>
									<p>8320</p>
									<span>Users</span>
								</div>
							
							</div>  -->
						<!-- العمود الثاني من الداتا -->
<!-- 							
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							
								<div class="datacol">
									<i class="icon-comments icon-3x"></i>
									<p>19632</p>
									<span>Posted Comments</span>
								</div>
							
							</div> -->

							<!-- العمود الثالث من الداتا
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							
								<div class="datacol">
									<i class="icon-suitcase icon-3x"></i>
									<p>827</p>
									<span>Completed Projects</span>
								</div>
							
							</div> -->


							<!-- العمود الرابع من الداتا
							
							<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							
								<div class="datacol">
									<i class="icon-star icon-2x"></i> <i class="icon-star icon-3x"></i> <i class="icon-star icon-2x"></i>
									<p>693</p>
									<span>Rating</span>
								</div>
							
							</div>
							
							
							
						</div>

					</div>
			
				</div>
			</section>
			
			
			 -->
			<!-- نهاية سكشن الاحصائيات    --> 
			
			
			
			<!-- بداية سكشن المهارات    
			
			<section class="skillsinfo">
				<div class="container">
					<h2 class="text-center">Our Skills</h2>
					<div class="row">--> 
						
						<!-- بداية ديف البارات-->
<!-- 

						<div class="col-md-5">
							
							
							<div class="skills-sec">
								 -->
<!-- 								
								first skill 
								<div class="progress">
									<div class="progress-bar bg-success " role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
									HTML5/CSS3									
									</div>
								
								</div> -->
								<!--first skill end-->
								
<!-- 								
								second skill
								<div class="progress">
									<div class="progress-bar bg-primary " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									JAVASCRIPT									
									</div>
								
								</div> -->
								<!--second skill end-->
								
								
								<!--third skill-->
<!-- 								
								<div class="progress">
									<div class="progress-bar bg-info " role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
									BOOTSTRAP									
									</div>
								
								</div> -->
								<!--third skill end-->
								
								<!--forth skill-->

<!-- 
								<div class="progress">
									<div class="progress-bar bg-danger " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
									PHP								
									</div>
								
								</div> -->



								<!--forth skill end-->
							
<!-- 							
							</div>
						
						
						
						</div> -->
						<!--نهاية ديف البارات-->
						
						<!--بداية ديف الكلام-->


						<!-- <div class="col-md-6 offset-md-1">
							<h3>About The Team</h3>
							<p class="lead">
							Remain offices boy will directly if as stronger a out passed therefor perceived half narrow yet need attention being high money him continual deal Rich Hard village steepest Collected built true been remaining this ten painful warmly like are aften them.
							</p>
							<button class="btn btn-secondary">Talk With Professional</button>
						</div> -->


						<!--نهاية ديف الكلام-->
<!-- 					
					</div>
				
				
				
				
				</div>
			
			</section> -->
			
			
			<!-- نهاية سكشن المهارات    --> 
			
			
			<!--start section contact us-->
			
			<!-- <section class="contact-us text-center">
				
				<div class="fields">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<i class="icon-phone icon-4x"></i>
								<h1> Tell Us What You Fell </h1>
								<p> Feel Free To Contact Us Anytime</p>
							</div> -->



							<!--start contact form-->

<!-- 							
								<div class="col-md-12">
									<form action="home2.php" method="post">
										<div class="form-row">
											<div class="col-md-6 col-xs-12">
												<div class="col">
														<div class="form-group">
															<input class="form-control form-control-lg messcon" placeholder="Username" name="fullname" required="">
														</div>

														<div class="form-group">
															<input class="form-control form-control-lg messcon" placeholder="Email" name="email" required="">
														</div>

														<div class="form-group">
															<input class="form-control form-control-lg messcon" placeholder="Phone" name="phone" required="">
														</div>
														<div class="form-group">
															<input class="form-control form-control-lg messcon hotelname" placeholder="hotelname" name="hotelname" style="display: none;" >
														</div>
														<script>
																$( document ).ready(function() {
																	console.log( "55" );
																	console.log($("title").html());
																	$(".hotelname").val($("title").html());
															
																});
															
																
																</script>
												</div>	
											</div>
												<div class="col-md-6 col-xs-12 ">
													<div class="col textp">
														<textarea class="form-control messcon" placeholder="Your Message" name="message" required=""></textarea>
														<button type="submit" class="btn btn-success btn-block btn-lg" name="send">Contact</button>
													</div>
												</div>
										</div>
									
									</form>
									
								</div> -->


						<!--end contact form-->
							
<!-- 							
						</div>
					</div>
				
				
				</div>

			</section> -->




			<!--end section contact us-->
			
			
			

			<!--Start our clients section-->

<!-- 			
			<section class="ourclient">
				<div class="container">
					<div class="row">
						<ul class="list-unstyled col-md-12 row ">
							
							<li class="col-lg-2 col-md-2 col-sm-6 col-xs-6"><img class="img-fluid " src="img/brands/firstbrand.png">  </li>
							
							<li class="col-lg-2 col-md-2 col-sm-6 col-xs-6"> <img class="img-fluid " src="img/brands/secondbrand.png"></li>
							
							<li class="col-lg-2 col-md-2 col-sm-6 col-xs-6"><img class="img-fluid " src="img/brands/brand3.png">
							</li>
							
							<li class="col-lg-2 col-md-2 col-sm-6 col-xs-6"><img class="img-fluid" src="img/brands/brand4.png">
							</li>
							
							<li class="col-lg-2 col-md-2 col-sm-6 col-xs-6"><img class="img-fluid" src="img/brands/brand5.png">
							</li>
							
							<li class="col-lg-2 col-md-2 col-sm-6 col-xs-6"><img class="img-fluid " src="img/brands/brand6.png">
								
							</li>
						
						</ul>
					
					</div>
				
				</div>
			
	</section> -->

			
			<!--End our clients section-->

			
			<!--Start Footer-->

<!-- 
			<section class="footer">
				<div class="container">
					<div class="row"> -->


						<!--Start first part-->
<!-- 
						<div class="col-lg-4 col-md-6">
							<h3>Sitemap</h3>
							<ul class="list-unstyled thcols">
								<li>Home </li>
								<li>About </li>
								<li>Company </li>
								<li> Code </li>
								<li> Design </li>
								<li> Contact </li>
								
							
							</ul> -->
							<!--Social Media-->
<!-- 							
							<ul class="list-unstyled socialcols">
								<li><i class="icon-facebook-sign icon-2x"></i></li>
								<li><i class="icon-instagram icon-2x"></i></li>
								<li><i class="icon-pinterest-sign icon-2x"></i></li>
								<li><i class="icon-google-plus-sign icon-2x"></i></li>
								<li><i class="icon-twitter-sign icon-2x"></i></li>
								<li><i class="icon-linkedin-sign icon-2x"></i></li>

							</ul> -->
							<!--Social Media-->
							
						<!-- </div> -->
						<!--end first part-->
						
						<!--Start Second part-->
<!-- 

						<div class="col-lg-4 col-md-6">
							<h3>Latest Articles</h3>
							<div class="media">
								<a class="pull-left" href="#">
									<img class=" mr-3" src="img/articles/code%20(2).png">
								</a>
								<div class="media-body">
									<h5 class="media-heading">Programming</h5>
									<p>This Is Some Text About Programming Describe The Media Of Bootstrap 4.5</p>
								</div>
							</div>
							
							<div class="media">
								<a class="pull-left" href="#">
									<img class=" mr-3" src="img/articles/edit.png">
								</a>
								<div class="media-body">
									<h5 class="media-heading">Coding</h5>
									<p>This Is Some Text About Programming Describe The Media Of Bootstrap 4.5</p>
								</div>
							</div>
							
							<div class="media">
								<a class="pull-left" href="#">
									<img class=" mr-3" src="img/articles/lock%20(3).png">
								</a>
								<div class="media-body">
									<h5 class="media-heading">Security</h5>
									<p>This Is Some Text About Programming Describe The Media Of Bootstrap 4.5</p>
								</div>
							</div>
							
							
						</div> -->


						<!--end Second part-->

<!-- 						
						<div class="col-lg-4 col-md-12">
							<h3>Our Work</h3>
							<img src="img/work/1.jpg" class="tecphoto img-thumbnail">
							<img src="img/work/2.jpg" class="tecphoto img-thumbnail">
							<img src="img/work/3.jpg" class="tecphoto img-thumbnail">
							<img src="img/work/5.jpg" class="tecphoto img-thumbnail">
							
						</div>
					
					
					</div>
				
				</div>
				
				<div class="copyright text-center">
					Copyright &copy; 2020 <span>El-Bohemy</span> Inc.
				</div>
			</section> -->
			
			<!--End footer-->
			
			
			<!--Start Loading Screen section-->
			
	<!--		<div class="overlay-screen" id="screen">
			
				<div class="spinner">
				  <div class="bounce1"></div>
				  <div class="bounce2"></div>
				  <div class="bounce3"></div>
				</div>
			</div>-->
			
			
			<!--End Loading Screen section-->
			
		<?php include "footer.php"; ?>
       	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script src="js/jquery-3.5.1.min.js"></script>
       	<script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.bundle.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/js.js"></script>
              

		</body>
		
		
		
	<!--	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->