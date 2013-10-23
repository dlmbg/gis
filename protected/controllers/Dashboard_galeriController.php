<?php

class Dashboard_galeriController extends Controller
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
		$model=new GaleriModel;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GaleriModel']))
		{
			$gambar_upload = CUploadedFile::getInstance($model, 'gambar');
			if(!empty($gambar_upload))
			{
				$model->attributes=$_POST['GaleriModel'];
	            $model->gambar = uniqid(rand(),true).'.'.$gambar_upload->getExtensionName();
				if($model->save())
				{
					$path = Yii::getPathOfAlias('webroot').'/images/galeri/temp/'.$model->gambar;
	                $gambar_upload->saveAs($path);

					$img = Yii::app()->simpleImage->load($path);
					$img->resizeToWidth(640);
					$img->save(Yii::getPathOfAlias('webroot').'/images/galeri/'.$model->gambar);

					unlink($path);

					$this->redirect(array('index','id'=>$model->id_galeri));
				}
			}
			else
			{
				echo "Anda belum memilih gambar,,";
			}
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

		if(isset($_POST['GaleriModel']))
		{
			$gambar_upload = CUploadedFile::getInstance($model, 'gambar');
			if(!empty($gambar_upload))
			{
				$model->attributes=$_POST['GaleriModel'];
	            $model->gambar = uniqid(rand(),true).'.'.$gambar_upload->getExtensionName();
				if($model->save())
				{
					$path = Yii::getPathOfAlias('webroot').'/images/galeri/temp/'.$model->gambar;
	                $gambar_upload->saveAs($path);

					$img = Yii::app()->simpleImage->load($path);
					$img->resizeToWidth(640);
					$img->save(Yii::getPathOfAlias('webroot').'/images/galeri/'.$model->gambar);

					unlink($path);

					$this->redirect(array('index','id'=>$model->id_galeri));
				}
			}
			else
			{
				$model->attributes=$_POST['GaleriModel'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id_galeri));
			}

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
		$model=new GaleriModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['GaleriModel']))
			$model->attributes=$_GET['GaleriModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return GaleriModel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=GaleriModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param GaleriModel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='galeri-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
