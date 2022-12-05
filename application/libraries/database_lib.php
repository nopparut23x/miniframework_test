<?php
class Database_lib extends Library
{
    public $db = null;
    public $result = null;
   

    public function __construct($app =null)
    {
        parent::__construct($app);

        $this->connect();
    }

    public function connect()
    {
        $conn = new mysqli('localhost', 'root', '', 'minidb1');
        $conn->set_charset('utf8');

        if ($conn->connect_error) {
            exit('connection Faild:' . $conn->connect_error);
        }

         $this->db = $conn;
    }
    public function query($sql = '')
    {
     $result = $this->db->query($sql);
     $this->result = $result;
     return $this;
    }
    public function result(){

        if($this->result->num_rows > 0 ){
           return $this->result->fetch_all(MYSQLI_ASSOC);

        }
        return [];
    }
}
