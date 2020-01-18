<?php
    function load_stylesheets(){
        
        wp_register_style('global', get_template_directory_uri() . "/style.css", array(), 1, 'all');
        wp_enqueue_style('global');

        wp_register_style('resume-header', get_template_directory_uri() . "/css/resume-header.css", array(), 1, 'all');
        wp_enqueue_style('resume-header');

        wp_register_style('resume-body', get_template_directory_uri() . "/css/resume-body.css", array(), 1, 'all');
        wp_enqueue_style('resume-body');

        wp_register_style('resume-contact-card', get_template_directory_uri() . "/css/resume-contact-card.css", array(), 1, 'all');
        wp_enqueue_style('resume-contact-card');

        wp_register_style('resume-skills-card', get_template_directory_uri() . "/css/resume-skills-card.css", array(), 1, 'all');
        wp_enqueue_style('resume-skills-card');

        wp_register_style('resume-controls', get_template_directory_uri() . "/css/resume-controls.css", array(), 1, 'all');
        wp_enqueue_style('resume-controls');

        wp_register_style('experience-card-resume', get_template_directory_uri() . "/css/experience-card-resume.css", array(), 1, 'all');
        wp_enqueue_style('experience-card-resume');

        wp_register_style('header', get_template_directory_uri() . "/css/header.css", array(), 1, 'all');
        wp_enqueue_style('header');

        wp_register_style('footer', get_template_directory_uri() . "/css/footer.css", array(), 1, 'all');
        wp_enqueue_style('footer');
        
        // wp_enqueue_script('javascript', get_template_directory_uri() . "/app.js", array('jquery'), 1, true);

        
        wp_enqueue_style( 
            'font-awesome-5', 
            'https://use.fontawesome.com/releases/v5.3.0/css/all.css', 
            array(), 
            '5.3.0' 
        );
    }

    
    // function custom_add_google_fonts() {
    //     wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,400i', false );
    //     }
    // add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );


    // add_action('wp_enqueue_scripts', 'custom_add_google_fonts' );
    add_action('wp_enqueue_scripts', "load_stylesheets");
?>