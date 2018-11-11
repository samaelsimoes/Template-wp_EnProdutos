<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package AccessPress Store
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h2 class="page-title"><?php esc_html_e( 'Nada encontrado', 'accesspress-store' ); ?></h2>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<?php
				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'pronto para publicar seu primeiro post? <a href="%1$s"> Comece aqui </a>.', 'accesspress-store' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url( admin_url( 'post-new.php' ) )
				);
			?>		

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Desculpe, mas nada correspondeu aos seus termos de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.', 'accesspress-store' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'Parece que não conseguimos encontrar o que você está procurando. Talvez a pesquisa possa ajudar.', 'accesspress-store' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
