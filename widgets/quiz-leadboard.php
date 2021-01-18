<?php


class Quiz_Leadboard extends \Elementor\Widget_Base
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
        return 'quiz_leadboard';
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
        return __('Quiz Leadboard', 'dew');
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
        return 'fa fa-graduation-cap';
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
            'ql_content_section',
            [
                'label' => __('Content', 'dew'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'ql_leadboard_title',
            [
                'label'       => __('Title', 'dew'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'input_type'  => 'text',
                'label_block' => true,
                'placeholder' => __('Enter your title here', 'dew'),
            ]
        );

        $this->add_control(
            'ql_leadboard_description',
            [
                'label'       => __('Description', 'dew'),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'row'  => 10,
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
            'ql_title_style_section',
            [
                'label' => __('Title Style', 'dew'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'ql_title_color',
            [
                'label'     => __('Color', 'dew'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ql_title' => 'color: {{VALUE}}'
                ]
            ]
        );

        $this->add_control(
            'ql_title_bgcolor',
            [
                'label'     => __('Backgroudn Color', 'dew'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ql_title' => 'background-color: {{VALUE}}'
                ]
            ]
        );

        $this->add_control(
            'ql_title_padding',
            [
                'label' => __('Padding ', 'dew'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .ql_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'ql_title_margin',
            [
                'label' => __('Margin ', 'dew'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .ql_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'ql_title_alignment',
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
                    '{{WRAPPER}} .ql_title' => 'text-align: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'ql_title_typography',
                'label'    => __('Typography', 'dew'),
                'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .ql_title',
            ]
        );

        $this->end_controls_section();

        // description Style
        $this->start_controls_section(
            'ql_description_style_section',
            [
                'label' => __('Description Style', 'dew'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'ql_description_color',
            [
                'label'     => __('Color', 'dew'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ql_description' => 'color: {{VALUE}}'
                ]
            ]
        );

        $this->add_control(
            'ql_description_bgcolor',
            [
                'label'     => __('Backgroudn Color', 'dew'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ql_description' => 'background-color: {{VALUE}}'
                ]
            ]
        );

        $this->add_control(
            'ql_description_padding',
            [
                'label' => __('Padding ', 'dew'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .ql_description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'ql_description_margin',
            [
                'label' => __('Margin ', 'dew'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .ql_description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'ql_description_alignment',
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
                    '{{WRAPPER}} .ql_description' => 'text-align: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'ql_description_typography',
                'label'    => __('Typography', 'dew'),
                'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .ql_description',
            ]
        );

        $this->end_controls_section();
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
        $ql_leadboard_title = $this->get_settings('ql_leadboard_title');
        $ql_leadboard_description = $this->get_settings('ql_leadboard_description');

        $this->add_render_attribute('ql_leadboard_title', 'class', 'ql_title');
        $this->add_render_attribute('ql_leadboard_description', 'class', 'ql_description');

        global $wpdb;
        $result_table = $wpdb->base_prefix . 'mlw_results';
        $quiz_table = $wpdb->base_prefix . 'mlw_quizzes';

        $get_quizs = $wpdb->get_results("SELECT quiz_id, quiz_name FROM {$quiz_table} WHERE deleted = 0 ");
        foreach ($get_quizs as $quiz) {
            $quiz_id = $quiz->quiz_id;
            $quiz_name = $quiz->quiz_name;
            $quiz_results = $wpdb->get_results("SELECT * FROM {$result_table} WHERE deleted = 0 AND quiz_id = $quiz_id ORDER BY result_id DESC ", OBJECT);
            // echo '<pre>';
            // print_r($quiz_results);
            // echo '</pre>';
            echo "<div>";
            echo "<p " . $this->get_render_attribute_string('ql_leadboard_title') . ">";
            echo $ql_leadboard_title;
            echo "</p>";
            echo "<div " . $this->get_render_attribute_string('ql_leadboard_description') . ">";
            echo $ql_leadboard_description;
            echo "</div>";
            echo "</div>";

            if ($quiz_results) {
                echo "<h5>$quiz_name</h5>";
                echo "<table class='table table-bordered' style='table-layout: fixed;'>";
                echo "<tr>";
                echo "<td><b>Sl.</b></td>";
                echo "<td><b>Name</b></td>";
                echo "<td><b>Score</b></td>";
                echo "<td><b>Time Taken</b></td>";
                echo "<td><b>Played On</b></td>";
                echo "</tr>";

                $count = 0;
                foreach ($quiz_results as $result) {
                    $count++;
                    $mlw_qmn_results_array = unserialize($result->quiz_results);

                    // Calculate hours
                    $mlw_complete_hours = floor($mlw_qmn_results_array[0] / 3600);
                    if ($mlw_complete_hours > 0) {
                        $actual_hour = str_pad($mlw_complete_hours, 2, '0', STR_PAD_LEFT) . 'Hours';
                    } else {
                        $actual_hour = 0;
                    }

                    // Calculate minutes
                    $mlw_complete_minutes = floor(($mlw_qmn_results_array[0] % 3600) / 60);
                    if ($mlw_complete_minutes > 0) {
                        $actual_minutes = str_pad($mlw_complete_minutes, 2, '0', STR_PAD_LEFT);
                    } else {
                        $actual_minutes = 0;
                    }

                    // Calculate seconds
                    $mlw_complete_seconds = $mlw_qmn_results_array[0] % 60;
                    $actual_seconds = str_pad($mlw_complete_seconds, 2, '0', STR_PAD_LEFT);

                    $quiz_system = $result->quiz_system; // 0 = Correct/Incorrect, 1 = Point, 3 = Correct/Incorect and Point
                    $correct_score = $result->correct_score; // Score for Correct/Incorrect
                    $point_score = $result->point_score; // Score for Point

                    if (0 == $quiz_system) {
                        $final_score = $correct_score . '%';
                    } elseif (1 == $quiz_system) {
                        $final_score = $point_score;
                    } elseif (3 == $quiz_system) {
                        $final_score = 'Point(' . $point_score . ') | Correct(' . $correct_score . '%)';
                    }
                    echo '</pre>';
                    echo "<tr>";
                    echo "<td>{$count}</td>";
                    echo "<td><a href='" . site_url() . '/author/' . $result->name . "'>{$result->name}</a></td>";
                    echo "<td>{$final_score}</td>";
                    echo "<td>{$actual_hour}h {$actual_minutes}m {$actual_seconds}</td>";
                    echo "<td>{$result->time_taken}</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

        //$quiz_results = $wpdb->get_results("SELECT * FROM {$table} WHERE deleted = 0 GROUP BY quiz_id   ORDER BY result_id DESC ", OBJECT);




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
