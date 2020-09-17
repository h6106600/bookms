<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('book');
		$this->load->model('user');
		$this->load->helper('url');
		session_start();
	}

	public function index(){

		if(empty($_SESSION['admin'])){
			redirect(base_url() .'home/index'); 
			return;
		}

		$this->load->view('admin/head');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}

	public function logout(){
		
		unset($_SESSION['admin']);
		redirect(base_url() .'home/index'); 
	}

	public function user(){

		$data = $this->user->showAll();

		$this->load->view('admin/head');
		$this->load->view('admin/user',['data' => $data]);
		$this->load->view('admin/footer');
	}

	public function all_book(){

		//借閱書籍 start
		$borrow_name = $this->input->post('borrow_name');
		$borrow_number = $this->input->post('borrow_number');
		if($borrow_name && $borrow_number){
			$sql = "UPDATE book SET borrow_status='1', borrow_time=NOW(),borrow_name=:borrow_name WHERE id=:borrow_number";
			$sth = $this->db->conn_id->prepare($sql);
			$sth->bindParam(':borrow_name',$borrow_name);
			$sth->bindParam(':borrow_number',$borrow_number);
			$sth->execute();
		}
		//借閱書籍 end

		$sql = "SELECT * FROM book WHERE borrow_status = 0";
		$sth = $this->db->conn_id->prepare($sql);
		$sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		$this->load->view('admin/head');
		$this->load->view('admin/all_book',['data' => $data]);
		$this->load->view('admin/footer');
	}

	public function borrowed_book(){
		//還書 start
		$return_number = $this->input->post('return_number');
		if($return_number){
			$sql = "UPDATE book SET borrow_status='0', borrow_time='0',borrow_name='' WHERE id=:return_number";
			$sth = $this->db->conn_id->prepare($sql);
			$sth->bindParam(':return_number',$return_number);
			$sth->execute();
		}
		//還書 end
		
		$data = $this->book->showAll();
		$this->load->view('admin/head');
		$this->load->view('admin/borrowed_book',['data' => $data]);
		$this->load->view('admin/footer');
	}
	
}