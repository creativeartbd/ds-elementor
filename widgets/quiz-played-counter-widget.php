<?php


class Quiz_Played_Counter_Widget extends \Elementor\Widget_Base
{

    /**
     * Get widget name.
     *
     * Retrieve Blank widget name.
     *
     * @return string Widget name.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_name()
    {
        return 'quiz_played_counter';
    }

    /**
     * Get widget title.
     *
     * Retrieve Blank widget title.
     *
     * @return string Widget title.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_title()
    {
        return __('Quiz Played Counter', 'dew');
    }

    /**
     * Get widget icon.
     *
     * Retrieve Blank widget icon.
     *
     * @return string Widget icon.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_icon()
    {
        return 'fa fa-clock-o';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the Blank widget belongs to.
     *
     * @return array Widget categories.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_categories()
    {
        return ['general'];
    }

    /**
     * Register Blank widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function _register_controls()
    {

        $this->register_content_controls();
        $this->register_style_controls();
    }

    /**
     * Register Blank widget content ontrols.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    function register_content_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'dew'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'qpc_icon',
            [
                'label' => __('Icon', 'dew'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'qpc_title',
            [
                'label'       => __('Title', 'dew'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'input_type'  => 'text',
                'label_block' => true,
                'placeholder' => __('Enter your title here', 'dew'),
            ]
        );

        $this->add_control(
            'qpc_suffix',
            [
                'label'       => __('Suffix', 'dew'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'input_type'  => 'text',
                'placeholder' => __('Enter the suffix here', 'dew'),
                'default'     => __('Person', 'dew'),
            ]
        );

        $this->end_controls_section();
    }

    /**
     * Register Blank widget style ontrols.
     *
     * Adds different input fields in the style tab to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_style_controls()
    {

        $this->start_controls_section(
            'qpc_icon_style_section',
            [
                'label' => __('Icon Style', 'dew'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'qpc_icon_color',
            [
                'label'     => __('Color', 'dew'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'default'   => '#ff0000',
                'selectors' => [
                    '{{WRAPPER}} .qpc_icon' => 'color: {{VALUE}}'
                ]
            ]
        );

        $this->add_control(
            'qpc_icon_size',
            [
                'label' => __('Size', 'dew'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],

                'selectors' => [
                    '{{WRAPPER}} .qpc_icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'qpc_icon_spacing',
            [
                'label' => __('Spacing', 'dew'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],

                'selectors' => [
                    '{{WRAPPER}} .qpc_icon' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'qpc_icon_align',
            [
                'label' => __('Alignment', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'plugin-domain'),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'plugin-domain'),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'plugin-domain'),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .qpc_icon' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'qpc_title_style_section',
            [
                'label' => __('Title Style', 'dew'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'qpc_title_color',
            [
                'label'     => __('Color', 'dew'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .qpc_title' => 'color: {{VALUE}}'
                ]
            ]
        );

        $this->add_control(
            'qpc_title_bgcolor',
            [
                'label'     => __('Backgroudn Color', 'dew'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .qpc_title' => 'background-color: {{VALUE}}'
                ]
            ]
        );

        $this->add_control(
            'qpc_title_padding',
            [
                'label' => __('Padding ', 'dew'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .qpc_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'qpc_title_margin',
            [
                'label' => __('Margin ', 'dew'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .qpc_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'qpc_title_alignment',
            [
                'label' => __('Alignment', 'dew'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'plugin-domain'),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'plugin-domain'),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'plugin-domain'),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .qpc_title' => 'text-align: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'qpc_title_typography',
                'label'    => __('Typography', 'dew'),
                'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .qpc_title',
            ]
        );

        $this->end_controls_section();

        // Suffix Style
        $this->start_controls_section(
            'qpc_suffix_style_section',
            [
                'label' => __('Suffix Style', 'dew'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'qpc_suffix_color',
            [
                'label'     => __('Color', 'dew'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .qpc_suffix' => 'color: {{VALUE}}'
                ]
            ]
        );

        $this->add_control(
            'qpc_suffix_bgcolor',
            [
                'label'     => __('Backgroudn Color', 'dew'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .qpc_suffix' => 'background-color: {{VALUE}}'
                ]
            ]
        );

        $this->add_control(
            'qpc_suffix_padding',
            [
                'label' => __('Padding ', 'dew'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .qpc_suffix' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'qpc_suffix_margin',
            [
                'label' => __('Margin ', 'dew'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .qpc_suffix' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'qpc_suffix_alignment',
            [
                'label' => __('Alignment', 'dew'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'plugin-domain'),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'plugin-domain'),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'plugin-domain'),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .qpc_suffix' => 'text-align: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'qpc_suffix_typography',
                'label'    => __('Typography', 'dew'),
                'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .qpc_suffix',
            ]
        );

        $this->end_controls_section();
    }

    public function num_to_bangla_callback($number)
    {
        $engNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
        $bangNumber = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
        $converted = str_replace($engNumber, $bangNumber, $number);

        return $converted;
    }

    /**
     * Render Blank widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render()
    {

        $qpc_icon = $this->get_settings('qpc_icon');
        $qpc_title = $this->get_settings('qpc_title');
        $qpc_suffix = $this->get_settings('qpc_suffix');
        //$qpc_alignment = $this->get_settings('qpc_alignment');

        $this->add_render_attribute('qpc_icon', 'class', 'qpc_icon');
        $this->add_render_attribute('qpc_title', 'class', 'qpc_title');
        $this->add_render_attribute('qpc_suffix', 'class', 'qpc_suffix');
        //$this->add_render_attribute('dew_qpc_alignment', 'class', 'qpc_wrapper');

        global $wpdb;
        $table = $wpdb->base_prefix . 'mlw_results';
        $quiz_played = $wpdb->get_var("SELECT COUNT(DISTINCT user)  FROM {$table}");

        echo "<div>";
        echo "<div " . $this->get_render_attribute_string('qpc_icon') . ">";
        echo "<i class='fa {$qpc_icon['value']}' aria-hidden='true'></i>";
        echo "</div>";
        echo "<p " . $this->get_render_attribute_string('qpc_suffix') . ">" . $this->num_to_bangla_callback($quiz_played) . " {$qpc_suffix}" . "</p>";
        echo "<div " . $this->get_render_attribute_string('qpc_title') . ">";
        echo $qpc_title;
        echo "</div>";
        echo "</div>";
    }

    /**
     * Render Blank widget output on the frontend.
     *
     * Written in JS and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function _content_template_()
    {
        $this->add_render_attribute('dummy_text', 'class', 'dummy_text');
        $this->add_inline_editing_attributes('dummy_text', 'none');
?>
        <div <?php echo $this->get_render_attribute_string('dummy_text') ?>> {{ settings.dummy_text }}</div>
<?php
    }
}
