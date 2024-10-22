<?php
namespace pockets_router\plugin\api {
    class module {
        /**
            Dummy module so that the namespace below can be bootloaded.
        */
        static function init(){}
    }
}

namespace pockets {
    
    class router {

        use \pockets\traits\init;
 
    }
    
}