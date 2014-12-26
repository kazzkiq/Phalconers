<?php

use Phalcon\Mvc\Controller;

class AuthController extends Controller
{

    public function indexAction()
    {
	    print_r("Is user logged: ".var_dump(self::isLogged()));
    }
    
    private function isLogged()
    {
	    if($this->session->has('email') && $this->session->has('password'))
	    {
		    $email = $this->session->get('email');
		    $password = $this->session->get('password');
		    
		    return Employers::exists($email, $password);
	    }else
	    {
		    return false;
	    }
    }
    
    private function tryAuth()
    {
	    if($this->session->has('email') && $this->session->has('password'))
	    {
		    $email = $this->session->get('email');
		    $password = $this->session->get('password');
		    
		    return Employers::exists($email, $password);
	    }else
	    {
		    return false;
	    }
    }
    
    public function accessHandler()
    {
	    if(!self::isLogged())
	    {
		    $response = new Phalcon\Http\Response();
			$response->redirect('login');
			$response->send();
	    }
    }
    
    public function loginAction()
    {
	    self::flushSession();
	    self::tryAuth();
    }
    
    private function flushSession()
    {
	    $this->session->remove("email");
		$this->session->remove("password");
		$this->session->destroy();
    }

}

