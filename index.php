﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="container-fluid">
    	<div class="row">
    		<nav class="navbar navbar-default navbar-fixed-top navigation" role="navigation">
    			<div class="container">
    				<!-- <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
    					
    				</div> -->
    				<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> -->
    					 <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>	
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">	
								<div class="header__logo">
									<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
								</div>      
							</div>
					    </div>
					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">		      	     
					      <ul class="nav navbar-nav navbar-right navigation__list">		      
					        <li><a href="#go_about" class="smoothScroll">About</a></li>
					        <li><a href="#go_serv" class="smoothScroll">Services</a></li>
					        <li><a href="#go_ben" class="smoothScroll">Benefits</a></li>
					        <li><a href="#go_production" class="smoothScroll">Production</a></li>
					        <li><a href="#go_cont" class="smoothScroll">Contacts</a></li>
					        <li><a href="#" class="write_us" data-toggle="modal" data-target="#myModal">Write Us</a></li>  		       
					      </ul>
					    </div><!-- /.navbar-collapse -->
					<!-- </div> -->
				</div>
			</nav>
	    	<header class="header">
	    		<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="header__contacts">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<p><?php echo get_theme_mod('address1_textbox'); ?></p>
										<h3><?php echo get_theme_mod('phone1_textbox'); ?></h3>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<p><?php echo get_theme_mod('address2_textbox'); ?></p>
										<h3><?php echo get_theme_mod('phone2_textbox'); ?></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="header__logo">
								<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
							<article class="header__tittle">
								<h1><b>Search</b> products and <b>shipping</b> goods from China worldwide.</h1>
							</article>
						</div>
					</div>
				</div>
	    	</header>	

		
			<section class="about">
					<div class="about__tittle">
						<a name="go_about" id="go_about"></a>
						<h1 class="block_title">About company</h1>
						<h3 class="block_descript">Our customers trust us and, therefore, earn with us.</h3>
					</div>
				
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="about__desc">
							<div class="col-lg-9 col-md-9 col-lg-offset-3 col-md-offset-3 col-sm-12 col-xs-12">
								<?php echo get_post_field('post_content', 111); ?>
<!--								<p>   The company "Low Cost Cargo" offers services to find suppliers in China, so you can establish business relationship with absolutely no risk of financial loss. </p>-->
<!--								<p>Turning to us, every client when choosing a supplier from China can count on an individual approach, taking into account the requirements. Moreover, all actions are carried out in accordance with the laws of the countries.</p>-->
<!--								<p>We also provide advice on methods of interaction with suppliers, trained competent staff of our company, taking into account the peculiarities of the domestic market. Independent collection of necessary information much more expensive than the payment of our services, since this work will require a staff of experts with knowledge of the laws of China and the principles of doing business in this country. Use our services and you will be able to save not only time, but also significant amounts of money.</p>-->
<!--								<p>Our company also offers a full range of freight services and ensure high-quality and reliable delivery of cargo regardless of its volume, weight and quantity. The company is also engaged in LowCostCargo consolidation, storage of goods in a warehouse, provides forwarding and brokerage services.</p>-->
<!--								<p>Export - export from this country (in this case China) various types of goods for use or sale in the foreign market, the buyer and export operations - is the operation associated with the export. The company provides a full range of services that optimizes the transportation of goods from China. Export operations - is a complex task, which is capable of solving our experts.</p>-->
<!--								<p>Having become reliable partners and good friends, let us open the possibility of this great country together!c</p>-->
<!--							--></div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="row">
							<div class="about__img-lg">
								<img src="<?php bloginfo('template_directory'); ?>/img/img-lg.png" alt="">
							</div>
							<div class="about__img-sm">
								<img src="<?php bloginfo('template_directory'); ?>/img/img-sm.png" alt="">
							</div>
						</div>
					</div>

			</section>
		
		
    	
			<section class="services">			
				<div class="container">
					<a name="go_serv" id="go_serv"></a>
					<h1 class="block_title">Services</h1>
					<h3 class="block_descript">All services of the service are divided into four main divisions,
					click on the section you are interested. Welcome to China!</h3>
					<?= do_shortcode('[services]');?>
				</div>				
			</section>


			<section class="order">			
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
								<h5>Want to contact the Manager?</h5>
								<p>Aliquam sed posuere urna, et gravida nisl. Praesent interdum nisl libero, pretium egestas purus eleifend vitae. Mauris suscipit vel lectus at luctus.</p>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
								<div class="order__form">
						<!-- 			<form action="">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<input type="text" class="order__form--input" placeholder="Your name">
											</div>

											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<input type="tel" class="order__form--input" placeholder="Your phone">
											</div>	
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<input type="submit" class="order__form--sub" value="order now">
											</div>
										</div>
									</form> -->
									<?php echo do_shortcode("[contact-form-7 id='6' title='order']"); ?>
								</div>
								<small><i class="fa fa-lock"></i> * Your data will not be transferred</small>
							</div>
						</div>
					</div>			
			</section>

			<section class="benefits">
				<div class="container">
					<a name="go_ben" id="go_ben"></a>
					<h1 class="block_title">Benefits</h1>
					<h3 class="block_descript">Our experience and reputation - this is most important,<br> 
	but thereis still several very important points:</h3>
					<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1">
						<div class="row">
							<?= do_shortcode('[benefits]'); ?>
						</div>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="container">
					<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<img src="<?php bloginfo('template_directory'); ?>/img/slack.png" alt="">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<img src="<?php bloginfo('template_directory'); ?>/img/adobe.png" alt="">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<img src="<?php bloginfo('template_directory'); ?>/img/google.png" alt="">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<img src="<?php bloginfo('template_directory'); ?>/img/spotify.png" alt="">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
						<img src="<?php bloginfo('template_directory'); ?>/img/nice.png" alt="">
					</div>
					</div>
				</div>
			</section>

			<section class="prod">			
				<div class="container">
					<a name="go_production" id="go_production"></a>
					<h1 class="block_title">Production</h1>
					<h3 class="block_descript">All production of the service are divided into four main divisions,
					click on the section you are interested. Welcome to China!</h3>
					<?= do_shortcode('[production]') ?>
				</div>				
			</section>

			<section class="contacts">
				<div class="container">
					<a name="go_acont" id="go_cont"></a>
					<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
						<h4 class="al"><?php echo get_theme_mod('address1_textbox'); ?>    <?php echo get_theme_mod('phone1_textbox'); ?>   </h4>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-2">
						<h4 class="ar"><?php echo get_theme_mod('address2_textbox'); ?><br><?php echo get_theme_mod('phone2_textbox'); ?></h4>
					</div>
					<h1 class="block_title">Contacts</h1>
						<h3 class="block_descript">We are located in Guangzhou, the center of world production and trade. <br>
							Write your question or a brief description of the situation. <br>
						We very quickly get back to you :)</h3>
						<div class="row contacts__animated">
							<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<!-- <form action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<input type="text" class="contacts--input" placeholder="Your Name">								
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<input type="text" class="contacts--input" placeholder="Email">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<textarea class="contacts--text" row="1" placeholder="Message"></textarea>
								</div>
							</div>
		                    
		                    <div class="row">
			                    <div class="col-lg-2 col-lg-offset-10 col-md-2 col-md-offset-10 col-sm-4 col-xs-4 col-sm-offset-8 col-xs-offset-8">
			                    	<input type="submit" class="contacts--sub" value="Send">
			                    </div>  
		                    </div>
		                    </div>	
		                </form> -->
		                <?php echo do_shortcode("[contact-form-7 id='5' title='Message']"); ?>
		                </div>
						</div>
					</div>
			</section>

			<div>
					<footer class="footer">


						<div class="container">
							
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<p>广州市海珠区宝岗大道中润田雅苑B602 <br>
			B-602 , Runtian bldg , Baogang road , Haizhu district , Guangzhou , China</p>
								<p><?php echo get_theme_mod('address1_textbox'); ?>: <?php echo get_theme_mod('phone1_textbox'); ?>  <br>
									<?php echo get_theme_mod('address2_textbox'); ?>: <?php echo get_theme_mod('phone2_textbox'); ?></p>
								<p>Email: <?php echo get_theme_mod('mail_textbox'); ?></p>
							</div>
							<div class="col-lg-3 col-md-3 col-lg-offset-3 col-md-offset-3 col-sm-12 col-xs-12">
								<div class="footer__logo">
									<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
								</div>
								</div>
							</div>
						
					</footer>
					</div>
				</div>
		    </div>

	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="block_descript" id="myModalLabel">Write Us</h3>
      </div>
      <div class="modal-body">
        <div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<?php echo do_shortcode("[contact-form-7 id='7' title='Message_modal']"); ?>
	            </div>
    		</div>
  </div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>