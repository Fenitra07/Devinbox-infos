<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {
	public function index()
	{
		$this->load->view('sign_in');
	}

	public function process(){
		$username=$this->input->post('username');
		$pass=$this->input->post('pass');
		if($username=='admin' && $pass=='admin'){
			$this->load->view('dashboard');
		}else{
			$data['error']='Nom d\'utilisateur ou mot de passe incorrect';
			$this->load->view('sign_in');
		}
	}

	public function logout(){
		redirect("sign_in");
	}
}
