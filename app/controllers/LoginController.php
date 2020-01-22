<?php

class LoginController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        if ( !empty( $this->session->get('auth') ) )
        {
            $this->response->redirect('/');
        }
    }

}

