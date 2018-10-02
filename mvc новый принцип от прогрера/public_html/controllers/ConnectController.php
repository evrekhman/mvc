<?php
abstract class ConnectController{
	public function __construct(){
		$db = Db::getConnection();
		return $db;
	}

	abstract public function actionDownload();
	
}
