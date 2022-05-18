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
    div.project_text    {min-height: 224px;}
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
<?php get_header(); ?>

<div id="content" class="clearfix">
 
	<!-- begin first row -->
	<div class="grid_4">
	 <div class="box1">
	   <div class="title_box">School Projects</div>
		<img src="<?php echo site_url(); ?>/images/school-project.jpg"/>
        <div class="project_text">
Young people are the future!<br/><br/>
In many villages in South East Nigeria children are able to go to school, but lack essential learning materials such as books or stationary.
<br/><br/> 
And what is meant by "sitting in the classroom" in reality just means sitting on the ground under a shed, instead of using tables, chairs and real schoolrooms.
        </div>
	 </div>
	</div>
	<div class="grid_4">
	 <div class="box1">
	   <div class="title_box">Basic Income</div>
		<img src="<?php echo site_url(); ?>/images/basic-income-3.jpg"/>
        <div class="project_text">
An effective method to help poor people in Africa is to enable them to provide for their own livelyhood.
</br></br>
We help by providing support for people setup their own small businesses.
</br></br>
"Give a man a fish and he will ll eat for a day. Teach a man to fish and h will eat for a lifetime."
        </div>
	 </div>
	</div>
	<div class="grid_4">
	 <div class="box1">
	   <div class="title_box">Water Projects</div>
		<img src="<?php echo site_url(); ?>/images/water-project-2.jpg"/>
		<div>
            <div class="project_text">
Villagers sometimes have to walk far distances (one hour to and one hour fro) to get water from a river.
This water is really unhealthy, but they have to make do with it.<br/>
<br/>
With this project we want to realize a watersupply in the village.<br/>
<br/>
This water is really fresh, consumable and always at hand, which will also promote public health.
            </div>
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
		    Investing in early childhood education gives a child the best chance of making it in life.
			This is why we are involved in primary schools.<br/><br/>

            <!--It goes without saying that is is essential that youth should be well educated.-->
            Fortunately most children in Umumelike Village are able to go to school.<br/><br/>
            
            The Living Water Link is committed to provide the children of Okohia Primary School, 90% if which are devoid of much needed school resources, 
            with the necessary books, stationary and computers.<br/><br/>
            Books are not taken home, but remain at school, to prevent then from being lost.<br/><br/>            
            We are also planning to provide new chairs and tables.
		    <br/><br/>
		    <a href="<?php echo get_translated_page('photos-school-project-nl-1', "en_GB") ?>" class="read-more button-narrow">Photos (1)</a>			
			<a href="<?php echo get_translated_page('photos-school-project-nl-2', "en_GB") ?>" class="read-more button-narrow">Photos (2)</a>
			<a href="<?php echo get_translated_page('photos-school-project-nl-3', "en_GB") ?>" class="read-more button-narrow">Photos (3)</a>
			<br/><br/>
			After Okohia Primary School we will move into a new public primary school.          
	    </li>
	   </ul>
	 </div>
	</div>
	
	
	<div class="grid_4">
	 <div class="box1">
	  <div class="title_box">The Palm Oil project</div>
	  <img src="<?php echo site_url(); ?>/images/palm-oil.jpg"/>
	   <ul class="projects">
	    <li>
	      <a href="">A palm oil factory for Umumelike village</a><br><br/>
In Umumelike village the production of palm oil is done mostly  by the women of the village.<br/><br/>
Every family will have a few palmtrees, with which an income can be generated. 
This requires a lot of manual labor, is very labor-intensive, and often barely generates enough to provide an adequate income.<br/><br/>

The Living Waterlink Foundation has provided a number of machines to setup a small-scale palm oil factory.
A huge improvement!<br/><br/> 
The women are now able to generate an adequate base income. At the same time they also help other villagers work.
<br/><br/><br/><br/>
<a href="<?php echo get_translated_page('photos-income-project-nl', "en_GB") ?>" class="read-more button-wide">Photos</a>
<br/><br/>
After the palm oil project we will move on to a new income generating project.          
	    </li>
	   </ul>
	 </div>
	</div>
	
	<div class="grid_4">
	 <div class="box1">
	  <div class="title_box">Umumelike village Waterproject</div>
	  <img src="<?php echo site_url(); ?>/images/umelike-waterproject.jpg"/>
	   <ul class="projects">
	    <li>
	      <a href="">A watersupply for Umumelike village</a><br/><br/>
          
          The Living Water Link is commited to installing an adequate watersupply in Umumelike village.<br/>
          <br/>
          Water is not only necessary for drinking, but also for cooking and washing.<br/><br/> 
          By using a pump as a source of water a huge amount of time can be saved.
          The presence of clean water can also promote hygiene considerably.<br/><br/> 
          
          Being able to pump up the clean water from a depth of about 100 meters requires a strong diesel of electric pump.<br/>
          <br/>
          The maintenance of this pump will be done by the villagers themselves.
		  <br/><br/><br/><br/><br/>
		  <div class="read-more-later">(Photos not yet availabe.)</div>
		  <br/>
		  After this project we will continue with a new water project.		  
	    </li>
	   </ul>
      </div>
	</div> 

	
	<!-- end sedon row -->
	<div class="grid_12" style="border: solid 0px red; margin-bottom: 150px;"></div>
</div>
	


<?php get_footer(); ?>