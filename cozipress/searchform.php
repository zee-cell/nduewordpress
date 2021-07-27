<?php
/**
 * The template for displaying search form.
 *
 * @package     Cozipress
 * @since       1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'cozipress' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search …', 'cozipress' ); ?>" name="s" id="s">
	</label>
	<button type="submit" class="search-submit" value="<?php esc_attr_e( 'Search', 'cozipress' ); ?>">
		<i class="fa fa-search"></i>
	</button>
</form>