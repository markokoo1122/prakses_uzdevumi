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