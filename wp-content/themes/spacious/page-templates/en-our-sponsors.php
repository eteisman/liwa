<?php
/**
 * Template Name: Our Sponsors - EN
 *
 * Displays the Our Sponsors Page
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
div.sponsor_text {
    height: 132px;
}
</style>
<div id="content" class="clearfix">
 
	<!-- begin first row -->
	<div class="grid_3">
    <a target="_blank" href="http://www.scotsintchurch.com">    
	 <div class="box1">
	   <div class="title_box">Scots International Church Rotterdam</div>
	   <img src="<?php echo site_url(); ?>/images/sponsors/sicr.jpg"/>
       <div class="title_box"></div>
       <div  class="sponsor_text">
       Scots International Church<br/>
       &nbsp;<br/>
       Schiedamsevest 121, Rotterdam
       </div>
	 </div>
    </a> 
	</div>
    
	<div class="grid_3">
    <a target="_blank" href="http://www.vrouwenvoorvrede.nl">    
	 <div class="box1">
	   <div class="title_box">Vrouwen Voor Vrede <br/>&nbsp;</div>
	   <img style="" src="<?php echo site_url(); ?>/images/sponsors/vrouwen-voor-vrede.jpg"/>
       <div class="title_box"></div>
       <div class="sponsor_text">
           The organization "Women for Peace" has supported our school project in a large measure.</div>
	 </div>
    </a> 
	</div>
  
	<!-- end first row -->
	
    
	<!-- begin second row -->
	<div class="grid_3">
    <a target="_blank" href="http://intertaste.eu/nl/home/">   
	 <div class="box1">
	   <div class="title_box">
           Intertaste B.V
           <br/>&nbsp;
       </div>
	     <img src="<?php echo site_url(); ?>/images/sponsors/intertaste.png"/>
       <div class="title_box"></div>
       <div class="sponsor_text">
        Nineteen computers were  donated for the school in Umumenike by:<br/>
        &nbsp;<br/> 
        Intertaste B.V..<br/>
        Weverseinde 343	,3297 LJ Puttershoek
       </div>
	 </div>
    </a> 
	</div>
	
	
	<div class="grid_3">
    <a target="_blank" href="http://www.opstandingskerkrijsoord.nl">
	 <div class="box1">
	  <div class="title_box">Opstandingskerk Rijsoord</div>
	  <img src="<?php echo site_url(); ?>/images/sponsors/opstandings-kerk-rijsoord-2.jpg"/>
      <div class="title_box"></div>
      <div class="sponsor_text" >
        Opstandingskerk Rijsoord<br/>
        &nbsp;<br/>
        Rijksstraatweg 95-97, <br/>
        2988 BB Ridderkerk.<br/><br/>
        <i>For more information please contact Ria Bode.</i>
      </div>
	 </div>
    </a> 
	</div>
    
	<!-- end sedon row -->
	<div class="grid_12" style="border: solid 0px red; margin-bottom: 150px;"></div>
</div>

<?php get_footer(); ?>