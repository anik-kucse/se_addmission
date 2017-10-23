<?php

class Load
{
    public function __construct()
    {
    }

    public function view($fileName, $data = false)
    {

        if($data == true){
            extract($data);
        }
<<<<<<< HEAD
//        var_dump($data);
=======
        //var_dump($data);
>>>>>>> 6e285d0b87c6f8a1cf6f9c274124e58f70936ed0
        include 'app/views/'.$fileName.'.php';
    }

    public function model($modelName){
        include 'app/models/'.$modelName.'.php';
        return new $modelName();
    }


}
