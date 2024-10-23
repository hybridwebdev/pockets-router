<?php
namespace pockets_router\crud\models\router;

class read extends \pockets\crud\resource_walker {
    
    function loaded_templates(){
        $this->render();
        return \pockets\node_tree::$loaded_templates;
    }

    function source() : string {
        $source = \pockets::crud('crud-resource')::init( $this->resource ) ->read( [ 'crud_resource' ] ) + [
            'metaKey' => 'body',
        ]; 
        return json_encode(  $source );
    }

    function render() : string {

        return \pockets\node_tree::render( 
            \pockets::crud('crud-resource')::init( $this->resource ) ->read( [ 'crud_resource' ] ) + [
                'metaKey' => 'body',
            ] 
        );

    }

}