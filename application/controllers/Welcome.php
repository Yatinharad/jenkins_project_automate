<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	

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
		$this->load->model('welcome_model');
	 }
   
	 //Page Loaders
	public function index()
	{	

		$this->load->view('user/header');
		$this->load->view('user/welcome');
		$this->load->view('user/footer');
	}
	
	public function aboutus(){
		
		$this->load->view('user/header');
		$this->load->view('user/about');
		$this->load->view('user/footer');
	}

	public function login(){
		$this->load->helper('url');
		$this->load->view('user/header');
		$this->load->view('user/login');
		$this->load->view('user/footer');
	}
	public function register(){
		$this->load->helper('url');
		$this->load->view('user/header');
		$this->load->view('user/register');
		$this->load->view('user/footer');
	}





	//Actions

	public function doLogin()
  {
      

        $response = array();
        $postData = stripslashes($this->input->post('postdata'));

        $data = json_decode($postData);

       if($this->welcome_model->dologin($data[0]->name,$data[0]->pass))
        {
				 $session_data = array(
                'name' => $data[0]->name,
            );

            // Add user data in session
            //$this->session->set_userdata('logged_in', $session_data);
            $this->session->set_userdata('logged_in',true);
            $response["status"] = true;
            $response["message"] = $session_data;
        }
        else
        {
            $response["status"] = false;
            $response["message"] = "Invalid Email ID or password";
        }
        echo json_encode($response);
    }


    public function logout(){
    	$this->session->unset_userdata('logged_in');
    	$response['status']=true;
        echo json_encode($response);
    }
  
	






	public function adduser(){
  $response = array();
        $postData = stripslashes($this->input->post('postdata'));

        $data = json_decode($postData);  

        $response["status"] = false;

        if($this->welcome_model->dologin($data[0]->name,$data[0]->pass
            )) {

             $response["status"] = true;
        }
        echo json_encode($response);
}

}

