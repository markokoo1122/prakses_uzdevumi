<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_homepage_fields');
function crb_homepage_fields() {

    Container::make('post_meta', __('Homepage Fields'))
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields(array(

            Field::make('text', 'crb_hero_title', 'Hero Title'),

            Field::make('textarea', 'crb_hero_description', 'Hero Description'),

            Field::make('image', 'crb_hero_image', 'Hero Image'),

            Field::make('text', 'crb_button_text', 'Button Text'),

            Field::make('text', 'crb_button_link', 'Button Link'),

        ));
}

add_action('carbon_fields_register_fields', 'my_theme_fields');

function my_theme_fields() {

Container::make('post_meta', 'Page Sections')
->where('post_type', '=', 'page')
->add_fields([

Field::make('image', 'section_image_1', 'Section Image 1'),
Field::make('image', 'section_image_2', 'Section Image 2'),
Field::make('image', 'section_image_3', 'Section Image 3'),
Field::make('image', 'section_image_4', 'Section Image 4'),
Field::make('image', 'section_image_5', 'Section Image 5'),
Field::make('image', 'section_image_6', 'Section Image 6'),
Field::make('image', 'section_image_7', 'Section Image 7'),
Field::make('image', 'section_image_8', 'Section Image 8'),
Field::make('image', 'section_image_9', 'Section Image 9'),

Field::make('image', 'section_image_11', 'Section Image 11'),
Field::make('image', 'section_image_12', 'Section Image 12'),


]);

}