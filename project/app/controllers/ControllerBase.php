<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
	
	public function onConstruct()
	{
		$this->setDefaultVars();
	}
	
	private function setDefaultVars()
	{
		$auth = new AuthController;
		$isLogged = $auth->isLogged();
		if(!!$isLogged)
		{
			$employersObj = new Employers;
			$this->view->setVar("isLogged", $isLogged);
			$this->view->setVar("employer", $employersObj->getCurrent($this->session->get('email')));
		}else
		{
			$this->view->setVar("isLogged", $isLogged);
		}
	}
	
}
