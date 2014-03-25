	</div><!-- Row End -->
</div><!-- Container End -->

<div class="full-width footer-widget">
	<div class="row">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</div>

<footer class="full-width" role="contentinfo">
	<div class="row">
		<div class="large-5 columns">
			<form action="" method="post">
			    <input type="text" name="user_email" id="user_email" placeholder="Votre email" class="" />
			    <input type="text" name="user_name" id="user_name" placeholder="Nom" />
			    <input type="text" name="user_fname" id="user_fname" placeholder="Prénom" />
			    <textarea name="textMessage" placeholder="Ecrivez votre message ici ..."></textarea>
			    <input type="submit" name="submitPost" value="Envoyer"  />
			</form>
		</div>
		<div class="large-3 columns">
			<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list')); ?>
		</div>
		<div class="large-4 columns">
			<h3>Suivez-moi sur le web</h3>
			<ul class="top-bar">
		    	<li class="reseau">
					<a href="" rel="linkedIn"> <img src="http://dev.tisseur-de-toile.fr/mjm-web2/celine/portfolio/wp-content/uploads/2014/03/linkedin.png" class="sociaux" alt="linkedin"> </a>
	        		<a href="" rel="google+"> <img src="http://dev.tisseur-de-toile.fr/mjm-web2/celine/portfolio/wp-content/uploads/2014/03/google+.png" class="sociaux" alt="google+"> </a>
	        		<a href="" rel="twitter"> <img src="http://dev.tisseur-de-toile.fr/mjm-web2/celine/portfolio/wp-content/uploads/2014/03/linkedin.png" class="sociaux" alt="twitter"> </a>
	        	</li>
		    </ul>
		</div>
	</div>
	<div class="row love-reverie">
		<div class="large-12 columns">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>