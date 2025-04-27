<?php
namespace pockets_router\plugin;

/**
    Bootloader for Plugin
*/

#[\AllowDynamicProperties]
class module extends \pockets_forms\base {

    use \pockets\traits\init;

    function __construct(){
        
        parent::__construct();

        api\module::init();

    }
    
}
