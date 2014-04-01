	</div><!-- Row End -->
</div><!-- Container End -->

<div class="full-width footer-widget">
	<div class="row">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</div>

  <div id="footer">
        <div id="contact">
         <div class="page_container">
                <div class="wrap">
                    <div class="container">
                        <section>
                            <div class="row">
                                <div class="span4">
                                    <h2 class="title"><span>Contact Info</span></h2>
                                    <div id="map"><iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=strasbourg&amp;aq=&amp;sll=46.22475,2.0517&amp;sspn=22.348797,53.569336&amp;ie=UTF8&amp;hq=&amp;hnear=Strasbourg,+Bas-Rhin,+Alsace&amp;t=m&amp;z=11&amp;ll=48.583148,7.747882&amp;output=embed"></iframe><br /></div>
                                    <p>Strasbourg</p>
                                    <p>Phone: 06.00.00.04.00<br/>Email: <a href="mailto:#">celine.goetzinger@gmail.com</a><br/>Web: <a href="#">http://goetzinger-celine.fr</a></p>                           
                                </div>
                                <div class="span8">
                                    <h2 class="title"><span>Contact</span></h2>
                                    <div class="contact_form">  
                                        <div id="note"></div>
                                        <div id="fields">
                                           <?php echo do_shortcode( '[contact-form-7 id="87" title="Formulaire de contact 1"]' ); ?>
                                        </div>
                                    </div>                   
                                </div>                  
                            </div>
                        </section>
                    </div>
                </div>
            </div>
       </div>
        <div class="footer_bottom">
            <div class="wrap">
            	<div class="container">
                	<div class="row">
                		<div class="span5">
                        	<div class="foot_logo"><a href="index.html"><img src="img/foot_logo.png" alt="" /></a></div>    
                        	<div class="copyright">&copy; 2014 Céline Goetzinger. Webdesginer - Infographiste. All Rights Reserved.</div>                        
                        </div>
                        <div class="span7">
                        	<div class="foot_right_block">
                            	<div class="fright">
                                	<form action="#" method="post">
                                        <input class="inp_search" name="name" type="text" value="Search the Site" onfocus="if (this.value == 'Search the Site') this.value = '';" onblur="if (this.value == '') this.value = 'Search the Site';" />                                        
                                    </form>
                                </div>
                                <div class="follow_us">
                                	<ul>
                                        <li><a rel="tooltip" href="#" title="Facebook" class="facebook">Facebook</a></li>
                                        <li><a rel="tooltip" href="#" title="Twitter" class="twitter">Twitter</a></li>
                                        <li><a rel="tooltip" href="#" title="Delicious" class="delicious">Delicious</a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            
                            	<div class="clear"></div>
                            	<div class="foot_menu">
                            		<ul>
                                        <li><a href="<?php echo get_settings('home'); ?>" class="current">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="">Portfolio</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                            	</div>
                            </div>                            
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
    <!--//footer-->    

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>