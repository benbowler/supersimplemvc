<?php // model

class Model
{
    protected $mysqli;
    public function __contruct()
    {

    }
    public function get()
    {
        $this->_connect();
        $result = $this->mysqli->query("SELECT * FROM table", MYSQLI_USE_RESULT);
        return $result->fetch_array(); // fetch_object?
        $this->_close();
    }
    public function test()
    {
        $this->_connect();
        return 'Success... ' . $this->mysqli->host_info . "\n";
        $this->_close();
    }

    private function _connect()
    {
        $this->mysqli = new mysqli('localhost', 'root', 'root', 'dnbtv');

        if ($this->mysqli->connect_error) {
            die('Connect Error (' . $this->mysqli->connect_errno . ') '
                . $this->mysqli->connect_error);
        }
    }
    private function _close()
    {
        $this->mysqli->close();
    }
}