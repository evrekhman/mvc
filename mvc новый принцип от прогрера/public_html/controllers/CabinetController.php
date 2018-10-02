<?
switch($action)
{
	case 'rez':
		require_once(ROOT . '/views/'.$router->getController().'/index.php');
	break;
	case 'sendimg':
		require_once(ROOT . '/models/Postget.php');
		$postget = new Postget($db);
		$postget->insertData($_POST,$_FILES);
		//header("Location: /");
	break;
	default:
		require_once(ROOT . '/views/'.$router->getController().'/index.php');
	break;
}
/*class PostgetController{

	private $db;

	function __construct(&$db)
	{
		$this->db=$db;
	}
	public function actionDownload(){
		
			
			$method = new Postget($this->db);
			
			$insert=$method->insertData($_POST,$_FILES);
			print_r($_FILES);


			$uploaddir = ROOT.'/folderFile/';
			$uploadfile = $uploaddir . basename($_FILES['postfile']['name']);

			echo '<pre>';
			if (move_uploaded_file($_FILES['postfile']['tmp_name'], $uploadfile)) {
			    echo "Файл корректен и был успешно загружен.\n";
			} else {
			    echo "Возможная атака с помощью файловой загрузки!\n";
			}

			
			

			return true;

	}

}
*/
?>