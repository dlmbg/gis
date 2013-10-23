<?php

class KabupatenController extends Controller
{
	public function actionIndex()
	{
		$model=new KabupatenModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['KabupatenModel']))
			$model->attributes=$_GET['KabupatenModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
}
