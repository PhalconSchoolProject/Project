<?php

use Phalcon\MVC\Controller;

class SignupController extends Controller
{
    public function indexAction()
    {
        if ( !empty( $this->session->get('auth') ) )
        {
            $this->response->redirect('/');
        }
    }
        
}

