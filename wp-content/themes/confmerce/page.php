<?php
get_header();

?>
<main>
	<div class="container">
		<?php
		while ( have_posts() ) {
			the_post();
		
			the_title( '<h1 class="entry-title">', '</h1>' );
		
			the_content();
		}
		?>
	</div>
</main>
<?php
get_footer();