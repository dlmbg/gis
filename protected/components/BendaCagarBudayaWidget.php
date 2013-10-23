<?php

class BendaCagarBudayaWidget extends CWidget {

    public function run() {

		$criteria = new CDbCriteria();
		$criteria->order = 'id_benda_cagar_budaya DESC';
		$criteria->limit = 5;
        $dt = BendaCagarBudayaModel::model()->findAll($criteria);

        $this->render('benda_cagar_budaya', array(
            'dt'=>$dt   
        ));
    }
}