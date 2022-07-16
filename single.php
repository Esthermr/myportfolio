<?php get_header();?>
	<main>
		<section class="articulo-interior">
			<div class="sub_title">
				<h2><?php the_title();?></h2>
				<!--<h2>Título</h2>-->
			</div>
			<?php if ( has_post_thumbnail() ): ?>
                <div class="imagen-page">
                    <?php the_post_thumbnail('blog_size_image'); ?>
                </div>
            <?php endif; ?>
			<div class="mid-page">
				<div class="left-page">
					<p><?php the_content();?></p>
					<br><br>
					<h5>Escrito por <a href="#"><?php the_author_posts_link(); ?></a></h5>
					<br>
				</div>    
			</div>
			<div class="end-page">
				<span><?php the_author_meta('nickname'); ?></span>
            </div>
			<div class="comments-page">
				<?php comments_template('', true); ?>
            </div>
		</section>
	</main>
	<?php wp_footer();?>
</body>
</html>