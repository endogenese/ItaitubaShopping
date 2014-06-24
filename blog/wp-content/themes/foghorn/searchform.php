<?php
/**
 * The template for displaying search forms in Foghorn
 *
 * @package WordPress
 * @subpackage Foghorn
 * @since Foghorn 0.1
 */
?>
	<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		<input type="text" class="search-query" name="s" id="s" placeholder="<?php esc_attr_e( 'Digite a notícia aqui', 'foghorn' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="Pesquisar" />
	</form>