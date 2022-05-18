<?php

/**

 * Template Name: Contact - NL

 *

 * Displays the Contact Page Template of the theme.

 *

 * @package ThemeGrill

 * @subpackage Spacious

 * @since Spacious 1.0

 */

?>

<style>

.widget ul li, #colophon .widget ul li {

    line-height: 1.5;

    border-bottom: 1px solid #EAEAEA;

    padding: 5px 0;

}

</style>

<?php get_header(); ?>



	<?php do_action( 'spacious_before_body_content' ); ?>

	<div class="grid_8">
		<img src="<?php echo site_url(); ?>/images/contact-us.png" style="width: 92%; opacity: 70%;">
    </div>



    <div class="grid_4 contact_details">

<aside id="text-2" class="widget widget_text"><h3 class="widget-title"><span>Contact Informatie</span></h3>

<div class="textwidget"><ul>

<li>Stichting The Living Water Link</li>

<li>Kreekplein 10, 3079 AB, Rotterdam</li>

<li><span class="fa fa-phone"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:0031104793933">+31 104 793 933</a></li>

<li><span class="fa fa-mobile-phone" style="font-size:1.3em;"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:0031611088834">+31 611 088 834</a></li>

<li><span class="fa fa-envelope-o"></span>&nbsp;&nbsp;<a href="mailto:livingwater@hetnet.nl">livingwater@hetnet.nl</a></li>

<li>IBAN: NL69 0004 6598 31</li>

<li>Registratie: C.o.C. Rotterdam 24360621</li>

</ul></div>

		</aside>

    </div>



	<?php spacious_sidebar_select(); ?>



	<?php do_action( 'spacious_after_body_content' ); ?>



<?php get_footer(); ?>
