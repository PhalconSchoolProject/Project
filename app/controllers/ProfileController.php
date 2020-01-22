<?php
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Phalcon\Flash\Session as FlashSession;

class ProfileController extends ControllerBase
{

    public function newAction()
    {
        $profil = Profil::findFirst(array(
            'id_user = :id_user:', 'bind' => array(
            'id_user' => $this->session->get('auth'),

        )));
        if($profil){
            $this->response->redirect("profile");
            return ;
        }
    }
    /**
     * Path for local Auth
     */
    public function indexAction()
    {
        if ($this->request->isPost()) {
            $user = Users::findFirst(array( 
               'Email = :Email: and Password = :Password:', 'bind' => array( 
                  'Email' => $this->request->getPost("login"), 
                  'Password' => sha1($this->request->getPost("password")) 
               ) 
            ));  
            if ($user === false) { 
                $this->flashSession->error("");
               return $this->response->redirect("login");
            }
            if(1)
            $this->response->redirect("profile/new");
            $this->session->set('auth', $user->ID); 
            $this->persistent->parameters = null;
         }else if($this->session->get('auth')){
            //Create profile if none are existing 
            $profil = Profil::findFirst(array(
                'id_user = :id_user:', 'bind' => array(
                'id_user' => $this->session->get('auth'),
    
            )));
            if(!$profil){
                $this->response->redirect("profile/new");
            }else{
           
            $this->view->setVar('profile', $profil);
            }

         }else{
            $this->response->redirect("login");
         }
    }


    /**
     * Path For Update/Create Profile
     */

     public function updateAction(){
        $profil = Profil::findFirst(array(
            'id_user = :id_user:', 'bind' => array(
            'id_user' => $this->session->get('auth'),

        )));
        if (!$profil) {
            $this->response->redirect("profile");
        } else{
       
        $this->view->setVar('profile', $profil);
        }

        if ($this->request->isPost()) {
            $profil->nom = $this->request->getPost("nom");
            $profil->prenom = $this->request->getPost("prenom");
            $profil->adress = $this->request->getPost("adress");
            
            $profil->setImageLien(base64_encode(file_get_contents($this->request->getUploadedFiles()[0]->getTempName())));  
            $profil->setCvLien(base64_encode(file_get_contents($this->request->getUploadedFiles()[1]->getTempName())));   
            $profil->description = $this->request->getPost("description");
            $profil->setIdUser($this->session->get('auth'));
        
            if (!$profil->save()) {
                foreach ($profil->getMessages() as $message) {
                    $this->flash->error($message);
                }

                $this->dispatcher->forward([
                    'controller' => "profile",
                    'action' => 'update'
                ]);
    
                return;
            }
            $this->flash->success("profil was Updated successfully");
            $this->response->redirect("profile");
              
        }

     }

    /**
     * Path For Creating new Profile for user
     */
    public function createAction()
    {



        $profil = Profil::findFirst(array(
            'id_user = :id_user:', 'bind' => array(
            'id_user' => $this->session->get('auth'),

        )));
        if($profil){
            $this->response->redirect("profile");
        }


        
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "profile",
                'action' => 'index'
            ]);

            return;
        }

        $profil = new Profil();
        $profil->nom = $this->request->getPost("nom");
        $profil->prenom = $this->request->getPost("prenom");
        $profil->adress = $this->request->getPost("adress");
        
        $profil->setImageLien(base64_encode(file_get_contents($this->request->getUploadedFiles()[0]->getTempName())));  
        $profil->setCvLien(base64_encode(file_get_contents($this->request->getUploadedFiles()[1]->getTempName())));   
        $profil->description = $this->request->getPost("description");
        $profil->setIdUser($this->session->get('auth'));
    
        if (!$profil->save()) {
            foreach ($profil->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "profile",
                'action' => 'new'
            ]);

            return;
        }
        $this->flash->success("profil was created successfully");
        $this->response->redirect("profile");
    }



    //Path for logout 
    public function logoutAction(){
        ($this->session->remove('auth'));
        $this->response->redirect("/");
    }

}

