<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {
	public function index(){
		$this->load->view('inc/head');
		$this->load->view('inc/navigation');
		$this->load->view('index');
	}

	public function signin(){
		$this->load->view('sign_in');
	}

	public function process(){
		$username=$this->input->post('username');
		$pass=$this->input->post('pass');
		if($username=='admin' && $pass=='admin'){
			$this->load->model('info');
			$data=$this->info->getAll();
			$this->load->view('dashboard',['data'=>$data]);
		}else{
			$data['error']='Nom d\'utilisateur ou mot de passe incorrect';
			$this->load->view('sign_in');
		}
	}

	public function logout(){
		redirect("Main_controller/signin");
	}

	public function post(){
		$this->load->view('inc/head');
		$this->load->view('inc/navigation');
		$this->load->view('post');
	}

	public function contact(){
		$this->load->view('inc/head');
		$this->load->view('inc/navigation');
		$this->load->view('contact');
	}

	public function dashboard(){
		$this->load->model('info');
		$data=$this->info->getAll();
		$this->load->view('dashboard',['data'=>$data]);
	}

	public function insertInfo(){
		$data=array(
			'i_titre'=>$this->input->post('i_titre'),
			'i_date_pub'=>date("Y-m-d")
		);
		$this->load->model('Info');
		$this->Info->insertion($data);
		
	}

	public function modification($id){
		$this->load->model('info');
		$this->info->modification($id);
	}

	public function editInfo(){
		$data=array(
			'i_titre'=>$this->input->post('i_titre'),
			'i_date_pub'=>date("Y-m-d")
		);
		$id=$this->input->post('i_id');
		$this->load->model('Info');
		$this->Info->maj($data,$id);

	}

	public function suppression($id){
		$this->load->model('info');
		$this->info->supprimer($id);
	}

	public function nouveau(){
		$this->load->view("dashboard_insert");
	}


}
