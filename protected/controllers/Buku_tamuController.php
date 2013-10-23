<?php

class Buku_tamuController extends Controller
{

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('BukuTamuModel',array(
			'criteria'=>array(
				'condition'=>'stts=1')));
		$model=new BukuTamuModel;

		if(isset($_POST['BukuTamuModel']))
		{
			$model->attributes=$_POST['BukuTamuModel'];
			$model->tanggal=gmdate("d-M-Y H:i:s", time()+3600*7);
			$model->stts=0;
			if($model->save())
			{
				Yii::app()->user->setFlash('contact',"Terima kasih telah mengirimkan pesan. Pesan anda akan segera kami moderisasi.");
				$this->refresh();
			}
		}

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}
}
