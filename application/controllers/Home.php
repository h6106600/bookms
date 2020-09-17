<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('book');
		$this->load->helper('url');
		session_start();
	}

	public function index()
	{
		$data = $this->book->showNewBook();
		$this->load->view('front/head');
		$this->load->view('front/nav');
		$this->load->view('front/home',['data' => $data]);
		$this->load->view('front/footer');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if(!empty($email) && !empty($password)){
			$sql = "SELECT * FROM member WHERE email = :email and password = :password";
			$sth = $this->db->conn_id->prepare($sql);
			$sth->bindParam(':email',$email);
			$sth->bindParam(':password',$password);
			$sth->execute();
			if($sth->rowCount() > 0){
				$_SESSION['user'] = $email;
				redirect(base_url() .'home/index'); 
			}else{
				echo 'email或密碼錯誤';
			}
		}

		$this->load->view('front/head');
		$this->load->view('front/nav');
		$this->load->view('front/login');
		$this->load->view('front/footer');
	}

	public function logout()
	{
		$_SESSION['user'] = null;
		redirect(base_url() .'home/index'); 
	}

	public function sign_up()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if(!empty($email) && !empty($password)){
			$sql = "SELECT * FROM member WHERE email = :email";
			$sth = $this->db->conn_id->prepare($sql);
			$sth->bindParam(':email',$email);
			$sth->execute();
			if($sth->rowCount() > 0){
				echo '此email已被註冊';
			}else{
				$sql = "INSERT INTO member (email, password) VALUES (:email, :password)";
				$sth = $this->db->conn_id->prepare($sql);
				$sth->bindParam(':email',$email);
				$sth->bindParam(':password',$password);
				$sth->execute();
				redirect(base_url() .'home/index'); 
			}
		}
		$this->load->view('front/head');
		$this->load->view('front/nav');
		$this->load->view('front/sign_up');
		$this->load->view('front/footer');
	}

	public function admin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if(!empty($email) && !empty($password)){
			$sql = "SELECT * FROM admin WHERE email = :email and password = :password";
			$sth = $this->db->conn_id->prepare($sql);
			$sth->bindParam(':email',$email);
			$sth->bindParam(':password',$password);
			$sth->execute();
			if($sth->rowCount() > 0){
				$_SESSION['admin'] = $email;
				redirect(base_url() .'admin/index'); 
			}else{
				echo 'email或密碼錯誤';
			}
		}

		$this->load->view('front/head');
		$this->load->view('front/nav');
		$this->load->view('front/admin');
		$this->load->view('front/footer');
	}
}
