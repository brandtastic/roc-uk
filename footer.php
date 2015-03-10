<footer class="site-footer">
	<div class="container">
	
		<div class="contact">
			<img src="<?php bloginfo('template_directory'); ?>/images/white-logo.png" class="footer-logo">
			<p><strong>ROC UK</strong><br>
			Level 29, 1 Canada Square<br>
			Canary Wharf, London  E14 5DY<br></p>
			
			<p>Company No: 08772455 <br>
			VAT No: 185 7703 73</p>
		</div>
		
		<div class="nav">
			<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
		</div>
		
		<div class="twitter-copyright">
			<h3><i class="fa fa-twitter"></i> ROC Tweets</h3>
			
			<ul class="sharers text-left">
				<li><a href="#" title="" class="fb">Share <i class="fa fa-facebook"></i></a></li>
				<li><a href="#" title="" class="twitter">Tweet <i class="fa fa-twitter"></i></a></li>
				<li><a href="#" title="" class="google">Plus <i class="fa fa-google-plus"></i></a></li>
			</ul>
			
			<p class="text-right"><strong>Website by Brandtastic.</strong></p>
		</div>
		
		<div class="fix"></div>
		
	</div>
</footer>

</div><!-- container -->

<?php wp_footer(); ?>
</body>
</html>