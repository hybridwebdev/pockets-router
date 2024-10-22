<?php
namespace pockets_router\rest;

#[\AllowDynamicProperties]
class form_endpoint {
    use \pockets\traits\init;

    function __construct(){
        add_action('rest_api_init', [ $this, 'register_endpoint' ]);
    }

    function handler( \WP_REST_Request $request ){
        
        $response = \pockets::error('Disabled ');
        if( is_wp_error( $form ) ) {
            $response = [
                'error' => $form->get_error_message()
            ];
        }

        if( !is_wp_error( $form ) ) {
            $response = $form::init( 
                data: $request->get_body_params(),
                formID: $formID
            )->process();
        }

        return new \WP_REST_Response( 
            $response,
            200 
        );
        
    }

    function register_endpoint(){
        // register_rest_route('pockets', '/forms/(?P<endpoint>[a-zA-Z0-9-_]+)(?:/(?P<formID>[a-zA-Z0-9-_]+))?', [
        //     'methods' => 'POST',
        //     'callback' => [ $this, 'handler' ],
        //     'args' => [
        //         'endpoint' => [
        //             'required' => true,
        //         ],
        //         'formID' => [
        //             'required' => false
        //         ]
        //     ]
        // ]);
    }

}
