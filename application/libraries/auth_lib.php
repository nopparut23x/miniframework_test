<?php
class Auth_lib extends Library
{
    public function is_login(){
        if ($this->app->session_lib->get('is_login')) {
            return true;
         }
         return false;
    }
    public function login($email = '', $password = '')
    {
        $hash_password = md5($password);


        $sql = "SELECT * FROM `users` WHERE `email`='{$email}' AND `password` ='{$hash_password}' ";
        $query = $this->app->database_lib->query($sql);
        $items = $query->result();



        if (count($items)) {
            $this->set_session_login($items[0]);
            return true;
        }
        return false;
    }
    public function logout()
    {
    
        $this->app->session_lib->destroy();

    }

    private function set_session_login($item = null)
    {

        $this->app->session_lib->set('is_login', true);
        $this->app->session_lib->set('id', $item['id']);
        $this->app->session_lib->set('email', $item['email']);
        $this->app->session_lib->set('user_type', $item['user_type']);
        $this->app->session_lib->set('status', $item['status']);
    }
}
