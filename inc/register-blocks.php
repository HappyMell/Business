<?php 

function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'render_template'   => 'blocks/hero.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));

    acf_register_block_type(array(
        'name'              => 'small-title-big-text',
        'title'             => __('Small Title, Big Text'),
        'render_template'   => 'blocks/small-title-big-text.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));

    acf_register_block_type(array(
        'name'              =>  'image-content',
        'title'             => __('Image & Content'),
        'render_template'   => 'blocks/image-content.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));

    acf_register_block_type(array(
        'name'              =>  'three-column-content',
        'title'             => __('Three Column Content'),
        'render_template'   => 'blocks/three-column-content.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));

    acf_register_block_type(array(
        'name'              =>  'title-content',
        'title'             => __('Title and Content'),
        'render_template'   => 'blocks/title-content.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));

    acf_register_block_type(array(
        'name'              =>  'sub-footer',
        'title'             => __('Sub Footer'),
        'render_template'   => 'blocks/sub-footer.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));

    acf_register_block_type(array(
        'name'              =>  'content',
        'title'             => __('Just Content'),
        'render_template'   => 'blocks/content.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));

    acf_register_block_type(array(
        'name'              =>  'icon-with-content',
        'title'             => __('Icon with Content'),
        'render_template'   => 'blocks/icon-with-content.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));

    acf_register_block_type(array(
        'name'              =>  'title-with-image',
        'title'             => __('Title with Image'),
        'render_template'   => 'blocks/title-with-image.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));

    acf_register_block_type(array(
        'name'              =>  'team',
        'title'             => __('Team'),
        'render_template'   => 'blocks/team.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));

    acf_register_block_type(array(
        'name'              =>  'blog',
        'title'             => __('Blog'),
        'render_template'   => 'blocks/blog.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));

    acf_register_block_type(array(
        'name'              =>  'contact-form',
        'title'             => __('Contact Form'),
        'render_template'   => 'blocks/contact-form.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
        'mode'             => 'edit'
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

?>