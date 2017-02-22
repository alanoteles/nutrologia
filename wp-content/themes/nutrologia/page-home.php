<?php
/*
	Template Name: Home Page

 */
//Custom fields
$prelaunch_price	= get_post_meta( 7, 'prelaunch_price', true);
$launch_price	= get_post_meta( 7, 'launch_price', true);
$final_price	= get_post_meta( 7, 'final_price', true);

//Advanced Custom Fields
$income_feature_image	= get_field('income_feature_image');
$income_section_title	= get_field('income_section_title');
$income_section_desc	= get_field('income_section_description');
$reason_1				= get_field('reason_1_title');
$reason_1_desc			= get_field('reason_1_description');
$reason_2				= get_field('reason_2_title');
$reason_2_desc			= get_field('reason_2_description');


get_header(); ?>

<!-- HERO 
========================================== -->
<section id="hero" >
	<article>
		<div class="container clear-fix">
			<div class="row">
				<!-- <div class="col-sm-5">
					<img src="<?php //bloginfo('stylesheet_directory');  ?>/assets/img/logo-badge.png" alt="Bootstrap to Worpress" class="logo">
				</div> --><!-- col -->

				<div class="col-sm-12 hero-text">
					<h1><?php bloginfo('name'); ?></h1>
					<p class="lead"><?php bloginfo('description'); ?></p>

					<!-- <div id="price-timeline">
						<div class="price active">
							<h4>Pre-Launch Price <small>Ends soon</small></h4>
							<span><?php //echo $prelaunch_price ?></span>
						</div><!-- price -->
						<!-- <div class="price">
							<h4>Launch Price <small>Coming soon</small></h4>
							<span><?php //echo $launch_price ?></span>
						</div> --><!-- price -->
						<!-- <div class="price">
							<h4>Final Price <small>Coming soon</small></h4>
							<span><?php //echo $final_price ?></span>
						</div> --><!-- price --> 
					</div>

					<!-- <p><a class="btn btn-lg btn-danger" href="/" role="button">Enroll &raquo;</a></p> -->
				
				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->
	</article>
</section><!-- hero -->

<!-- OPT IN
========================================== -->
<section id="optin">
	<div class="container">
		<div class="row">
			
			<div class="form-group col-sm-8">
				<form class="search-form" role="form">
					<input type="text" id="sidebar-search" placeholder="Localizar conteúdo...">
				</form>
			</div>
			<div class="form-group  col-sm-4">
				<!-- <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal"> -->
				<button class="btn btn-success btn-block">
					Buscar
				</button>
			</div>
					
		</div>
	</div>
</section>


<!-- BOOST YOUR INCOME 
========================================== -->
<section id="boost-income">
	<div class="container">
		

		<div class="row">
			
			<div class="col-sm-12">
				<table class="table table-striped">
				    <tbody>
				      <tr>
				      <td><img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>"></td>
				        <td><strong>Filosofia</strong></td>
				        <td>Verdade Natural é o Naturalmente Correto, Certo, Homeostático. Homeostasia é a tendência ao equilíbrio ou estabilidade dos sistemas autorregulados, que garantem a persistência do todo existente em meio permanentemente mutável.</td>
				      </tr>
				      <tr>
				      <td><img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>"></td>
				        <td><strong><a href="detalhes">Universo</a></strong></td>
				        <td>Primitivamente, havia poucos astros se atritando, se aquecendo, explodindo e extrusando outros astros novos; e, ultimamente, existem muitos outros astros se atritando, se aquecendo, explodindo e extrusando outros astros novos; e tudo isso aumentando, progressivamente, a família astronômica.</td>
				      </tr>
				      <tr>
				      <td><img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>"></td>
				        <td><strong>Meio ambiente</strong></td>
				        <td>No Brasil, a vida orgânica começou mais ou menos a 60 milhões de anos atrás, em Porto Alegre, pelo abaixamento da temperatura ambiental anual média abaixo de 42ºC; e terminará daqui a 220 milhões de anos, em Macapá, pelo abaixamento da temperatura inferior a 0ºC.</td>
				      </tr>
				    </tbody>
				  </table>
			</div>
		</div>
	</div>
	
</section>


	

<?php
get_footer();
