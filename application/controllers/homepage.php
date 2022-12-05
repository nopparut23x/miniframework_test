<?php
class Homepage extends Controller{
 
   
    public function index(){
     
        $data =[];
        $data['title'] ='หน้าเเรก';
        
        $this->app->view('header', $data);
        $this->app->view('nav', $data);
        $this->app->view('homepage', $data);
        $this->app->view('footer', $data);

    }




  
}
