<?php
/**
 * Template Name: Help Us - NL 2019
 *
 * Displays the Help Us Page
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<?php get_header(); ?>
<style>
    ul.projects                 {list-style-type: circle; margin-left: 20px;}
    h6                          {padding-bottom: 12px;}
    div.project_text            {min-height: 528px;}
    div.subtitle                {font-style: italic; font-size: 16px; margin-bottom: 8px;}
    ul.howtohelp                {list-style-type: square; margin-top: 8px; margin-bottom: 8px; margin-left:32px;}
    ul.howtohelp li             {}
    table.help-us               {width: 100%; margin-top: 4px;}
    table.help-us td            {border: solid 1px silver;}
    
    
    table.donations1             {margin-top: 8px;}
    table.donations1 tr td       {border: 0px}
    
    table.donations2             {margin-top: 32px; margin-bottom: 14px;}
    table.donations2 tr td       {border: solid 1px silver;}
    table.donations2 tr td.label {}
    table.donations2 tr td:input {width: 100%; padding-right: 4px;}
    table.donations2 tr td.input input {width: 100%; padding-left: 4px;}
    table.donations2 tr td span.period {margin-left: 12px; white-space: nowrap} 
    table.donations2 tr td input.radio {margin: 2px 4px 2px 4px;}
</style>
<div id="content" class="clearfix">
 
	<!-- begin first row -->
	<div class="grid_12">
	 <div class="box1">
	   <div class="title_box">Stichting "The Living Waterlink" organiseert projecten in Afrika.</div>
		<img src="<?php echo site_url(); ?>/images/help-us-banner-2016.jpg"/>
       </div>
     </div>
    </div>    
        
	<div class="grid_6">
	 <div class="box1">
	   <div class="title_box">Ons dringend verzoek om steun</div>        
        <div class="project_text">
            <h6>Een manier om arme mensen in Afrika te helpen!</h6>
            We vechten tegen armoede, want samen kunnen we het doen.<br/>
            <ul class="howtohelp">
                <li>Steun het Palm Olie project voor vrouwen<br/></li>
                <li>Het Onderwijs project voor kinderen.<br/></li>
                <li>En het Water project.</li>
            </ul>
            Deze projecten kunnen niet zonder uw steun.<br/>
            <br/>
            Zo kun u ons helpen:<br/>
            <table class="help-us">
                <tr><td>Financieel:</td><td>IBAN:&nbsp;NL20 INGB 0004 6598 31<br/>BIC:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INGBNL2A</td></tr>
                <tr>
                    <td>Met goederen:</td>
                    <td>
                        <span class="fa fa-phone" style="font-size: 0.92em;"></span>&nbsp;&nbsp;&nbsp;<a href="tel:0031104793933">+31 104 793 933</a><br/>
                        <span class="fa fa-mobile-phone" style="font-size: 1.1em;">&nbsp;&nbsp;&nbsp;<a href="tel:0031611088834">+31 611 088 834</a><br/>
                        <span class="fa fa-envelope-o" style="font-size:0.82em;">&nbsp;&nbsp;</span><a href="mailto:livingwaterlink@hetnet.nl">livingwaterlink@hetnet.nl</a>
                    </td>
                </tr>
                <tr><td>Email:</td><td>livingwaterlink@hetnet.nl</td></tr>
            </table>
            De strijd tegen armoede in de twintigste eeuwis een uitdaging, en we nemen die graag aan, omdat het een goede strijd is. 
            Doe mee en maak iemand's leven leefbaar. Maak deel uit van de kracht om een mensenleven op een positieve manier te veranderen. 
            <br/><br/>
            De Stichting "The Living Waterlink": een manier om armoede te bestrijden. Samen staan we sterk!
            <div style="height: 28px;"></div>
        </div>
	 </div>
	</div>
    
	<div class="grid_6">
	 <div class="box1" style="padding-bottom: 0px;">
	   <div class="title_box">Onze ANBI Status</div>        
        <div class="project_text">
            <form enctype="text/plain">			    De stichting The Living Waterlink heeft een officiele ANBI status.			    <br/><br/>				ANBI status is een wettelijke erkende status, door de belastingdienst, waarbij de afkorting ANBI staat voor Algemeen Nut Beogende Instelling.
                <br/><br/>				Dit houdt in dat u uw giften aan The Living Waterlink kunt aftrekken bij de aangifte inkomstenbelasting indien u aan de voorwaarden voldoet van de Belastingdienst. Lees hierover meer op hun site.<br/>
                <table class="donations2">   
                    <!--<tr><td class="label">Naam </td><td class="input">The Living Waterlink</td></tr>-->
                    <tr><td class="label">RSIN/Fiscaal nummer</td><td class="input">8131.72.937</td></tr>					<tr><td class="label">KVK nummer</td><td class="input">24360621</td></tr>					<tr><td class="label">Telefoon</td><td class="input"><a href="tel:0031104793933">+31 104 793 933</a></td></tr>					<tr><td class="label">Email</td><td class="input"><a href="mailto:livingwaterlink@hetnet.nl">livingwaterlink@hetnet.nl</a></td></tr>					<tr><td class="input" colspan="2" align="center"><i>Onze stichting wordt gerund door onbetaalde vrijwilligers.</i></td></tr>
                </table>                <table class="donations1">                    <tr>					    <td>						  <img style="margin-top: 8px; border: solid 1px silver; width: 208px; max-width: 100%;" 						    src="<?php echo site_url(); ?>/images/anbi.png">					    </td>					</tr>                </table>
            </form>
        </div>
	 </div>
	</div>    	
</div>
	


<?php get_footer(); ?>