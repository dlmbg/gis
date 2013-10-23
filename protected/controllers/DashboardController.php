<?php

class DashboardController extends Controller
{
	public $layout='main_dashboard';

	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/index"));
		}
	}
	
	public function actionIndex()
	{
		$this->render('index');
	}
}