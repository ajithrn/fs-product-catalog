<?php
/**
 * Single Product Sidebar Template Part
 *
 * This template can be overridden by copying it to yourtheme/fs-product-catalog/parts/sidebar-single.php
 *
 * @package FS_Product_Catalog
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$product_id = get_the_ID();
?>

<aside class="fs-product-single-sidebar">
	<div class="fs-sidebar-wrap">
		<!-- Search Box -->
		<?php if ( apply_filters( 'fs_single_sidebar_show_search', true ) ) : ?>
			<div class="fs-sidebar-section fs-sidebar-search">
				<h3 class="fs-sidebar-title"><?php esc_html_e( 'Search Products', 'fs-product-catalog' ); ?></h3>
				<form role="search" method="get" class="fs-sidebar-search-form" action="<?php echo esc_url( get_post_type_archive_link( 'fs-products' ) ); ?>">
					<input type="search" class="fs-sidebar-search-input" placeholder="<?php esc_attr_e( 'Search products...', 'fs-product-catalog' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
					<input type="hidden" name="post_type" value="fs-products" />
					<button type="submit" class="fs-sidebar-search-button">
						<span class="dashicons dashicons-search"></span>
						<span class="screen-reader-text"><?php esc_html_e( 'Search', 'fs-product-catalog' ); ?></span>
					</button>
				</form>
			</div>
		<?php endif; ?>

		<!-- Categories -->
		<?php
		$categories = get_terms(
			array(
				'taxonomy'   => 'fs-product-category',
				'hide_empty' => true,
			)
		);
		if ( ! empty( $categories ) && ! is_wp_error( $categories ) && apply_filters( 'fs_single_sidebar_show_categories', true ) ) :
			?>
			<div class="fs-sidebar-section fs-sidebar-categories">
				<h3 class="fs-sidebar-title"><?php esc_html_e( 'Categories', 'fs-product-catalog' ); ?></h3>
				<ul class="fs-sidebar-list">
					<?php foreach ( $categories as $category ) : ?>
						<li class="fs-sidebar-list-item">
							<a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="fs-sidebar-link">
								<?php echo esc_html( $category->name ); ?>
								<span class="fs-sidebar-count">(<?php echo esc_html( $category->count ); ?>)</span>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<!-- Brands -->
		<?php
		$brands = get_terms(
			array(
				'taxonomy'   => 'fs-product-brand',
				'hide_empty' => true,
			)
		);
		if ( ! empty( $brands ) && ! is_wp_error( $brands ) && apply_filters( 'fs_single_sidebar_show_brands', true ) ) :
			?>
			<div class="fs-sidebar-section fs-sidebar-brands">
				<h3 class="fs-sidebar-title"><?php esc_html_e( 'Brands', 'fs-product-catalog' ); ?></h3>
				<ul class="fs-sidebar-list">
					<?php foreach ( $brands as $brand ) : ?>
						<li class="fs-sidebar-list-item">
							<a href="<?php echo esc_url( get_term_link( $brand ) ); ?>" class="fs-sidebar-link">
								<?php echo esc_html( $brand->name ); ?>
								<span class="fs-sidebar-count">(<?php echo esc_html( $brand->count ); ?>)</span>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<!-- Types -->
		<?php
		$types = get_terms(
			array(
				'taxonomy'   => 'fs-product-type',
				'hide_empty' => true,
			)
		);
		if ( ! empty( $types ) && ! is_wp_error( $types ) && apply_filters( 'fs_single_sidebar_show_types', true ) ) :
			?>
			<div class="fs-sidebar-section fs-sidebar-types">
				<h3 class="fs-sidebar-title"><?php esc_html_e( 'Types', 'fs-product-catalog' ); ?></h3>
				<ul class="fs-sidebar-list">
					<?php foreach ( $types as $type ) : ?>
						<li class="fs-sidebar-list-item">
							<a href="<?php echo esc_url( get_term_link( $type ) ); ?>" class="fs-sidebar-link">
								<?php echo esc_html( $type->name ); ?>
								<span class="fs-sidebar-count">(<?php echo esc_html( $type->count ); ?>)</span>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<!-- Tags -->
		<?php
		$tags = get_terms(
			array(
				'taxonomy'   => 'fs-product-tag',
				'hide_empty' => true,
			)
		);
		if ( ! empty( $tags ) && ! is_wp_error( $tags ) && apply_filters( 'fs_single_sidebar_show_tags', true ) ) :
			?>
			<div class="fs-sidebar-section fs-sidebar-tags">
				<h3 class="fs-sidebar-title"><?php esc_html_e( 'Tags', 'fs-product-catalog' ); ?></h3>
				<div class="fs-sidebar-tags-list">
					<?php foreach ( $tags as $tag ) : ?>
						<a href="<?php echo esc_url( get_term_link( $tag ) ); ?>" class="fs-sidebar-tag">
							<?php echo esc_html( $tag->name ); ?>
						</a>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>

		<?php
		/**
		 * Hook: fs_single_sidebar_after
		 * 
		 * Allows adding custom content to the single product sidebar
		 */
		do_action( 'fs_single_sidebar_after', $product_id );
		?>
	</div>
</aside>
