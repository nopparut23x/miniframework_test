<?php
class Library{
    public $app = null;
    public function __construct($app = null){
        $this->app = $app;
    }
}