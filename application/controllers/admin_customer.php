<?php
class Admin_customer extends Controller
{
    public function index()
    {

        $data = [];
        $data['title'] = 'จัดการสมาชิก';
        $this->app->view('header', $data);
        $this->app->view('nav');
        $this->app->view('admin/user/index');
        $this->app->view('footer');
    }
}
