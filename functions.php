/*Custom tab for asking*/
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {

  // Adds the new tab

  $tabs['ask'] = array(
    'title'     => __( 'Ask a Question', 'woocommerce' ),
    'priority'  => 90,
    'callback'  => 'woo_new_product_tab_content'
  );

  return $tabs;

}
function woo_new_product_tab_content() {

    // The new tab content

    echo FrmFormsController::show_form(26, $key = 'contact2', $title=true, $description=true);
}
