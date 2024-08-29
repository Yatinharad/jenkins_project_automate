<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct(){
		parent::__construct();
		//$this->load->model('welcome_model');
		$this->load->helper(array('path'));
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('user_model');
	 }
   
	 //Page Loaders
	public function index()
	{	

		$this->load->view('user/user_header');
		$this->load->view('blog/allblogs');
		$this->load->view('user/footer');
	}
	public function five_things()
	{	
		$this->load->view('user/user_header');
		$this->load->view('blog/five_things');
		$this->load->view('user/footer');
	}
	
	public function blog2()
	{	
		$this->load->view('user/user_header');
		$this->load->view('blog/blog2');
		$this->load->view('user/footer');
	}
	public function blog3()
	{	
		$this->load->view('user/user_header');
		$this->load->view('blog/blog3');
		$this->load->view('user/footer');
	}

	public function blog4()
	{	
		$this->load->view('user/user_header');
		$this->load->view('blog/blog4');
		$this->load->view('user/footer');
	}



	//Actions



    public function logout(){
    	$this->session->unset_userdata('logged_in');
    	$response['status']=true;
        echo json_encode($response);
    }
  
	






}