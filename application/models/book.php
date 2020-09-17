<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class book extends CI_Model  {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function showNewBook()
    {
        $sql = "SELECT * FROM book order by created_at DESC limit 10;";
		$sth = $this->db->conn_id->prepare($sql);
		$sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
	}

    public function showAll()
    {
        $sql = "SELECT * FROM book";
		$sth = $this->db->conn_id->prepare($sql);
		$sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
	}

}
