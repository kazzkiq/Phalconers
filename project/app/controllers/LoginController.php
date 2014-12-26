<?php

class LoginController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->assets
			->addCss('css/all.min.css', false);
    }

}

