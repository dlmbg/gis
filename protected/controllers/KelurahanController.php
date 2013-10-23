<?php

class KelurahanController extends Controller
{
	public function actionIndex()
	{
		$model=new KelurahanModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['KelurahanModel']))
			$model->attributes=$_GET['KelurahanModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
}
