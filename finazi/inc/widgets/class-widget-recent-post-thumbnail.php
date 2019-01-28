<?php// Creating the widget class Autos_Recent_Post_Thumnbail extends WP_Widget {         function __construct() {        parent::__construct(            'recent_post_thumbnail',            __( 'First Widget', 'autos' ),             array(                'description' => __( 'Sample widget based on Recent Post Thumnbail', 'autos' ),            )         );    }                 // Widget Backend    public function form( $instance ) {        $title     = isset( $instance['title'] ) ? $instance['title'] : __( 'Recent Post Thumnbail', 'autos' );        $number = isset( $instance['number'] ) ? $instance['number'] : 3 ;        // Widget admin form        ?>        <p>            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>             <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />        </p>        <p>            <label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php esc_html_e( 'Number', 'autos' ); ?></label>             <input class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" value="<?php echo esc_attr( $number ); ?>" />        </p>        <?php     }             // Updating widget replacing old instances with new    public function update( $new_instance, $old_instance ) {        $instance = array();        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';        $instance['number'] = ( ! empty( $new_instance['number'] ) ) ? strip_tags( $new_instance['number'] ) : '';        return $instance;    }    // Creating widget front-end         public function widget( $args, $instance ) {        $title  = $args['before_title'] . $instance['title'] . $args['after_title'];        $number = $instance['number'];        $posts = array(            'post_type'           => 'post',            'posts_per_page'      => $number,            'ignore_sticky_posts' => 1,        );        $query = new WP_Query( $posts );        if ( ! $query->have_posts() ) {            return;        }        // before and after widget arguments are defined by themes        echo $args['before_widget'];        echo $title;        ?>        <div class="widget-recent-post-thumbnail">            <?php                while( $query->have_posts() ) {                    $query->the_post();                    $img = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );                    ?>                    <div class="recent-post-thumbnail-item">                        <a class="recent-post-img" href="<?php the_permalink(); ?>">                            <img src="<?php echo esc_url( $img ); ?>" alt="<?php esc_attr_e( 'Thumbnail image', 'autos' ); ?>">                        </a>                        <div class="recent-post-content">                            <a href="<?php the_permalink(); ?>" class="recent-post-title"><?php the_title(); ?></a>                        </div>                    </div>                    <?php                }            ?>        </div>        <?php        echo $args['after_widget'];    }}