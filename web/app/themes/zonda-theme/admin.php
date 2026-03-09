<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Carbon_Fields;

// Boot Carbon Fields
add_action('after_setup_theme', function() {
    Carbon_Fields::boot();
});

// Register Site Settings Admin Page
add_action('carbon_fields_register_fields', function() {

    Container::make('theme_options', __('Site Settings', 'crb'))
        ->add_tab(__('Header'), [
            Field::make('image', 'crb_logo', 'Site Logo'),
            Field::make('text', 'crb_phone', 'Phone Number'),
            Field::make('text', 'crb_email', 'Email Address'),
        ])
        ->add_tab(__('Footer'), [
            Field::make('textarea', 'crb_footer_text', 'Footer Text'),
            Field::make('text', 'crb_footer_copyright', 'Copyright Text'),
        ])
        ->add_tab(__('Social Media'), [
            Field::make('text', 'crb_youtube', 'YouTube URL'),
            Field::make('text', 'crb_instagram', 'Instagram URL'),
            Field::make('text', 'crb_linkedin', 'LinkedIn URL'),
            Field::make('text', 'crb_pinterest', 'Pinterest URL'),
        ])
        ->add_tab(__('Contact Page'), [
            Field::make('text', 'crb_contact_address', 'Address'),
            Field::make('text', 'crb_contact_phone', 'Phone'),
            Field::make('text', 'crb_contact_email', 'Email'),
            Field::make('textarea', 'crb_contact_map_embed', 'Google Maps Embed'),
        ]);
});