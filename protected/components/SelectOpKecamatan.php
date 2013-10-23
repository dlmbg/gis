<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpKecamatan extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = KecamatanModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_kecamatan==$this->id_select)
            {
                echo "<option value='".$item->id_kecamatan."' selected>".$item->nama_kecamatan."</option>";
            }
            else
            {
                echo "<option value='".$item->id_kecamatan."'>".$item->nama_kecamatan."</option>";
            }
        }
        parent::init();
    }
}