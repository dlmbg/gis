<?php

class Rumah_adatController extends Controller
{
	public function actionDetail($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionIndex()
	{
		$model=new RumahAdatModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RumahAdatModel']))
			$model->attributes=$_GET['RumahAdatModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionDaftar_Kam()
	{
		$model=new RumahAdatModel('search');

		$this->render('daftar_kam',array(
			'model'=>$model,
		));
	}

	public function actionDaftar_Kel()
	{
		$model=new RumahAdatModel('search');

		$this->render('daftar_kel',array(
			'model'=>$model,
		));
	}

	public function actionDaftar_Kec()
	{
		$model=new RumahAdatModel('search');

		$this->render('daftar_kec',array(
			'model'=>$model,
		));
	}

	public function actionDaftar_Kab()
	{
		$model=new RumahAdatModel('search');

		$this->render('daftar_kab',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=RumahAdatModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
