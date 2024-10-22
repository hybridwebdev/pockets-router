<?php
namespace pockets_router\crud\models\router;

class read extends \pockets\crud\resource_walker {
    
    function test() : string {
        return \pockets\node_tree::render( 
            \pockets::crud('crud-resource')::init( $this->resource ) ->read( [ 'crud_resource' ] ) + [
                'metaKey' => 'body',
            ] 
        );
    }

}