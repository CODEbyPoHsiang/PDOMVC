<?php 
class Database{
    protected $host = 'localhost';
    protected $dbname = 'ajax';
    protected $user = 'root';
    protected $password = 'ChungYONLYsec01-5678';

    public function openDbConnection()
    {
        $link = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->user, $this->password);
        return $link;
    }

    public function closeDbConnection(&$link)
    {
        $link = null;
    }
}