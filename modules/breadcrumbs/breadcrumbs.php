<?php

/**
 * @class FLBreadcrumbsModule
 */
class FLBreadcrumbsModule extends FLBuilderModule {

    /**
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Breadcrumbs', 'fl-builder'),
            'description'   => __('A simple breadcrumbs module.', 'fl-builder'),
            'category'		=> __('Advanced Modules', 'fl-builder')
        ));
    }

    /**
     * @method get_classname
     */
    public function get_classname()
    {
        $classname = 'fl-breadcrumbs-wrap';

        return $classname;
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLBreadcrumbsModule', array(
    'general'       => array(
        'title'         => __('General', 'fl-builder'),
        'sections'      => array(
            'general'       => array(
                'title'         => '',
                'fields'        => array(
                    'home_title'        => array(
                        'type'              => 'text',
                        'label'             => 'Home Title',
                        'default'           => 'Home',
                        'preview'           => array(
                            'type'              => 'text',
                            'selector'          => '.fl-breadcrumbs-home-title'
                        )
                    ),
                    'separator'         => array(
                        'type'              => 'text',
                        'label'             => 'Separator',
                        'default'           => '/',
                        'preview'           => array(
                            'type'              => 'text',
                            'selector'          => '.fl-breadcrumbs-separator'
                        )
                    )
                )
            )
        )
    )
));
