<?php

/**
 * @class FLButtonModule
 */
class FLButtonModule extends FLBuilderModule {

    /**
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Button', 'fl-builder'),
            'description'   => __('A simple call to action button.', 'fl-builder'),
            'category'		=> __('Advanced Modules', 'fl-builder')
        ));

        $this->add_css('font-awesome');
    }

    public static function get_page_link_options() {
	    $return_value = array('' => '');
	    $pages = get_pages();

	    foreach ($pages as $page) {
		    $spaces = '';
		    $page_ancestors = get_post_ancestors($page->ID);
		    foreach ($page_ancestors as $page_ancestor) {
			    $spaces .= '&nbsp;&nbsp;&nbsp;';
		    }
		    $return_value[set_url_scheme(get_page_link($page->ID), 'http')] = $spaces . $page->post_title;
	    }

	    return $return_value;
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLButtonModule', array(
    'general'       => array(
        'title'         => __('General', 'fl-builder'),
        'sections'      => array(
            'general'       => array(
                'title'         => '',
                'fields'        => array(
                    'text'          => array(
                        'type'          => 'text',
                        'label'         => __('Text', 'fl-builder')
                    ),
                    'icon'          => array(
                        'type'          => 'icon',
                        'label'         => __('Icon', 'fl-builder'),
                        'show_remove'   => true
                    )
                )
            ),
            'link'          => array(
                'title'         => __('Link', 'fl-builder'),
                'fields'        => array(
                    'link'          => array(
                        'type'          => 'text',
                        'label'         => __('Link', 'fl-builder'),
                        'placeholder'   => 'http://www.example.com',
                        'preview'       => array(
                            'type'          => 'none'
                        ),
                        'help'			=> 'Type a link URL or select a Page below to set the URL.'
                    ),
                    'page_link'   => array(
                        'type'          => 'select',
                        'label'         => __('Page', 'fl-builder'),
                        'default'       => '',
                        'options'       => FLButtonModule::get_page_link_options(),
                        'preview'       => array(
                            'type'          => 'none'
                        )
                    ),
                    'link_target'   => array(
                        'type'          => 'select',
                        'label'         => __('Link Target', 'fl-builder'),
                        'default'       => '_self',
                        'options'       => array(
                            '_self'         => __('Same Window', 'fl-builder'),
                            '_blank'        => __('New Window', 'fl-builder')
                        ),
                        'preview'       => array(
                            'type'          => 'none'
                        )
                    )
                )
            )
        )
    ),
    'style'         => array(
        'title'         => __('Style', 'fl-builder'),
        'sections'      => array(
            'colors'        => array(
                'title'         => __('Colors', 'fl-builder'),
                'fields'        => array(
                    'bg_color'      => array(
                        'type'          => 'color',
                        'label'         => __('Background Color', 'fl-builder'),
                        'default'       => '',
                        'show_reset'    => true
                    ),
                    'bg_hover_color' => array(
                        'type'          => 'color',
                        'label'         => __('Background Hover Color', 'fl-builder'),
                        'default'       => '',
                        'show_reset'    => true
                    ),
                    'text_color'    => array(
                        'type'          => 'color',
                        'label'         => __('Text Color', 'fl-builder'),
                        'default'       => '',
                        'show_reset'    => true
                    ),
                    'text_hover_color' => array(
                        'type'          => 'color',
                        'label'         => __('Text Hover Color', 'fl-builder'),
                        'default'       => '',
                        'show_reset'    => true
                    ),
                    'three_d'       => array(
                        'type'          => 'select',
                        'label'         => __('Gradient', 'fl-builder'),
                        'default'       => '0',
                        'options'       => array(
                            '0'             => __('No', 'fl-builder'),
                            '1'             => __('Yes', 'fl-builder')
                        )
                    )
                )
            ),
            'formatting'    => array(
                'title'         => __('Structure', 'fl-builder'),
                'fields'        => array(
                	'width'         => array(
                        'type'          => 'select',
                        'label'         => __('Width', 'fl-builder'),
                        'default'       => 'auto',
                        'options'       => array(
                            'auto'          => __('Auto', 'fl-builder'),
                            'full'          => __('Full Width', 'fl-builder'),
                            'custom'        => __('Custom', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'auto'          => array(
                                'fields'        => array('align')
                            ),
                            'full'          => array(),
                            'custom'        => array(
                                'fields'        => array('align', 'custom_width')
                            )
                        )
                    ),
                    'custom_width'  => array(
                        'type'          => 'text',
                        'label'         => __('Custom Width', 'fl-builder'),
                        'default'       => '200',
                        'maxlength'     => '3',
                        'size'          => '4',
                        'description'   => __('px', 'fl-builder')
                    ),
                    'align'         => array(
                        'type'          => 'select',
                        'label'         => __('Alignment', 'fl-builder'),
                        'default'       => 'left',
                        'options'       => array(
                            'center'        => __('Center', 'fl-builder'),
                            'left'          => __('Left', 'fl-builder'),
                            'right'         => __('Right', 'fl-builder')
                        )
                    ),
                    'font_size'     => array(
                        'type'          => 'text',
                        'label'         => __('Font Size', 'fl-builder'),
                        'default'       => '',
                        'maxlength'     => '3',
                        'size'          => '4',
                        'description'   => __('px', 'fl-builder')
                    ),
                    'padding'       => array(
                        'type'          => 'text',
                        'label'         => __('Padding', 'fl-builder'),
                        'default'       => '',
                        'maxlength'     => '3',
                        'size'          => '4',
                        'description'   => __('px', 'fl-builder')
                    ),
                    'border_radius' => array(
                        'type'          => 'text',
                        'label'         => __('Round Corners', 'fl-builder'),
                        'default'       => '',
                        'maxlength'     => '3',
                        'size'          => '4',
                        'description'   => __('px', 'fl-builder')
                    )
                )
            )
        )
    )
));
