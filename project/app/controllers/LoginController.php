<?php

class LoginController extends ControllerBase
{

    public function indexAction()
    {
	    if(AuthController::isLogged())
	    {
		    $response = new Phalcon\Http\Response();
			$response->redirect('jobs/new');
			$response->send();
	    }
	    
		$this->assets
			->addCss('css/all.min.css', false);
    }

}

