<?php 
/**
 * Theme Footer Section for our theme.
 * 
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #main -->	
	<?php do_action( 'spacious_before_footer' ); ?>
		<footer id="colophon" class="clearfix">	
			<?php get_sidebar( 'footer' ); ?>	
			<div class="footer-socket-wrapper clearfix">
				<div class="inner-wrap">
                    <style>
                          h6.footer         {font-size: 0.96em; line-height: 1em;}
                          div.footer-menu   {padding-top: 12px;}
                          h2.footer-info    {float: right; margin-top: 4px;}
                          div.footer-info   {font-size: 0.48em; line-height: 1.32em; margin-top: 6px;}
                    </style>
                    <div class="grid_2">                        
                        <div class="footer-menu">
                            <?php if ( pll_current_language("locale") == "en_GB"): ?>
                            <h6 class="footer"><a href="<?php echo get_translated_page('our-goals-nl', "en_GB") ?>">Our Goals</a></h6>    
                            <h6 class="footer"><a href="<?php echo get_translated_page('our-sponsors-nl', "en_GB") ?>"">Sponsors</a></h6>
                            <h6 class="footer"><a href="<?php echo get_translated_page('help-ons', "en_GB") ?>"">Donations</a></h6>
                            <?php else: ?>
                            <h6 class="footer"><a href="<?php echo get_translated_page('our-goals-nl', "nl_NL") ?>"">Doelstellingen</a></h6>    
                            <h6 class="footer"><a href="<?php echo get_translated_page('our-sponsors-nl', "nl_NL") ?>"">Sponsors</a></h6>
                            <h6 class="footer"><a href="<?php echo get_translated_page('help-ons', "nl_NL") ?>"">Donaties</a></h6>                            
                            <?php endif;    ?>
                        </div>
                    </div>
                    <div class="grid_2">
                        <div class="footer-menu">
                            <?php if ( pll_current_language("locale") == "en_GB"): ?>
                            <h6 class="footer"><a href="<?php echo get_translated_page('onze-projecten', "en_GB") ?>">Projects</a></h6>    
                            <h6 class="footer"><a href="<?php echo get_translated_page('news', "en_GB") ?>">News</a></h6>
                            <h6 class="footer"><a href="<?php echo get_translated_page('contact-2', "en_GB") ?>">Contact</a></h6>
                            <?php else: ?>
                            <h6 class="footer"><a href="<?php echo get_translated_page('onze-projecten', "nl_NL") ?>">Projecten</a></h6>    
                            <h6 class="footer"><a href="<?php echo get_translated_page('news', "nl_NL") ?>">Nieuws</a></h6>
                            <h6 class="footer"><a href="<?php echo get_translated_page('contact-2', "nl_NL") ?>">Contact</a></h6>                            
                            <?php endif;    ?>
                        </div>
                    </div>
                    <div class="grid_4" style="text-align: right;">
                        <h6 class="footer"><a href="<?php echo admin_url();?>">Admin</a></h6>                            
                    </div>
                    <div class="grid_4">          
                        <h2 class="footer-info">
							<a class="footer-logo" href="<?php echo site_url(); ?>" rel="home">Living Water Link</a><br/>
                            <div class="footer-info">
                                Kreekplein 10, 3079 AB, Rotterdam<br/>
                                <table class="footer">
                                    <tr><td><span class="fa fa-phone"></span></td><td><a href="tel:0031104793933">+31 104 793 933</a></td></tr>
                                    <tr><td><span class="fa fa-mobile-phone" style="font-size: 1.2em;"></span></td><td><a href="tel:0031611088834">+31 611 088 834</a></td></tr>
                                    <tr><td><span class="fa fa-envelope-o"></td><td><a href="mailto:livingwater@hetnet.nl">livingwater@hetnet.nl</a></td></tr>
                                    <tr><td>IBAN</td><td>NL69 0004 6598 31</td></tr>
                                    <tr><td>BIC</td><td>INGBNL2A</td></tr>
                                </table>
                                <style>table.footer{border-sollapse: collapse;} table.footer tr td {border: 0px; padding: 0px 0px;}</style>
                            </div>
				        </h2>
                        <img style="float: right" src="<?php echo site_url(); ?>/images/logo-small-transparent.gif" alt="Living Water Link">
                        <div class="clear: both;"></div>
                    </div>
                                        
					<div class="footer-socket-area">
						<?php echo "&nbsp;";//do_action( 'spacious_footer_copyright' ); ?>
						<nav class="small-menu clearfix">
							<?php
								if ( has_nav_menu( 'footer' ) ) {									
										wp_nav_menu( array( 'theme_location' => 'footer',
																 'depth'           => -1
																 ) );
								}
							?>
		    			</nav>
					</div>
				</div>
			</div>			
		</footer>
		<a href="#masthead" id="scroll-up"></a>	
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>