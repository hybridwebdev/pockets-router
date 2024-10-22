<?php 
namespace pockets\crud\models\example_model\test;

class example_model extends \WP_UnitTestCase {

    function test_model(){

        \pockets\crud\models\example_model\model::register();

        $model = \pockets::crud('example-model')::init();

        $this->assertTrue( $model->canCreate() );
        $this->assertTrue( $model->canRead() );
        $this->assertTrue( $model->canUpdate() );
        $this->assertTrue( $model->canDelete() );

        $this->assertWPError( $model->create( [] ) );
        $this->assertWPError( $model->delete( [] ) );

        $input = [ 'field' ];

        $this->assertEquals( $model->read( $input ) , [
            'field' => 'a value'
        ] );
        
        $this->assertEquals( $model->update( $input ) , [
            'field' => 'updated'
        ] );

        $model::unregister();

        $this->assertWPError( \pockets::crud('example-model') );

    }

}