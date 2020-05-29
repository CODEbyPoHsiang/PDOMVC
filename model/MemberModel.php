<?php
class MemberModel{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function getAllmember()
    {
        $link = $this->db->openDbConnection();

        $result = $link->query('SELECT * FROM member ORDER BY id');

        $member = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $member[] = $row;
        }
        $this->db->closeDbConnection($link);

        
		return $member;
    }

    public function getMemberById($id)
    {
        $link = $this->db->openDbConnection();

        $query = 'SELECT * FROM member WHERE  id=:id';
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

        $query = 'INSERT INTO member (name, ename, phone, email, sex, city, township, postcode, address, notes, created_at, updated_at) VALUES (:name, :ename, :phone, :email, :sex, :city, :township, :postcode, :address, :notes,now(),now())';
        $statement = $link->prepare($query);
        $statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $statement->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
        $statement->bindValue(':ename', $_POST['ename'], PDO::PARAM_STR);
        $statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $statement->bindValue(':sex', $_POST['sex'], PDO::PARAM_STR);
        $statement->bindValue(':city', $_POST['city'], PDO::PARAM_STR);
        $statement->bindValue(':township', $_POST['township'], PDO::PARAM_STR);
        $statement->bindValue(':postcode', $_POST['postcode'], PDO::PARAM_STR);
        $statement->bindValue(':address', $_POST['address'], PDO::PARAM_STR);
        $statement->bindValue(':notes', $_POST['notes'], PDO::PARAM_STR);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function update($id)
    {
        $link = $this->db->openDbConnection();

        $query = "UPDATE member SET name = :name, phone = :phone, ename = :ename, email = :email, sex = :sex, city = :city, township = :township, postcode = :postcode, address = :address, notes = :notes,updated_at = now() WHERE id = :id";
        $statement = $link->prepare($query);
        $statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $statement->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
        $statement->bindValue(':ename', $_POST['ename'], PDO::PARAM_STR);
        $statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $statement->bindValue(':sex', $_POST['sex'], PDO::PARAM_STR);
        $statement->bindValue(':city', $_POST['city'], PDO::PARAM_STR);
        $statement->bindValue(':township', $_POST['township'], PDO::PARAM_STR);
        $statement->bindValue(':postcode', $_POST['postcode'], PDO::PARAM_STR);
        $statement->bindValue(':address', $_POST['address'], PDO::PARAM_STR);
        $statement->bindValue(':notes', $_POST['notes'], PDO::PARAM_STR);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection($link);
    }

    public function delete($id)
    {
        $link = $this->db->openDbConnection();

        $query = "DELETE FROM member WHERE id = :id";
        $statement = $link->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        
        $this->db->closeDbConnection($link);
    }
}