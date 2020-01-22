<?php

class CvsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $profiles =Profil::find();
        $this->view->setVar("profiles",$profiles);
    }

}

