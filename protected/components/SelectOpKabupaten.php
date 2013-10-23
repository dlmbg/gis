<?php

Yii::import('zii.widgets.CMenu', true);

class SelectOpKabupaten extends CMenu
{
    public $id_select;
    public function init()
    {
        $items = KabupatenModel::model()->findAll();

        foreach ($items as $item)
        {
            if($item->id_kabupaten==$this->id_select)
            {
                echo "<option value='".$item->id_kabupaten."' selected>".$item->kabupaten."</option>";
            }
            else
            {
                echo "<option value='".$item->id_kabupaten."'>".$item->kabupaten."</option>";
            }
        }
        parent::init();
    }
}