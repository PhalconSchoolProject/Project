<?php

class ErrorController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $user=new Users();
        $profil=new Profil();
        $password = $this->request->getPost('Password');

        //Checking if a user with same email already exists
        $query = $this->modelsManager->createQuery('SELECT * FROM \Users WHERE Email = :Email:');
        $users = $query->execute(['Email' => $this->request->getPost('Email')]);
                
        if(count($users) == 0) {  // If no users were found with same email

            $success=$user->save(
                $this->request->getPost(),
                [
                    "First_Name",
                    "Last_Name",
                    "Email",
                    "Password",
                ]
            );
        
        $user->Password= sha1($password);
        $user->save();
        $messages=$user->getMessages();
        if($success)
            $this->response->redirect("login");
        else{
            $this->view->setVar("messages",$messages);
            }

        }else {
            $this->view->setVar("messages"," A user with same email already exists!!!"); //Error Message for Existing email
        }
     
    }

}

