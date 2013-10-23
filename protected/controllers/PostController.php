<?php

class PostController extends Controller
{
	public function actions()
    {
        return array(
            'fileUpload'=>array(
                'class'=>'ext.redactorjs.actions.FileUpload',
                'uploadCreate'=>true,
            ),
            'imageUpload'=>array(
                'class'=>'ext.redactorjs.actions.ImageUpload',
                'uploadCreate'=>true,
            ),
            'imageList'=>array(
                'class'=>'ext.redactorjs.actions.ImageList',
            ),
        );
    }
}