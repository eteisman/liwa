<?php
/**
 * Template Name: Help Us - EN
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
    div.project_text            {min-height: 510px;}
    div.subtitle                {font-style: italic; font-size: 16px; margin-bottom: 8px;}
    ul.howtohelp                {list-style-type: square; margin-top: 8px; margin-bottom: 8px; margin-left:32px;}
    ul.howtohelp li             {}
    table.help-us               {width: 100%; margin-top: 4px;}
    table.help-us td            {border: solid 1px silver;}
    
    
    table.donations1             {margin-top: 8px;}
    table.donations1 tr td       {border: 0px}
    
    table.donations2             {margin-top: 34px;}
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
                <tr><td>E-mail:</td><td></td></tr>
            </table>
            The fight against poverty in the twentieth century is a challenge that we accept gratefully, because it is a good fight. 
            Help us to make someone's life livable. Be part of the force to change a human life in a positive way. 
            <br/><br/>
            The Living Waterlink Foundation: a way to fight poverty. Together we are strong!
        </div>
	 </div>
	</div>
    
	<div class="grid_6">
	 <div class="box1">
	   <div class="title_box">Application form/Request for authorisation</div>        
        <div class="project_text">
            <h6>Together we fight against poverty in Africa</h6>
            <form enctype="text/plain" action="mailto:livingwater@hetnet.nl" method="post">
                <INPUT type="hidden" name="subject" value="Living Water Link">
                <INPUT type="hidden" name="required" value="realname,adres,postcode,stad,donatie">
                Yes, I support "The Living Waterlink" foundation<br/>
                
                <table class="donations1">
                    <tr><td class="label">With a donation of  &#128;</td><td class="input"><input xsize="32px" name="realname"/></td></tr>
                    <tr>
                        <td class="Label" colspan="2">Per&nbsp;
                            <span class="period">                            
                                <input class="radio" type=radio name="periode" value="maand" />Month
                                <input class="radio" type=radio name="periode" value="kwartaal" />Quarter
                                <input class="radio" type=radio name="periode" value="jaar" />Year
                                <input class="radio" type=radio name="periode" value="eenmalig" selected="selected" />Once
                            </span>                            
                        </td>
                    </tr>
                    <tr><td colspan="2"><i>An authorisation form will be sent to you.</i></td></tr>
                 </table>
                 
                 <table class="donations2">   
                    <tr><td class="label">Naam </td><td class="input"><input name="realname"/></td></tr>
                    <tr><td class="label">Telefoon</td><td class="input"><input name="phone"/></td></tr>
                    <tr><td class="label">E-mail</td><td class="input"><input name="email" value=""/></td></tr>                    
                    <tr><td class="label">Adres</td><td class="input"><input name="adres"/></td></tr>
                    <tr><td class="label">Postcode</td><td class="input"><input name="postcode"/></td></tr>
                    <tr><td class="label">Plaats</td><td class="input"><input name="stad"/></td></tr>                    
                    <tr><td class="label">Land</td><td class="input"><input name="land" value="Nederland"/></td></tr>
                </table>
                <br/>
            </form>
        </div>
	 </div>
	</div>    	
</div>
	


<?php get_footer(); ?>