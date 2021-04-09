<!-- <style><?php include 'assets/sass/style.scss'; ?></style> -->
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hpy
 */

get_header(); ?>

<!--Paul Crawford--->

<!-- Welcome section ---->
<div class="happy-welcome">
    <div class="happy-welcome h2">
        <h2>WELCOME TO HAPPYKITE</h2>
        <p>We're an agency, a good agency - soon to be an even better agency once we've hired our new web developer!</p>
        <button>WORK WITH US</button>
    </div>
</div>

<div class="happy-help">
	<h2>how can we help?</h2>
	<div class="my-cards">

	<!--design and ux  --->
		<div class="my-card">
			<div class="my-card__icon">
			<img src="<?php echo IMAGES; ?>ico-design.png" alt="design Logo">
			</div>
			<br>
			<div class="my-card__subtitles">
				design & ux			
			</div>
			<br>
			<div class="my-card__text">
			<p class="card_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Duis ut eros luctus, accumsan ligula sit amet,
			pulvinar quam. Vestibulum porta commodo massa sed interdum.
			In hac habitasse platea dictumst. Integer.</p>					
			</div>			
			<div class="my-card__button">
			Learn More							
			</div>
		</div>


		<!--Wordpress Development  --->
		<div class="my-card">
		<div class="my-card__icon">
			<img src="<?php echo IMAGES; ?>ico-dev.png" alt="design Logo">
			</div>
			<br>
			<div class="my-card__subtitles">
			Wordpress Development			
			</div>
			<br>
			<div class="my-card__text">
			<p class="card_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Duis ut eros luctus, accumsan ligula sit amet,
			pulvinar quam. Vestibulum porta commodo massa sed interdum.
			In hac habitasse platea dictumst. Integer.</p>					
			</div>			
			<div class="my-card__button">
			Learn More				
			</div>
		</div>


		
		<!--digital marketing  --->
		<div class="my-card">
		<div class="my-card__icon">
			<img src="<?php echo IMAGES; ?>ico-marketing.png" alt="design Logo">
			</div>
			<br>
			<div class="my-card__subtitles">
			digital marketing 			
			</div>
			<br>
			<div class="my-card__text">
			<p class="card_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Duis ut eros luctus, accumsan ligula sit amet,
			pulvinar quam. Vestibulum porta commodo massa sed interdum.
			In hac habitasse platea dictumst. Integer.</p>					
			</div>			
			<div class="my-card__button">
			Learn More				
			</div>
		</div>


		<!--support & maintenance  --->
		<div class="my-card">
		<div class="my-card__icon">
			<img src="<?php echo IMAGES; ?>ico-support.png" alt="design Logo">
			</div>
			<br>
			<div class="my-card__subtitles">
			support & maintenance			
			</div>
			<br>
			<div class="my-card__text">
			<p class="card_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Duis ut eros luctus, accumsan ligula sit amet,
			pulvinar quam. Vestibulum porta commodo massa sed interdum.
			In hac habitasse platea dictumst. Integer.</p>						
			</div>			
			<div class="my-card__button">
			Learn More				
			</div>
		</div>
	</div>
</div>


<!-- some of our work --->
<div class="happy-work">
<div class="happy-welcome h2">
	<h2>some of our work...</h2>

	<div class="my-cards">
	<div class="my-work-card">
			<div class="my-work__icon">
			<img src="<?php echo IMAGES; ?>asset-1.jpg" alt="asset 1">
			</div>
			<br>
			<div class="my-work__subtitles">
				exterior solution		
			</div>
			<br>
			<div class="my-work__text">
			<p class="work_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Duis ut eros luctus, accumsan ligula sit amet,
			pulvinar quam. Vestibulum porta commodo massa sed interdum.
			In hac habitasse platea dictumst. Integer.</p>					
			</div>			
			<div class="my-work__button">
			Learn More							
			</div>
		</div>
				
		

		<div class="my-work-card">
		<div class="my-card__icon">
			<img src="<?php echo IMAGES; ?>asset-2.jpg" alt="asset 2">
			</div>
			<br>
			<div class="my-work__subtitles">
			owatrol direct			
			</div>
			<br>
			<div class="my-work__text">
			<p class="work_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Duis ut eros luctus, accumsan ligula sit amet,
			pulvinar quam. Vestibulum porta commodo massa sed interdum.
			In hac habitasse platea dictumst. Integer.</p>					
			</div>			
			<div class="my-work__button">
			Learn More				
			</div>
		</div>


		<div class="my-work-card">
		<div class="my-work__icon">
			
			<img src="<?php echo IMAGES; ?>asset-3.jpg" alt="asset 3" >				
			</div>
			<div class="coming-soon">coming soon</div>				
			<br>
			
			<div class="my-work__subtitles">
				
			in the book 			
			</div>
			<br>
			<div class="my-work__text">
			<p class="work_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Duis ut eros luctus, accumsan ligula sit amet,
			pulvinar quam. Vestibulum porta commodo massa sed interdum.
			In hac habitasse platea dictumst. Integer.</p>					
			</div>			
			<div class="my-work__button">
			Learn More				
			</div>
			
		</div>
</div>
</div>


<!-- who are we -->

	<div class="happy-about">
	<h2>who are we anyway?</h2>	
	<div class="my-about">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	 Curabitur sed nisi dui.	 
	 Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	  Curabitur sed nisi dui. Vestibulum mattis in lectus sit amet laoreet.
	   Aliquam.Vestibulum mattis in lectus sit amet laoreet. Aliquam.
<br>
<p class="about_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Duis ut eros luctus, accumsan ligula sit amet,
			pulvinar quam. Vestibulum porta commodo massa sed interdum.
			In hac habitasse platea dictumst. Integer pulvinar quam. Vestibulum porta commodo massa sed interdum.
			In hac habitasse platea dictumst. Integer.</p>					
			</div>			
</div>
			



<?php get_footer(); ?>