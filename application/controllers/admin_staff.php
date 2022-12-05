<?php
class Admin_staff extends Controller
{
 public function index(){
        
   $data =[];
   $data['title'] ='จัดการร้านอาหาร';

    $this->app->view('header',$data);
    $this->app->view('nav');
    $this->app->view('admin/staff/index');
    $this->app->view('footer');
 }
}
