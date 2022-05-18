<?php
/**
 * Template Name: Our Goals - EN
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
    ul.our-goals                {list-style-type: square; margin-top: 0px; margin-bottom: 8px; margin-left:32px;}
    ul.our-goals li             {}        
    span.em                     {font-weight: 700;}
    div.our-goals-description       {margin-left: 0px; font-style: italic; font-weight: 400; margin-bottom: 8px;}
</style>
<div id="content" class="clearfix">
 
	<!-- begin first row -->
	<div class="grid_12">
	 <div class="box1">
	   <div class="title_box">The Living Water Link is a charity foundation set up with the aim to promote the fight against poverty.</div>
       <img style="margin-top: 8px; border: solid 1px silver; width: 1200px; height:167px;" src="<?php echo site_url(); ?>/images/africa.gif"/>
       
<span class="em">We fight against poverty in the Benin Republic, Nigeria, Gambia and other countries in West Africa.</span>
<ul class="our-goals">
<li>To help marginalized women in West Africa in a sustainable way to become economically self-sufficient or financial independent</li>
<li>To provide education materials to schools</li>    
</ul>
                       
<span class="em">The Foundation strives to reach her objectives by:</span>
<ul class="our-goals">
<li>Setting up small business units for the women as a community project in impoverished villages, using the basic raw materials which they are familiar with.</li>
<li>Setting up libraries in public primary schools.</li>
<li>Improving the local watersupplies</li>
</ul>

<span class="em">The Foundation tries to reach her goal by collecting different goods and financial donations.</span><br/>
The profits made by this will be used to finance our projects.<br/>
Our foundation depends exclusively on volunteers who do not receive payment nor financial benefits in return for their contribution.<br/><br/>

<span class="em">The gathered goods are amongst others:</span>
<ul class="our-goals">
<li>Soundsystems, televisions and electrical equipment such as irons</li>
<li>Laptops and accessoires</li>
<li>Books and stationary</li>
<li>Pottery and pans, plates, knives, forks and spoons, mugs and glasses</li>
<li>Sheets and pillowcovers, curtains</li>
<li>Men&apos;s shirts</li>
<li>Sewing materials</li>
</ul>         
Your financial support for the "The Living Water Link Foundation"" is very welcome!<br/>
Our bank account number is: BIC INGBNL2A, IBAN NL69 0004 659831.
<br/><br/>
<span class="em">What we do with the items we collect:</span>
<ul class="our-goals">
<li>The items for the jumble sale (rommelmarkt):
    <div class="our-goals-description">
    The rommelmarkt items we sell in the hall of Scots International Church, mostly in September every year.
    The money realized from the sales and the financial donations we reserve for the projects which we are currently working on.
    We are asking for your continuous support in our effort to make it happen in the future
    </div>
</li>
<li>Items for Africa:
    <div class="our-goals-description">
    We use the items we send to Africa to open a small scale business for one or two people we believe who would not have had the opportunity of a decent income without this type of help.
    After 6 years the person(s) is obliged to help another person in the same way. For example we have helped Mr. Tobechukwu to start a small scale business in Gambia.
    A few years later, in his turn, he helped Mr. Philip to open his own business, just as we did for him, and he has since taken another person to Gambia to train.<br/>
    This way the support we gives is multiplied, and our help reaches not just one person, but several more people as well. 
    </div>
    
</li>
</ul>

<span class="em">What more is needed?</span><br/>
<ul class="our-goals">
    <li>For the school projects: <i>Chairs and tables, laptops and computers, mathematic and science textbooks (English)</i></li>
    <li>For the income generating projects: <i>Support in terms of financial donation and goods such as used televisions and other household electronic items</i></li>
</ul>
Finally, we want to thank you for your continuous support to The Living Water Link	projects.<br/><br/>

<span class="em">Purchases of material will be done in Africa.</span>
<ul class="our-goals">
    <li>There will be no transportation costs to Africa</li>
    <li>It helps to stimulate the local economy</li>
    <li>It results in a quick realization of our projects</li>
    <li>The help is available directly onsite, without intermediate steps, which results in 100% efficiency</li>
</ul>
       </div>
     </div>
    </div>

	<div class="grid_12">
	 <div class="box1">
	   <div class="title_box">The first projects are for Umumelike, Anambra State in Nigeria</div>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <div style='overflow:hidden;height:440px;width:100%; border: solid 1px silver;'>
            <div id='gmap_canvas' style='height:440px;width:100%;'></div>
            <div><small><a href="http://embedgooglemaps.com">Google maps code</a></small></div>
            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
        </div>
        <script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(6.2757656,7.006839300000024),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.2757656,7.006839300000024)});infowindow = new google.maps.InfoWindow({content:'<strong>Anambra State in Nigeria</strong><br>Anambra, Nigeria<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
        </script>
     </div>
    </div>
    
        
	<div class="grid_12">
	 <div class="box1">
	   <div class="title_box">Onze organisatie</div>
       <img src="<?php echo site_url(); ?>/images/organigram-clear-new.jpg"/>
       </div>
    </div>
    
   </div>
</div>
	


<?php get_footer(); ?>