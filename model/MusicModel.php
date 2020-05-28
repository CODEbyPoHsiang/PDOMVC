<?php
class MusicModel{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function getAllMusic()
    {
        $link = $this->db->openDbConnection();

        $result = $link->query('SELECT * FROM music ORDER BY id');

        $music = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $music[] = $row;
        }
        $this->db->closeDbConnection($link);

        
		return $music;
    }

    public function getMusicById($id)
    {
        $link = $this->db->openDbConnection();

        $query = 'SELECT * FROM music WHERE  id=:id';
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $this->db->closeDbConnection($link);

        return $row;
    }
	
    public function insert()
    {
        $link = $this->db->openDbConnection();

        $query = 'INSERT INTO music (name, phone, ename, email) VALUES (:name, :phone, :ename, :email)';
        $statement = $link->prepare($query);
        $statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $statement->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
        $statement->bindValue(':ename', $_POST['ename'], PDO::PARAM_STR);
        $statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function update($id)
    {
        $link = $this->db->openDbConnection();

        $query = "UPDATE music SET name = :name, phone = :phone, ename = :ename, email = :email WHERE id = :id";
        $statement = $link->prepare($query);
        $statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $statement->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
        $statement->bindValue(':ename', $_POST['ename'], PDO::PARAM_STR);
        $statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function delete($id)
    {
        $link = $this->db->openDbConnection();

        $query = "DELETE FROM music WHERE id = :id";
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }
}