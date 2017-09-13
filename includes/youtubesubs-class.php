<?php 

/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class YoutubeSubs_Widget extends WP_Widget {

    /**
     * Constructor
     *
     * @return void
     **/
    function __construct() {
        parent::__construct(
            'youtubesubs_widget', // base id
            esc_html__( "Yotube Subs", 'yts-domain' ),
            array(
                'description' => esc_html__('Widget to display Youtube Subs', 'yts-domain')
              )
          );
    }

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    function widget( $args, $instance ) {
        extract( $args, EXTR_SKIP ); 
        echo $before_widget;// what you want to display before widget(<div>, etc)
        echo $before_title;

        if (!empty($instance['title'])) {
          echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title']  ;
        }

        // widget content output
        echo '<div class="g-ytsubscribe" data-channelid="UCrFXMExlL2X016Pa_e2o0xw" data-layout="full" data-count="default"></div>';
        // end widget content output


      
        echo $after_title; // what you want to display after this widget

    //
    // Widget display logic goes here
    //

    echo $after_widget;
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    function update( $new_instance, $old_instance ) {

        // update logic goes here
        $updated_instance = $new_instance;
        return $updated_instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
    function form( $instance ) {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('New title', 'yts-domain');
        ?>

        <!-- TITLE -->
        <p>
          <label for="<?php echo esc_attr($this->get_field_id('title') ); ?>">
            <?php esc_attr_e('Title:', 'yts-domain') ?>
          </label>
          <input 
            id="<?php echo esc_attr($this->get_field_id('title') ); ?>" 
            class="widefat" 
            type="text" 
            value="<?php echo esc_attr('title') ?>"
            name="<?php echo esc_attr($this->get_field_name('title')) ?>">
        </p>
        <!-- END TITLE -->

        <?php
    }
}