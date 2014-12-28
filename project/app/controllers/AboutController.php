<?php

class AboutController extends ControllerBase
{

    public function indexAction()
    {
		$this->assets
			->addCss('css/all.min.css', false);
    }

}

