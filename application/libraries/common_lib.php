<?php
class Common_lib extends Library
{
    public function redirect($url ='/'){
        header('Location:/',$url);
    }
}