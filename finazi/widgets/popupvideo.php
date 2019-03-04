<?php/** * Elementor Posts Widget * * @package Woostify Pro */namespace Elementor;/** * Class Finazi_Popup_Video_Widget elementor posts widget. */class Finazi_Popup_Video_Widget extends \Elementor\Widget_Base {    /**     * Name     */    public function get_name() {        return 'finazi-video';    }    /**     * Title     */    public function get_title() {        return esc_html__( 'Video', 'finazi-pro' );    }    /**     * Icon     */    public function get_icon() {        return 'eicon-youtube';    }    /**     * Scripts     */    public function get_script_depends() {        return array( 'finazi-elementor' );    }    /**     * Controls     */    protected function _register_controls() {        $this->start_controls_section(            'post_content',            array(                'label' => esc_html__( 'General', 'finazi-pro' ),            )        );        // Image.        $this->add_control(            'image',            [                'label' => __( 'Choose Image', 'finazi-pro' ),                'type' => \Elementor\Controls_Manager::MEDIA,                'default' => [                    'url' => \Elementor\Utils::get_placeholder_image_src(),                ],            ]        );        // Select video.        $this->add_control(            'video_style',            [                'label' => __( 'Video Style', 'finazi-pro' ),                'type' => \Elementor\Controls_Manager::SELECT,                'default' => 'vimeo',                'options' => [                    'vimeo'  => __( 'Vimeo', 'finazi-pro' ),                    'youtube' => __( 'Youtube', 'finazi-pro' ),                ],            ]        );        // ID Video text.        $this->add_control(            'video_id',            [                'label' => __( 'ID video', 'finazi-pro' ),                'type' => \Elementor\Controls_Manager::TEXT,                'default' => __( '82659210', 'finazi-pro' ),                'placeholder' => __( 'Your ID youtube here', 'finazi-pro' ),            ]        );        // Title Heading.        $this->add_control(            'widget_title',            [                'label' => __( 'Title', 'finazi-pro' ),                'type' => \Elementor\Controls_Manager::TEXT,                'default' => __( 'Default title', 'finazi-pro' ),                'placeholder' => __( 'Type your title here', 'finazi-pro' ),            ]        );        // Color title.        $this->add_control(            'title_color',            [                'label' => __( 'Title Color', 'finazi-pro' ),                'type' => \Elementor\Controls_Manager::COLOR,                'scheme' => [                    'type' => \Elementor\Scheme_Color::get_type(),                    'value' => \Elementor\Scheme_Color::COLOR_1,                ],                'selectors' => [                    '{{WRAPPER}} .title' => 'color: {{VALUE}}',                ],            ]        );        // Content typography title heading.        $this->add_group_control(            Group_Control_Typography::get_type(),            [                'name' => 'content_typography',                'label' => __( 'Typography Title Heading', 'finazi-pro' ),                'scheme' => Scheme_Typography::TYPOGRAPHY_1,                'selector' => '{{WRAPPER}} .video-title',            ]        );        // Textarea.        $this->add_control(            'item_description',            [                'label' => __( 'Description', 'finazi-pro' ),                'type' => \Elementor\Controls_Manager::TEXTAREA,                'rows' => 10,                'default' => __( 'Default description', 'finazi-pro' ),                'placeholder' => __( 'Type your description here', 'finazi-pro' ),            ]        );        // Color info video.        $this->add_control(            'info_color',            [                'label'  => __( 'Info Color', 'finazi-pro' ),                'type'   => \Elementor\Controls_Manager::COLOR,                'scheme' => [                    'type'  => \Elementor\Scheme_Color::get_type(),                    'value' => \Elementor\Scheme_Color::COLOR_1,                ],                'selectors' => [                    '{{WRAPPER}} .title' => 'color: {{VALUE}}',                ],            ]        );        // Content typography.        $this->add_group_control(            Group_Control_Typography::get_type(),            [                'name' => 'content_typography_2',                'label' => __( 'Typography', 'finazi-pro' ),                'scheme' => Scheme_Typography::TYPOGRAPHY_1,                'selector' => '{{WRAPPER}} .video-description',            ]        );        $this->end_controls_section();    }    /**     * Render     */        protected function render() {        $settings = $this->get_settings_for_display();               ?>        <div class="video-popup">            <div class="js-modal-btn" data-video-select="<?php echo $settings['video_style']; ?>" data-video-id="<?php echo $settings['video_id'] ; ?>" >                <?php echo '<img src="' . $settings['image']['url'] . '">'; ?>            </div>            <div class="video-info">                <div class="video-title">                    <?php echo '<h2 class="title" style="color: ' . $settings['title_color'] . '">' . $settings['widget_title'] . '</h2>'; ?>                </div>                <div class="video-description">                    <?php echo '<p style="color: ' . $settings['info_color'] . '">' . $settings['item_description'] . '</p>'; ?>                </div>            </div>        </div>        <?php    }}Plugin::instance()->widgets_manager->register_widget_type( new Finazi_Popup_Video_Widget() );