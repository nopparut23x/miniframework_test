<?php
class Session_lib extends Library
{
    public function __construct($app = null)
    {
        parent::__construct($app);
        session_start();
    }

    public function get($key = '')
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return '';
        }
        return $_SESSION[$key];
    }
    public function set($key = '', $value = '')
    {
        $_SESSION[$key] = $value;
    }

    public function destroy($key = '')
    {
        if (empty($key)) {
            foreach ($_SESSION as $k => $v) {
                unset($_SESSION[$k]);
            }
        }
        unset($_SESSION[$key]);
    }
}
