/**
 Página de upsell woo
 */
 
add_action( 'woocommerce_thankyou', 'upsell_gracias', 5 );
  
function upsell_gracias() {
echo '<h2>¡Lo más vendido de la tienda!</h2>';
echo do_shortcode( '[products limit="3" columns="3" orderby="popularity" on_sale="true" ]' );
}
