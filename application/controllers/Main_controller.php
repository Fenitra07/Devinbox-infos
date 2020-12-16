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
		$this->load->view('dashboard');
	}
}
