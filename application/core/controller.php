<?php
class Controller{
    public $app = null;
    public function __construct($app=null){
        $this->app = $app;
    }
}