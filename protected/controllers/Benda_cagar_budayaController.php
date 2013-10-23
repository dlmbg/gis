<?php

class Benda_cagar_budayaController extends Controller
{
	public function actionDetail($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionIndex()
	{
		$model=new BendaCagarBudayaModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BendaCagarBudayaModel']))
			$model->attributes=$_GET['BendaCagarBudayaModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	

	public function actionDaftar_Kam()
	{
		$model=new BendaCagarBudayaModel('search');

		$this->render('daftar_kam',array(
			'model'=>$model,
		));
	}

	public function actionDaftar_Kel()
	{
		$model=new BendaCagarBudayaModel('search');

		$this->render('daftar_kel',array(
			'model'=>$model,
		));
	}

	public function actionDaftar_Kec()
	{
		$model=new BendaCagarBudayaModel('search');

		$this->render('daftar_kec',array(
			'model'=>$model,
		));
	}

	public function actionDaftar_Kab()
	{
		$model=new BendaCagarBudayaModel('search');

		$this->render('daftar_kab',array(
			'model'=>$model,
		));
	}


	public function loadModel($id)
	{
		$model=BendaCagarBudayaModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
