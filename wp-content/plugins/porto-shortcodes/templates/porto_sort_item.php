<?php
$output = $filter = $popular = $align = $width_lg = $width_md = $width_sm = $width_xs = $el_class = '';
extract(shortcode_atts(array(
    'filter' => '',
    'popular' => 0,
    'align' => '',
    'width_lg' => '12',
    'width_md' => '12',
    'width_sm' => '12',
    'width_xs' => '12',
    'el_class' => ''
), $atts));

$el_class = porto_shortcode_extract_class( $el_class );

$el_class .= ' ' . esc_attr($filter);

$el_class .= ($align ? ' text-' . $align : '') . ' col-lg-' . $width_lg . ' col-md-' . $width_md . ' col-sm-' . $width_sm . ' col-xs-' . $width_xs;

$output = '<div class="porto-sort-item ' . $el_class . '" data-popular="' . esc_attr($popular) . '">';
$output .= do_shortcode($content);
$output .= '</div>';

echo $output;