<?php
class Admin_staff_lib extends Library
{
 public function index(){
    $this->app->view('header');
    $this->app->view('nav');
    $this->app->view('admin/staff/index');
    $this->app->view('footer');
 }
}
