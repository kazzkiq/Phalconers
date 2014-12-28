<?php

use Phalcon\Mvc\View,
	Phalcon\Mvc\Controller;

class AuthController extends Controller
{

    public function indexAction()
    {
	    $this->view->disable();
    }
    
    public function isLogged()
    {
	    if($this->session->has('email') && $this->session->has('password'))
	    {
		    $email = $this->session->get('email');
		    $password = $this->session->get('password');
		    
		    $employersObj = new Employers;
		    return $employersObj->exists($email, $password);
	    }else
	    {
		    return false;
	    }
    }
    
    public function genpassAction()
    {
	    echo Bcrypt::check("12345",'$2a$08$OTU0MDQ4MzU0OWY3YTM3MOTxNKlFk3HDR6nrLtOcAqA8/b3vX8NK6');
    }
    
    private function tryAuth($email, $password)
    {
	    $employersObj = new Employers;
	    if($employersObj->exists($email, $password))
		{
			$this->setLoginSessions($email, $password);
			return true;
	    }else
	    {
			return false;
		}
    }
    
    public static function accessHandler()
    {
	    $auth = new AuthController;
	    if(!$auth->isLogged())
	    {
		    $response = new Phalcon\Http\Response();
			$response->redirect('login');
			$response->send();
	    }else
	    {
		    return true;
	    }
    }
    
    private function sendToInnerPage()
    {
	    $response = new Phalcon\Http\Response();
		$response->redirect('jobs/new');
		$response->send();
    }
    
    public function loginAction()
    {
	    $this->view->disable();
	    $request = new Phalcon\Http\Request();
	    
	    if($request->hasPost('email') && $request->hasPost('password'))
	    {
		    $email = $request->getPost('email');
		    $password = $request->getPost('password');

		    if($this->tryAuth($email, $password))
		    {
			    $this->setLoginSessions($email, $password);
			    $this->sendToInnerPage();
		    }else{
			    $this->accessHandler();
		    }
		    
		}else
		{
			$this->accessHandler();
		}
    }
    
    public function logoutAction()
    {
	    self::flushSession();
	    self::accessHandler();
    }
    
    private function flushSession()
    {
	    $this->session->remove("email");
		$this->session->remove("password");
		$this->session->destroy();
    }
    
    private function setLoginSessions($email, $password)
    {
	    $this->session->set('email', $email);
	    $this->session->set('password', $password);   
    }

}

