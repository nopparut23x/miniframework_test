<?php
class Auth extends Controller
{

   public function __construct($app = null)
   {
      parent::__construct($app);
      $this->check_is_login();
   }

   private function check_is_login()
   {
      if ($this->app->auth_lib->is_login()) {
         $this->app->common_lib->rediect('/');
      }
   }
   public function index()
   {
      $email = $this->app->input_lib->post('email');
      $password = $this->app->input_lib->post('password');

      if ($this->app->auth_lib->login($email, $password)) {
         $this->app->common_lib->redirect('/');
      } 
      // else {
      //    echo 'login fill!!';
      // }
    

      $data = [];
      $data['title'] = 'เข้าสู่ระบบ';
      $data['email'] = $email;
      $data['password'] = $password;

      $this->app->view('header', $data);
      $this->app->view('auth/login', $data);
      $this->app->view('footer', $data);
   }
   public function logout()
   {
      $this->app->auth_lib->logout();
      $this->app->common_lib->redirect('/');
   }
}
