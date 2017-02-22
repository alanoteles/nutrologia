<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nutrologia
 */

?>

		

		<?php wp_footer(); ?>

		<!-- FOOTER
		========================================== -->
		<footer>
			<div class="container">
				<div class="col-sm-3">
					<!-- <p>
						<a href="/">
							<img src="<?php //bloginfo('stylesheet_directory');  ?>/assets/img/logo.png" alt="Bootstrap to Worpress">
						</a>
					</p> -->
				</div><!-- end col-sm-3 -->

				<div class="col-sm-6">
					<nav>
						<ul class="list-unstyled list-inline">
							<li><a href="">Início</a></li>
							<li><a href="">Sobre o projeto</a></li>
							<li><a href="">Fale conosco</a></li>
						</ul>
					</nav>
				</div><!-- end col-sm-6 -->

				<div class="col-sm-3">
					<p class="pull-right">
						&copy; 2016 Alano Teles
					</p>
				</div>
			</div><!-- container -->
		</footer>
		
		<!-- MODAL 
		========================================== -->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="myModalLabel">
							<i class="fa fa-envelope"></i>
							Subscribe to our Mailing list
						</h4>
					</div><!-- modal header -->

					<div class="modal-body">
						<p>
							Simply enter your name and email ! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em>
						</p>

						<form class="form-inline" role="form">
							<div class="form-group">
								<label class="sr-only" for="subscribe-name">Your first name</label>
								<input type="text" class="form-control" id="subscribe-name" name="subscribe-name" placeholder="Your first name">
							</div>

							<div class="form-group">
								<label class="sr-only" for="subscribe-email">and your email</label>
								<input type="text" class="form-control" id="subscribe-email" name="subscribe-email" placeholder="and your email">
							</div>

							<input type="submit" class="btn btn-danger" value="Subscribe!">
						</form>

						<hr>

						<p>
							<small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small>
						</p>
					</div>
				</div>
			</div>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>	
		<script src="<?php bloginfo('template_directory');  ?>/assets/js/jquery-2.1.1.min.js"></script>
		<script src="<?php bloginfo('template_directory');  ?>/assets/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory');  ?>/assets/js/main.js"></script>
		<script src="//use.typekit.net/gla7wnd.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
	</body>
</html>
