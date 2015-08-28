<?php 
/**
* 
*/
class Controller
{
	
	function __construct()
	{

	}

	public function model($model)
	{
		require_once '../model/'.$model.'.php';
		return new $model();
	}

	public function view($view, $data = [])
	{
		ob_start();
		require_once '../app/view/'.$view.'.php';
		$content = ob_get_clean();
		$app = require_once '../app/config/app.php';
		require_once '../app/view/default/template.php';
	}
}
 ?>