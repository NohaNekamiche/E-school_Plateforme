<?php


class Router{
    private $_ctrl;
    private $_view;
    public function routeReq(){
        try{
            spl_autoload_register(function($class){
                require_once('Model/'.$class.'.php');
            })
        }
        catch(Exception $e){

        }
    }
}
?>