<?php
/**
 * Template Name: Help Us - EN - 2019
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
	   <div class="title_box">The Living Waterlink Foundation organizes projects in Africa.</div>
		<img src="<?php echo site_url(); ?>/images/help-us-banner-2016.jpg"/>
       </div>
     </div>
    </div>    
        
	<div class="grid_6">
	 <div class="box1">
	   <div class="title_box">Our urgent request for your support</div>        
        <div class="project_text">
            <h6>A way to help poor people in Africa!</h6>
            We fight poverty, because together we can do it.<br/>
            <ul class="howtohelp">
                <li>Support the "Palm Oil" project for women<br/></li>
                <li>The project "Education" for children.<br/></li>
                <li>And the "Water" project.</li>
            </ul>
            These projects need your support.<br/>
            <br/>
            Here is how you can help:<br/>
            <table class="help-us">
                <tr><td>Financially:</td><td>IBAN:&nbsp;NL20 INGB 0004 6598 31<br/>BIC:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INGBNL2A</td></tr>
                <tr>
                    <td>With goods:</td>
                    <td>
                        <span class="fa fa-phone" style="font-size: 0.92em;"></span>&nbsp;&nbsp;&nbsp;<a href="tel:0031104793933">+31 104 793 933</a><br/>
                        <span class="fa fa-mobile-phone" style="font-size: 1.1em;">&nbsp;&nbsp;&nbsp;<a href="tel:0031611088834">+31 611 088 834</a><br/>
                        <span class="fa fa-envelope-o" style="font-size:0.82em;">&nbsp;&nbsp;</span><a href="mailto:livingwaterlink@hetnet.nl">livingwaterlink@hetnet.nl</a>
                    </td>
                </tr>
                <tr><td>E-mail:</td><td>livingwaterlink@hetnet.nl</td></tr>
            </table>
            The fight against poverty in the twentieth century is a challenge that we accept gratefully, because it is a good fight. 
            Help us to make someone's life livable. Be part of the force to change a human life in a positive way. 
            <br/><br/>
            The Living Waterlink Foundation: a way to fight poverty. Together we are strong!
			<div style="height: 48px;"></div>
        </div>
	 </div>
	</div>
    
	<div class="grid_6">
	 <div class="box1" style="padding-bottom: 0px;">
	   <div class="title_box">ANBI Status</div>        
        <div class="project_text">
            <form enctype="text/plain">
			    The Living Waterlink foundation has an official ANBI status.
			    <br/><br/>
				ANBI status is a legally recognized status, by the Dutch tax authorities. The acronym ANBI stands for "Algemeen Nut Beogende Instelling".
                <br/><br/>
				This means your donations to The Living Waterlink can be deducted from your taxes, if you comply with the requirements as stated by the Dutch tax authorities.<br/>
                <table class="donations2">   
                    <!--<tr><td class="label">Name</td><td class="input">The Living Waterlink</td></tr>-->
                    <tr><td class="label">RSIN/Fiscal number</td><td class="input">8131.72.937</td></tr>
					<tr><td class="label">C.o.C nummer</td><td class="input">24360621</td></tr>
					<tr><td class="label">Phone</td><td class="input"><a href="tel:0031104793933">+31 104 793 933</a></td></tr>
					<tr><td class="label">Email</td><td class="input"><a href="mailto:livingwaterlink@hetnet.nl">livingwaterlink@hetnet.nl</a></td></tr>
					<tr><td class="input" colspan="2" align="center"><i>Our foundation is run by unpaid volunteers.</i></td></tr>
                </table>
                <table class="donations1">
                    <tr>
					    <td align="center">
						  <img style="margin-top: 8px; border: solid 1px silver; width: 208px; max-width: 100%;" 
						    src="<?php echo site_url(); ?>/images/anbi.png">
					    </td>
					</tr>
                </table>
            </form>
        </div>
	 </div>
	</div>    	
</div>
	


<?php get_footer(); ?>