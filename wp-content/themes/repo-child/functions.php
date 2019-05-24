<?php
//making custom widget place
function custom_sidebars() {

    $args = array(
        'id'            => 'custom_sidebar',
        'name'          => __( 'Emploment Widget Area', 'text_domain' ),
        'description'   => __( 'A custom widget area', 'text_domain' ),
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
    );
    register_sidebar( $args );

}
add_action( 'widgets_init', 'custom_sidebars' );

//making employmnt widget
function wpb_load_widget() {
    register_widget( 'employment_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

// Creating the widget
class employment_widget extends WP_Widget {

    function __construct() {
        parent::__construct(

        // Base ID of your widget
        'employment_widget',

        // Widget name will appear in UI
        __('Employment Widget', 'employment_widget_domain'),

        // Widget description
        array( 'description' => __( 'This widget will display your current state of employment', 'employment_widget_domain' ), )
        );
    }

// Creating widget front-end

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        // before and after widget arguments are defined by themes
        echo __( 'My current state of employment: ', 'employment_widget_domain' );

        echo $args['before_widget'];
        if ( ! empty( $title ) )
        echo $args['before_title'] . "<h1>" . $title . "</h1>" . $args['after_title'];

        // This is where you run the code and display the output
        echo $args['after_widget'];
    }

// Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'My current state of employment: ', 'employment_widget_domain' );
        }
    // Widget admin form
    ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Current state of employment:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>

    <?php
    }

// Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
} // Class employment_widget ends here




//sessions
session_start();
$_SESSION['counter'];
var_dump($_SESSION);



?>
