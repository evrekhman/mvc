<?php

class Db
{
		public $db;
		private static $instance;

		function __construct()
		{
			$paramsPath = ROOT . '/config/db_params.php';
			$params = include($paramsPath);
			$this->db=$this->getConnection();
			return $this->db;
		}

		private function init()
		{
			if(self::$instance instanceof self)
				return false;
			self::$instance = new self();
		}


		public function getConnection()
		{
		    try {
				$paramsPath = ROOT . '/config/db_params.php';
				$params = include($paramsPath);


				$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
				//, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
				$db = new PDO($dsn, $params['user'], $params['password']);

				$db->exec("set names utf8");
				//print_r($db);
			} catch (PDOException $e) {
			    print "Error!: " . $e->getMessage() . "<br/>";
			    die();
			}
			return $db;

		}
		public function query($s)
        {
        	return $this->db->query($s);
        }

}