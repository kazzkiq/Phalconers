<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->assets
			->addCss('css/all.min.css', false);
    }

}

