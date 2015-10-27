<?php get_header() ?>


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    

<div class="cu_container">
<div class="cu_form">
<img id="head_logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Jvr Web Logo" />
<h1>Contact Us</h1>
<p style="margin-bottom: 25px;">
Thanks for your interests in <a href="<?php echo home_url(); ?>">JVR Web Development</a>. Our site is currently under construction. Please fill up the form below to contact us, and we will get back to you as soon as possible.
</p>

			<?php the_content(); ?>       
</div>
</div>
		<?php endwhile; else :  ?>

			<p><?php echo 'sorry, no content' ?></p>
		
		<?php endif; ?>



<?php get_footer() ?>