<?php

/**

 * Template Name: Home Page - NL

 *

 * Displays the Home Page

 *

 * @package ThemeGrill

 * @subpackage Spacious

 * @since Spacious 1.0

 */

?>



<?php get_header(); ?>

<style>

    ul.projects {

        list-style-type: circle;

        margin-left: 20px;

    }

    div.project_text    {minheight: 236px; margin-bottom: 36px;}

    ul.projects         {min-height: 580px;}

	div.read-more-later {font-style: italic; color: #666666;;}

	a.read-more 	    {color: white; font-size: 14px; background-color: #1e73be;}

	a.read-more:hover   {background-color: #666666}

	a.button-wide 		{padding: 10px 30px 10px 30px;}

	a.button-narrow		{padding: 10px 15px 10px 15px;}

	.title_box			{white-space: nowrap; margin-top: 26px;}

	div.home-goals {
		font-size: 1.36em;
		xfont-style: italic;
		line-height: 1.36em;
	}

	table.home-table tr td {
		border: none;
	}

	@media (max-width: 1199px) and (min-width: 980px) {

		a.read-more 		{font-size: 12px;}

		a.button-wide 		{padding: 8px 24px 8px 24px;}

		a.button-narrow		{padding: 8px 8px 8px 8px;}

	}

	@media (max-width: 979px) and (min-width: 768px) {

		a.read-more 		{font-size: 14px; display: block; margin-bottom: 2px;}

	}

</style>

<div id="content" class="clearfix">


<div class="grid_12">
	 <div class="xbox1">
	   <div class="title_box">Onze Doelstellingen</div>
	   <!--
	   <img style="margin-top: 8px; border: solid 1px silver; width: 1200px; height:167px;" src="<?php echo site_url(); ?>/images/home-page-image-1.jpg"/>
		-->
        <div class="home-goals">
			The Living Water Link is een charitatieve instelling die is opgezet met het doel om te strijden tegen armoede in Benin Republiek, Nigeria, Gambia en andere landen in West Afrika.
			Speciaal om vrouwen die aan de rand van de samenleving leven op zo'n manier te helpen dat zij financieel onafhankelijk worden en om scholen te voorzien van materiaal.
        </div>
		<br>
	</div>
</div>

<div class="grid_12">
	   <div class="title_box">School Projecten</div>
	    <img src="<?php echo site_url(); ?>/images/school-projecten.jpg" style="width: 100%">
        <div class="project_text">
			Wij voorzien kinderen van leerboeken, schriften schrijfbehoeften, tafels, stoelen en computers/laptops.
        </div>
</div>

<div class="grid_12">
	<div class="title_box">Nieuwe School Bibliotheek voor Okohia Community Primary School Ihiala</div>
	<table class="home-table" width="100%" border="0">
		<tr>
			<td width="50%">
				De nieuwe bibliotheek
			</td>
			<td width="50%">
				Bezoek van de locale minister van educatie
			</td>
		</tr>
		<tr>
			<td width="50%">
				<img src="<?php echo site_url(); ?>/images/home-new-library.jpg"/>
			</td>
			<td width="50%">
				<img src="<?php echo site_url(); ?>/images/home-minister-visit.jpg"/>
			</td>
		</tr>
	</table>
</div>



<?php get_footer(); ?>
