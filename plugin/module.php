<?php
namespace pockets_router\plugin;

/**
    Bootloader for Pockets Form extension
*/

#[\AllowDynamicProperties]
class module extends \pockets_forms\base {

    use \pockets\traits\init;

    function __construct(){
        
        parent::__construct();

        api\module::init();
        \pockets_router\crud\models\router\model::register();

        add_filter( 'template_include', [ $this, 'router' ], 100 );

    }

    function router( $template ){

        if( !$template) {
            return;
        }

        get_header();
            
            $route = \pockets::crud('node-tree/router')::init(
                home_url( add_query_arg( null, null ) )
            )->read( [ 'render', 'source' ] );

            echo sprintf(
                "<pockets-router class='p-2 bg-danger' :source='%s'></pockets-router>", 
                $route['source'],
            );

        get_footer();

        exit;   

    }
    
}
