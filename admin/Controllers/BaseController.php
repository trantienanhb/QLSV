<?php

abstract class BaseController
{
    const VIEW_FOLDER = 'Views';
    const MODEL_FOLDER ='Models';
    /*
     Description : path name :" folder.file.name
     lấy từ sau thư mục view
    */
    protected function view($viewPath , array $data = [])
    {
        foreach ($data as $key => $value)
        {
            $$key  = $value;
        }
        require (self::VIEW_FOLDER .'/' . str_replace('.','/',$viewPath) . '.php');
    }
    protected function loadModel($modelPath)
    {
        require (self::MODEL_FOLDER .'/' . $modelPath . '.php');
    }
}