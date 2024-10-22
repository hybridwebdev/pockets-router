<?php
namespace pockets_router\crud\models\router;

class get extends \pockets\crud\get_resource {

    use validate_resource;

    function request_using_string(){
        $resolver = \pockets\url_to_query\api::init();
        return $resolver->resolve( $this->resource )->getQueriedObject();
    }

}   
