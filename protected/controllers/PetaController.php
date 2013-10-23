<?php

class PetaController extends Controller
{
	public function actionIndex()
	{
        $dt = PetaModel::model()->findAll();
		$this->render('index',array('model'=>$dt));
	}
}