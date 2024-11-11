<?php

namespace Cozy_Addons\TypeoutTextWidgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Border;
use Elementor\Core\Schemes\Typography;
use Elementor\Core\Schemes\Color;
use Elementor\Group_Control_Image_Size;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

/**
 * @since 1.1.0
 */
class Cozy_Addons_TypeoutText_Widget extends Widget_Base
{

	public function get_name()
	{
		return 'cozy-addons-typeout-text';
	}

	public function get_title()
	{
		return __('Typeout Text', 'cozy-addons');
	}

	public function get_icon()
	{
		return 'eicon-animation-text cozy-typeout-text cozy-widget-icons';
	}
	public function get_keywords()
	{
		return ['typeout text', 'cozy', 'cozy addons'];
	}
	public function get_categories()
	{
		return ['cozy-addons-items'];
	}

	protected function register_controls()
	{
		if (cozy_addons_premium_access()) {
			$this->cozy_addons_content_options();

			//Styles for widget elements
			$this->cozy_addons_cta_style_box_options();
		}
	}

	/**
	 * Header Layout Options.
	 */
	private function cozy_addons_content_options()
	{
		$this->start_controls_section(
			'content_section',
			[
				'label' => __('General', 'cozy-addons'),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title_tag',
			[
				'label' => __('Text HTML Tag', 'cozy-addons'),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'h1' => 'H1',
					'h2' => 'H2',
					'h3' => 'H3',
					'h4' => 'H4',
					'h5' => 'H5',
					'h6' => 'H6',
					'div' => 'div',
					'span' => 'span',
					'p' => 'p',
				],
				'default' => 'h2',
			]
		);
		$this->add_control(
			'before_typeout_text',
			[
				'label' => __('Before Text', 'cozy-addons'),
				'type' => Controls_Manager::TEXTAREA,
				'rows' => 1,
				'default' => __('Cozy TypeOut Text is', 'cozy-addons'),
				'placeholder' => __('Before Text', 'cozy-addons'),
			]
		);
		$this->add_control(
			'typeout_text_after',
			[
				'label' => __('After Text', 'cozy-addons'),
				'type' => Controls_Manager::TEXTAREA,
				'rows' => 1,
				'default' => __('For Website!', 'cozy-addons'),
				'placeholder' => __('After Text', 'cozy-addons'),
			]
		);
		$this->add_control(
			'typeout_text_one',
			[
				'label' => __('Typeout Text 1!', 'cozy-addons'),
				'type' => Controls_Manager::TEXT,
				'default' => __('Decorative!', 'cozy-addons'),
				'placeholder' => __('Typeout Text', 'cozy-addons'),
			]
		);
		$this->add_control(
			'typeout_text_two',
			[
				'label' => __('Typeout Text 2!', 'cozy-addons'),
				'type' => Controls_Manager::TEXT,
				'default' => __('Attractive!', 'cozy-addons'),
				'placeholder' => __('Typeout Text', 'cozy-addons'),
			]
		);
		$this->add_control(
			'typeout_text_three',
			[
				'label' => __('Typeout Text 3!', 'cozy-addons'),
				'type' => Controls_Manager::TEXT,
				'default' => __('Wonderful!', 'cozy-addons'),
				'placeholder' => __('Typeout Text', 'cozy-addons'),
			]
		);

		$this->end_controls_section();
	}




	/**
	 * Style Box Options.
	 */
	private function cozy_addons_cta_style_box_options()
	{

		// Box.
		$this->start_controls_section(
			'section_style_box',
			[
				'label' => __('Content Style', 'cozy-addons'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		// Box alignment		
		$this->add_responsive_control(
			'content_align',
			[
				'label' => __('Alignment', 'cozy-addons'),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __('Left', 'cozy-addons'),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __('Center', 'cozy-addons'),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __('Right', 'cozy-addons'),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} section.cozy-addons-typeout .typeout-text' => 'text-align: {{VALUE}};',
				],
				'separator' => 'before',
			]
		);
		// Description typography.
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'text_typography',
				'scheme'   => Typography::TYPOGRAPHY_1,
				'label' => __('Typography', 'cozy-addons'),

				'selector' => '{{WRAPPER}} section.cozy-addons-typeout .typeout-text',
				'fields_options' => [
					'typography' => ['default' => 'yes'],
					'font_size' => ['default' => ['size' => 34]],
					'font_weight' => ['default' => 700],
				],
				'separator' => 'before',
			]
		);

		// Box internal padding.
		$this->add_responsive_control(
			'typeout_text_style_padding',
			[
				'label'      => __('Padding', 'cozy-addons'),
				'type'       => Controls_Manager::DIMENSIONS,
				'default'	 => [
					'top' => '0',
					'right' => '0',
					'bottom' => '0',
					'left' => '0',
					'isLinked' => false,
				],
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} section.cozy-addons-typeout .typeout-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
				],
			]
		);
		$this->add_control(
			'text_color',
			[
				'type'      => Controls_Manager::COLOR,
				'label'     => __('Text Color', 'cozy-addons'),
				'scheme'    => [
					'type'  => Color::get_type(),
					'value' => Color::COLOR_1,
				],
				'default'   => '#000000',
				'selectors' => [
					'{{WRAPPER}} section.cozy-addons-typeout .typeout-text' => 'color: {{VALUE}};',
				],
				'separator' => 'after'
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'typeout_text_typography',
				'scheme'   => Typography::TYPOGRAPHY_1,
				'label' => __('Typeout Typography', 'cozy-addons'),

				'selector' => '{{WRAPPER}} section.cozy-addons-typeout .cozy-typeout-text',
				'fields_options' => [
					'typography' => ['default' => 'yes'],
					'font_size' => ['default' => ['size' => 34]],
					'font_weight' => ['default' => 700],
				],
				'separator' => 'before',
			]
		);
		$this->add_control(
			'typeout_text_color',
			[
				'type'      => Controls_Manager::COLOR,
				'label'     => __('Typeout Text Color', 'cozy-addons'),
				'scheme'    => [
					'type'  => Color::get_type(),
					'value' => Color::COLOR_1,
				],
				'default'   => '#6E36C9',
				'selectors' => [
					'{{WRAPPER}} section.cozy-addons-typeout .cozy-typeout-text' => 'color: {{VALUE}};',
				],
				'separator' => 'after'
			]
		);

		$this->end_controls_section();
	}

	protected function render($instance = [])
	{
		if (cozy_addons_premium_access()) {
			// Get settings.
			$settings = $this->get_settings();
?>


			<!-- featured-layout -->
			<section class="cozy-addons-typeout">
				<?php echo '<' . esc_attr($settings['title_tag']) . ' class="typeout-text">';

				if ($settings['before_typeout_text']) {
					echo '<span class="before-typeout-text">' . esc_html($settings['before_typeout_text']) . '</span>';
				}
				$rand = rand(1, time());
				?>

				<?php echo '<span class="cozy-typeout-text" data-firsttext="' . esc_attr($settings['typeout_text_one']) . '" data-secondtext="' . esc_attr($settings['typeout_text_two']) . '" data-thirdtext="' . esc_attr($settings['typeout_text_three']) . '" data-id="' . $rand . '" id="cozyTypeOut' . $rand . '"> </span>'; ?>


				<?php
				if ($settings['typeout_text_after']) {
					echo '<span class="after-typeout-text">' . esc_html($settings['typeout_text_after']) . '</span>';
				}

				echo '</' . esc_attr($settings['title_tag']) . '>';
				?>

			</section> <!-- featured-layout -->
		<?php } else { ?>
			<a href="https://cozythemes.com/cozy-addons/" target="_blank"><?php echo __('Upgrade To Premium Version - https://cozythemes.com/cozy-addons/', 'cozy-addons'); ?></a>
<?php }
	}
}
