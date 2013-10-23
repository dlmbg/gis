<?php

class GaleriController extends Controller
{

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('GaleriModel',array(
			'criteria' => array(
				'limit' => 5,
				),
            'pagination' => array('pageSize' => 8,),
			));
		$this->render('index',array(
			'dataProvider'=>$dataProvider
		));
	}
}
