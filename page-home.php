<?php

get_header();  ?>

<div class="main" id="home">
  	<div class="container homeImage nav">

	    <div class="headerCenter">
	     	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	     		
				<h1 class="element"><?php the_field("header-main-title"); ?></h1>
				<h2><?php the_field("header-sub-title"); ?></h2>
			<?php endwhile; // end the loop?>
				<a href="#about" class="btnSearch" type="submit" value="submit" >See More</a>
        </div>

	</div> <!-- /.container -->
</div> <!-- /.main -->

<div class="intro" id="about">
	<div class="introWrapper">
		<div class="title  wow fadeInUp" data-wow-duration="1s" data-wow-offset="5" type="button" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
			<h1><?php the_field("intro_title"); ?></h1>
			 <div class="line"></div>
			<p><?php the_field("intro_who_we_are"); ?></p>
		</div>

		<div class="introGallery">	
			<?php if( have_rows('intro_box') ): ?>
			 
			    <?php while( have_rows('intro_box') ): the_row(); ?>

			        <div class="introBox  wow fadeInUp" data-wow-duration="1s" data-wow-offset="5" type="button" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
			        	<?php $image = get_sub_field('intro_image'); ?>
			        	
			        	<img src="<?php echo $image['sizes']['large'] ?>">
			        	<h1 class"animated infinite bounce"> <?php the_sub_field('intro_image_title'); ?></h1>
			        	<p> <?php the_sub_field('image_description'); ?></p>
			        </div>
			        <?php ?>            
			    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="filler">
		<?php $image = get_field("we_do_image"); ?>
	  	<div class="filler" style="background-image:url(<?php echo $image[url]; ?>); background-repeat: no-repeat;" > 
			<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-iteration="1"><?php the_field("we_do_title"); ?></h1>
			<div class="line"></div>
			<p class="wow fadeInUp" data-wow-duration="1s" data-wow-iteration="1"><?php the_field("we_do_content"); ?></p>
		</div>
</div>

<div class="team" id="team">
	<div class="teamWrapper">
		<div class="titleTeam  wow fadeInUp" data-wow-duration="1s" data-wow-iteration="1">
			<h1>Our Team</h1>
			<div class="line"></div>
			<p>Our Team has over twenty years of photography experience combined. We colaborate together through the entire process to create the best work possible.</p>
		</div>
		<div class="teamGallery  wow fadeInUp" data-wow-duration="1s"  data-wow-iteration="1" ">
			<?php if( have_rows('team_box') ): ?>
			    <?php while( have_rows('team_box') ): the_row(); ?>
			        <div class="teamBox">
			        	<?php $image = get_sub_field('team_image'); ?>
			        	<img src="<?php echo $image['sizes']['large'] ?>">
			        	<h1> <?php the_sub_field('team-title'); ?></h1>
			        	<p> <?php the_sub_field('team_info'); ?></p>
			        
			        </div>
				    <?php ?>           
				<?php endwhile; ?>
			<?php endif; ?>
		</div>	
	</div>
</div>

<section class="stats">
	<div class="teamWrapper">
		<div class="statsContent wow fadeInUp" data-wow-duration="1s"  data-wow-iteration="1">
			<div class="statsBox " >
				<p><i class="fa fa-globe"></i></p>
				<h1>345</h1>
				<h2>Nature Hikes</h2>
			</div>
			<div class="statsBox " >
				<p><i class="fa fa-camera"></i></p>
				<h1>891</h1>
				<h2>Photographs Made</h2>
			</div>
			<div class="statsBox " >
				<p><i class="fa fa-coffee"></i></p>
				<h1>254</h1>
				<h2>Cups of Tea</h2>
			</div>
			<div class="statsBox " >
				<p><i class="fa fa-star"></i></p>
				<h1>45</h1>
				<h2>Awards</h2>
			</div>
		</div>
	</div>
</section>
<section class="work" id="work">
	<h1 class=" wow fadeInUp" data-wow-duration="1s" data-wow-offset="5" type="button" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">Our Work and Porfolio</h1>
	<div class="line"></div>
	<div class="workContainer">
		<div class="workBox workBox1 ">
			<p>We love to show the wonder of the rugged landscape. Few other places in the world exhibit the effects of such a wide range of natural phenomena as Vatnajökull</p>
		</div>
	</div>
</section>
<div class="galleryParent">
	<?php
	if( have_rows('gallery') ):

	 	// loop through the rows of data

	    while ( have_rows('gallery') ) : the_row();
		$image = get_sub_field('image');
		?>
		<div class="galleryBox">
			<img src="<?= $image['url'] ?> " alt="">
	        <p> <?php  the_sub_field('caption'); ?> </p>
		</div>
		<?php

	    endwhile;

	else :

	    // no rows found

	endif;

	?>
</div>
<footer id="contact">
	<div class="footerContainer wow fadeInUp" data-wow-duration="1s"  data-wow-iteration="1">
		<h1 >Contact Us</h1>
		<div class="line"></div>
		<ul class="socialParent1">
			<li class="socialBox">
				<a class=" social facebook" href="http://www.facebook.com"><i class="fa fa-facebook"></i> </a>
			</li>
			<li class="socialBox">
				<a class=" social twitter" href="http://twitter.com"><i class="fa fa-twitter"></i></a>
			</li>
			<li class="socialBox">
				<a class=" social instagram" href="https://www.facebook.com"><i class="fa fa-instagram"></i> </a>
			</li>
			<li class="socialBox">
				<a class=" social youtube" href="www.youtube.com"><i class="fa fa-youtube"></i></a>
			</li>
			<li class="socialBox last">
				<a class=" social youtube" href="www.linkedin"><i class="fa fa-linkedin"></i></a>
				
			</li>
		</ul>	
	</div>		
		
	

</footer>

<?php get_footer(); ?>


	