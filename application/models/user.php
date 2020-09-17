<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model  {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function showAll()
    {
        $sql = "SELECT * FROM member";
		$sth = $this->db->conn_id->prepare($sql);
		$sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
	}

}
