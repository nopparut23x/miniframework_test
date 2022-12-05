<?php
class Home_lib extends Library {

    public function get_item()
    {
    $item =[];
    $item ['firstname'] ='nopparut';
    $item ['lastname'] ='ball';
    return $item;
    }
    public function check_login(){
       
        $this->app->auth_lib->login();

    }




}