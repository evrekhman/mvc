<?php
switch($action)
{
	case 'rez':
		require_once(ROOT . '/views/'.$router->getController().'/index.php');
	break;
	case 'fas':
		require_once(ROOT . '/views/'.$router->getController().'/indexfas.php');
	break;
	default:
		require_once(ROOT . '/views/'.$router->getController().'/index.php');
	break;
}

/*class MianController extends AdminController implements IntController{

   

	


	public function actionIndex()
	{
						
		require_once(ROOT . '/views/main/index.php');

		return true;
	}

	public function actionAdmin()
	{
		if(isset($_POST['email'], $_POST['password'])){
	

			if($_SESSION['admin'] = $_POST['email']){
				print_r($_SESSION['admin']);
				require_once(ROOT . '/views/admin/index.php');
			}
			

		}else{

			require_once(ROOT . '/views/admin/index.php');
			
		}
		

		return true;
	}

	public function actionLogout(){
		
		unset($_SESSION['admin']);
		header("Location: /");
		return true;
	}

	public function actionCabinet(){
		
		require_once(ROOT . '/views/cabinet/index.php');
		return true;
	}

	



}
*/
