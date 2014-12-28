<?php

class PhalconController extends ControllerBase
{

    public function onConstruct()
	{
		define('BASEPATH', 'Phalconers/project/');
	}

    public function indexAction()
    {
		$this->assets
			->addCss('css/all.min.css', false);
    }

}

