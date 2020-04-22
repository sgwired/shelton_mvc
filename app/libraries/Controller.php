<?php

/**
 * Base Controller 
 * Loads models and views
 */

class Controller
{
    // Load model 
    public function model($model)
    {
        // if(file_exists('../app/views/' . $model . 'php')){
        //     require_once '../app/models/' . $model . '.php';
        //     return new $model();
        // } else {
        //     die('Model does not exists');
        // }
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    // Load view and data as array
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die('View does not exists');
        }
    }
}
