<?php
class App
{
    public $data =null;
    public function start($controller_name = 'homepage', $method ="index", $params= [])
    {
        $this->init_base();
        $this->init_library();

        // if(isset($_GET['action'])){
        //     $method =$_GET['action'];
        // }else{
        //     $method = 'index';
        // }

        $method = ( isset($_GET['action']))? $_GET['action']: $method;
       
        $this->init_controller($controller_name, $method, $params);
    }

    public function library($library_name = '')
    {
        require_once "application/libraries/{$library_name}.php";
        $class_name = ucfirst($library_name);
        $obj = new $class_name($this);
        $this->$library_name = $obj;
    }


    private function init_controller($controller_name = "", $method="", $params= [])
    {
        require_once "application/controllers/{$controller_name}.php";
        $class_name = ucfirst($controller_name);
        $obj = new $class_name($this);
        call_user_func_array([$obj, $method], $params);
    }

    public function view($view_name = '' , $data = null)
    {
        $this->data = $data;
        require_once "application/views/{$view_name}.php";
        
    }

    private function init_base (){
        require_once "application/core/controller.php";
        require_once "application/core/library.php";
    }
    private function init_library()
    {
        $this->library('common_lib');
        $this->library('input_lib');
        $this->library('session_lib');
        $this->library('database_lib');

        $this->library('admin_customer_lib');
        $this->library('auth_lib');
        $this->library('home_lib');
    }
}
