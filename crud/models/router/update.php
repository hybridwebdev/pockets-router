<?php
namespace pockets_router\crud\models\router;

class update extends \pockets\crud\resource_walker {
    
    function field() : string {
        /**
            $this->resource contains the request handled by the get_resource method
        */
        return 'updated';
    }

}