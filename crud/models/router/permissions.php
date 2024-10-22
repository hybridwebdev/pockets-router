<?php 
namespace pockets_router\crud\models\router;
trait permissions {
    
    use validate_resource;

    function canCreate() : bool {
        return true;
    }

    function canRead() : bool {
        return true;
    }

    function canUpdate() : bool {
        return true;
    }
    
    function canDelete() : bool {
        return true;
    }

}