<?phpif ( defined( 'ELEMENTOR_VERSION' ) ) {    add_action( 'elementor/init', 'demo_elementor' );    function demo_elementor() {        require_once THEME_DIR . 'widgets/service.php';        require_once THEME_DIR . 'widgets/blog.php';        require_once THEME_DIR . 'widgets/counter.php';        require_once THEME_DIR . 'widgets/intro.php';    }    add_action( 'elementor/widgets/widgets_registered', 'on_widgets_registered' );    add_action( 'elementor/preview/enqueue_scripts', 'on_widgets_registered' );    function on_widgets_registered() {        wp_register_script(            'finazi-waypoints',            'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js',            array( 'jquery' ),            null,            true        );        wp_register_script( 'finazi-counterup',            get_template_directory_uri() . '/js/jquery.counterup.min.js',            array( 'finazi-waypoints' ),            null,            true        );        wp_register_script(             'finazi-elementor',            THEME_URI . 'js/elementor.js',            array( 'finazi-counterup' ),            null,            true        );    }}