<?php if ( ! function_exists( 'container_open' ) ) {    function container_open() {        echo '<div class="container">';    }}if ( ! function_exists( 'container_close' ) ) {    function container_close() {        echo '</div>';    }}// Add button Contimue shopping.if ( ! function_exists( 'finazi_button_continue' ) ) {    function finazi_button_continue() {        $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );        ?>        <a class="button-continue" href="<?php echo esc_url( $shop_page_url ); ?>"><?php esc_html_e( 'Continue Shopping', 'finazi' ); ?></a>        <?php    }}// Add button Clear shopping.add_action( 'init', 'woocommerce_clear_cart_url' );function woocommerce_clear_cart_url() {    if ( isset( $_GET['clear-cart'] ) ) {        global $woocommerce;        $woocommerce->cart->empty_cart();    }}if ( ! function_exists( 'finazi_button_clear' ) ) {    function finazi_button_clear() {        ?>        <a class="button-clear" href="?clear-cart"><?php esc_html_e( 'Clear Shopping Cart', 'finazi' ); ?></a>        <?php    }}add_action( 'woocommerce_before_shop_loop', 'ps_selectbox', 25 );function ps_selectbox() {    $per_page = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);         echo '<div class="woocommerce-perpage">';    echo '<span>Show : </span>';    echo '<select onchange="if (this.value) window.location.href=this.value">';       $orderby_options = array(        '8' => '8',        '16' => '16',        '32' => '32',        '64' => '64'    );    foreach( $orderby_options as $value => $label ) {        echo "<option ".selected( $per_page, $value )." value='?perpage=$value'>$label</option>";    }    echo '</select>';    echo '</div>';}