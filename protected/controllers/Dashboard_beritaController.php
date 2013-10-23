<?php

class Dashboard_beritaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main_dashboard';

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new BeritaModel;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['BeritaModel']))
		{
			$model->attributes=$_POST['BeritaModel'];
			$model->tanggal=gmdate("d-M-Y H:i:s", time()+3600*7);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_berita));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['BeritaModel']))
		{
			$model->attributes=$_POST['BeritaModel'];
			$model->tanggal=gmdate("d-M-Y H:i:s", time()+3600*7);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_berita));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new BeritaModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BeritaModel']))
			$model->attributes=$_GET['BeritaModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return BeritaModel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BeritaModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param BeritaModel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='berita-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
