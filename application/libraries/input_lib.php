<?php
class Input_lib extends Library {
   
    public function post($key = ''){
        if (isset($_POST[$key])) {
        //    $value = $_POST['$key'];

        //     return $value;
        return $_POST[$key];
        }else
         {
            return '';
        }
      
    }
    }




