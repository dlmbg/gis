<?php

class Kampung_adatController extends Controller
{
	public function actionIndex()
	{
		$model=new KampungAdatModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['KampungAdatModel']))
			$model->attributes=$_GET['KampungAdatModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	public function actionDetail($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	

	public function actionDaftar_Kam()
	{
		$model=new KampungAdatModel('search');

		$this->render('daftar_kam',array(
			'model'=>$model,
		));
	}

	public function actionDaftar_Kel()
	{
		$model=new KampungAdatModel('search');

		$this->render('daftar_kel',array(
			'model'=>$model,
		));
	}

	public function actionDaftar_Kec()
	{
		$model=new KampungAdatModel('search');

		$this->render('daftar_kec',array(
			'model'=>$model,
		));
	}

	public function actionDaftar_Kab()
	{
		$model=new KampungAdatModel('search');

		$this->render('daftar_kab',array(
			'model'=>$model,
		));
	}

	public function loadModel($id)
	{
		$model=KampungAdatModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
