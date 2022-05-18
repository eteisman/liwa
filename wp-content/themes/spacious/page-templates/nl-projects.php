<?php
/**
 * Template Name: Our Projects - NL
 *
 * Displays the Our Projects Page
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
    div.project_text    {minheight: 236px;}
    ul.projects         {min-height: 580px;}
	div.read-more-later {font-style: italic; color: #666666;;}
	a.read-more 	    {color: white; font-size: 14px; background-color: #1e73be;}
	a.read-more:hover   {background-color: #666666}	
	a.button-wide 		{padding: 10px 30px 10px 30px;}
	a.button-narrow		{padding: 10px 15px 10px 15px;}
	.title_box			{white-space: nowrap;}
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
 
	<!-- begin first row -->
	<div class="grid_4">
	 <div class="box1">
	   <div class="title_box">School Projecten</div>
		<img src="<?php echo site_url(); ?>/images/school-project.jpg"/>
        <div class="project_text">
Wie de jeugd heeft, heeft de toekomst!<br/><br/>
In veel dorpen in Zuidoost Nigeria kunnen kinderen wel naar school, maar ontbreekt het hen 
aan essentiele leermiddelen, zoals boeken, schriften en schrijfbenodigdheden.<br/><br/>
Bovendien met "In de klas zitten" bedoelt men dan vaak gewoon onder een afdakje zitten, in plaats van in banken in een schoolgebouw.<br/><br/>

        </div>
	 </div>
	</div>
	<div class="grid_4">
	 <div class="box1">
	   <div class="title_box">Inkomens Projecten</div>
		<img src="<?php echo site_url(); ?>/images/basic-income-3.jpg"/>
        <div class="project_text">
Een effectieve manier om arme mensen in Afrika te helpen is ze in staat te stellen om zelf in de eigen levensonderhoud te voorzien.
</br></br>
Wij helpen door mensen te ondersteunen met het opzetten van kleine bedrijfjes.
</br></br>
"Geef een man een vis en je voedt hem voor een dag. Leer een man te vissen en je voedt hem voor een mensenleven."
        </div>
	 </div>
	</div>
	<div class="grid_4">
	 <div class="box1">
	   <div class="title_box">Water Projecten</div>
		<img src="<?php echo site_url(); ?>/images/water-project-2.jpg"/>
		<div class="project_text">
Dorpelingen moeten soms lange afstanden lopen (1 uur heen en 1 uur terug) om water te halen uit een rivier.
Het water is bijna niet te drinken, maar ze moeten het er mee doen.<br/>
</br>
Wij willen daarom water-voorzieningen realiseren om mensen van stromend water te voorzien.<br/>
<br/>
Dit water is vers, drinkbaar en altijd voorradig, wat ook bevordelijk is voor de volksgezondheid.
		</div>
	 </div>
	</div>
	<!-- end first row -->
	
	<!-- begin second row -->
	<div class="grid_4">
	 <div class="box1">
	   <div class="title_box">Okohia Community Primary School</div>
	   <img src="<?php echo site_url(); ?>/images/school-projects.jpg"/>
	   <ul class="projects">
	    <li>
	      <a href="">Umumelike Okohia Community Primary School</a><br/><br/>
			Investeren in scholing geeft kinderen de beste kans op een betere toekomst.
			Daarom zijn wij betrokken bij lokale basis scholen.<br/><br/>
            <!--Het hoeft geen betoog dat een goed onderwezen jeugd van essentieel belang is.-->
            Gelukkig gaan de meeste kinderen in Umumelike Village wel naar school.<br/><br/>
            
            The Living Water Link zet zich ervoor in om de kinderen van de Okohia Primary School, waarvan 90% is verstoken van leermiddelen, 
            te voorzien van de benodigde boeken, schriften, schrijfgerei en computers.<br/><br/>
            De boeken worden niet meegenomen naar huis, maar blijven op school, zodat ze niet verloren raken.<br/><br/>            
            Ook willen we gaan zorgen voor nieuwe tafels en stoelen.
		    <br/><br/>
		    <a href="<?php echo get_translated_page('photos-school-project-nl-1', "en_GB") ?>" class="read-more button-narrow">Fotos (1)</a>			
			<a href="<?php echo get_translated_page('photos-school-project-nl-2', "en_GB") ?>" class="read-more button-narrow">Fotos (2)</a>
			<a href="<?php echo get_translated_page('photos-school-project-nl-3', "en_GB") ?>" class="read-more button-narrow">Fotos (3)</a>						
			<br/><br/>
			Na Okohia Primary School gaan we door met een andere publieke basis school.
	    </li>
	   </ul>
	 </div>
	</div>
	
	
	<div class="grid_4">
	 <div class="box1">
	  <div class="title_box">Het Palm Olie project</div>
	  <img src="<?php echo site_url(); ?>/images/palm-oil.jpg"/>
	   <ul class="projects">
	    <li>
	      <a href="">Een palm olie fabriek voor Umumelike village</a><br><br/>
In Umumelike village word de productie van palmolie verzorgt door de vrouwen.<br/><br/>
Iedere familie in heeft wel een paar palmbomen, waarmee een inkomen kan worden verworven. 
Dit gebeurt op een handmatige wijze die erg arbeidsintensief is, en het levert meestal nauwelijks genoeg om de kost te 
verdienen.<br/><br/>

De Living Waterlink Stichting heeft  een aantal machines ter beschikking gesteld om een kleinschalige palmolie fabriek op te zetten.
Een enorme verbetering!<br/><br/> 

De vrouwen kunnen nu een basis inkomen verdienen. Tegelijkertijd kunnen zij ook andere dorpelingen aan het werk helpen.
		  <br/><br/><br/><br/>
		  <a href="<?php echo get_translated_page('photos-income-project-nl', "nl_NL") ?>" class="read-more button-wide">Fotos</a>
<br/><br/>
Na het palm olie project gaan we verder met een ander inkomens project.
	    </li>
	   </ul>
	 </div>
	</div>
	
	<div class="grid_4">
	 <div class="box1">
	  <div class="title_box">Waterproject Umumelike Village</div>
	  <img src="<?php echo site_url(); ?>/images/umelike-waterproject.jpg"/>
	   <ul class="projects">
	    <li>
	      <a href="">Watervoorziening Umumelike</a><br/><br/>
          
          The Living Water Link zet zich ervoor in om het dorp Umumelike een adequate watervoorziening te installeren.<br/>
          <br/>
          Water is niet alleen nodig om te drinken, maar ook voor het bereiden van voedsel en om te wassen.<br/><br/> 
          Door met een pomp drinkwater te winnen kan een enorme tijdwinst kan worden behaald.
          De aanwezigheid van schoon water kan tevens de hygiëne aanzienlijk bevorderen.<br/><br/> 
          
          Om het water vanaf een diepte van 100 meter naar boven te brengen is en sterke diesel- of elektrische pomp nodig.
		  <br/><br/>
          Het onderhoud van de pomp zal door de dorpsbewoners worden verzorgd.
		  <br/><br/><br/><br/>
		  <div class="read-more-later">(Foto&apos;s zijn nog niet beschikbaar.)</div>		  
		  <br/>
		  Na dit waterproject gaan we verder met een nieuw water project.
	    </li>
	   </ul>
	 </div>
	</div> 

	
	<!-- end second row -->
	
</div>

<?php get_footer(); ?>