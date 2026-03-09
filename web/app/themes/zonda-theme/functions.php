<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}


add_action('carbon_fields_register_fields', 'crb_add_theme_options');

function crb_add_theme_options() {

    Container::make('theme_options', __('Theme Options'))

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
            Field::make('text', 'crb_facebook', 'Facebook URL'),
            Field::make('text', 'crb_instagram', 'Instagram URL'),
            Field::make('text', 'crb_linkedin', 'LinkedIn URL'),
        ])

        ->add_tab(__('Contact Page'), [
            Field::make('text', 'crb_contact_address', 'Address'),
            Field::make('text', 'crb_contact_phone', 'Phone'),
            Field::make('text', 'crb_contact_email', 'Email'),
            Field::make('textarea', 'crb_contact_map_embed', 'Google Maps Embed'),
        ]);

}

include 'functions2.php';
use Roots\Acorn\Application;

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

Application::configure()
    ->withProviders([
        App\Providers\ThemeServiceProvider::class,
    ])
    ->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });
