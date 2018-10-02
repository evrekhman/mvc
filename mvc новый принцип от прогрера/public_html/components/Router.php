<?php

class Router
{

	private $routes;
	private $controller;
	private $action;


	public function __construct()
	{
		$this->setController();
	}

// Return type
	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
		return trim($_SERVER['REQUEST_URI'], '/');
		}
	}
	public function setController()
	{
		$uri = $this->getURI();
		$uri = urldecode($uri);
		$u = explode('/', $uri);
		
		if(!file_exists(ROOT . '/controllers/'.ucfirst($u[0]).'Controller.php'))
		{
			$u[1]=$u[0];
			$u[0]='mian';
		}
		$this->controller = $u[0];
		if(isset($u[1]))
			$this->action = $u[1];
	}
	public function getController()
	{
		return $this->controller;
	}
	public function getAction()
	{
		return $this->action;
	}
}