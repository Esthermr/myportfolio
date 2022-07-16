<div class="art">
	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
		<div class="articulo">
			<div class="presen" id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
				<div class="titulo-art">
					<h2><?php _e('No hay contenido para mostrar' , 'remstudio');?></h2>
				</div>
			</div>
			<p><?php _e('No hay contenido en esta página' , 'remstudio');?> ?></p>
			<a  href="<?php the_permalink(); ?>" class="boton-artview-more-button btn btn-primary"><?php _e('Leer más', 'remstudio'); ?></a>
		</div>
	<?php endwhile; endif;?>
</div>