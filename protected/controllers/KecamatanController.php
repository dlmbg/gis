<?php

class KecamatanController extends Controller
{
	public function actionIndex()
	{
		$model=new KecamatanModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['KecamatanModel']))
			$model->attributes=$_GET['KecamatanModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
}
