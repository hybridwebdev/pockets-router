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

        add_filter( 'template_redirect', [ $this, 'router' ] );

    }

    function router(){

        get_header();

            echo \pockets::crud('router')::init(
                home_url( add_query_arg( null, null ) )
            )->read( [ 'test' ] )['test'];

        get_footer();

        exit;   

    }
    
}
