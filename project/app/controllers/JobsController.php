<?php

class JobsController extends ControllerBase
{

    public function indexAction()
    {
		$this->assets
			->addCss('css/all.min.css', true);
    }
    
    public function newAction()
    {
	    AuthController::accessHandler();
	    
	    $this->assets
			->addCss('css/all.min.css', true);
    }
    
    public function jobAction()
    {
	    $this->assets
			->addCss('css/all.min.css', true);
    }

}

