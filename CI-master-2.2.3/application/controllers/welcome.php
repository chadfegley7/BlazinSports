<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$this->load->view('index');
	}

	public function pics(){
		$this->load->view('pics');
	}

	public function register(){
		$this->load->view('register');
	}
	public function login(){
		$this->load->view('login');
	}
	public function new_user(){
		$this->load->model("Login");
		$password = $this->input->post('password');
		$encrypted_password = md5($password);
		$user = array(
			"first_name" => $this->input->post('first_name'),
			"last_name" => $this->input->post('last_name'),
			"email" => $this->input->post('email'),
			"password" => $encrypted_password
			);
		$add_user = $this->Login->add_user($user);
		$this->load->view('index', $user);
	}

	public function process_login(){
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->load->model("Login");
		$users = $this->Login->get_user($email);
		$user = array(
			'users_id' => $users['id'],
			'users_email' => $users['email'],
			'users_name' => $users['first_name']. ' ' .$users['last_name'],
			'is_logged_in' => TRUE
		);
		$this->session->set_userdata($user);
		$this->load->view('index', $user);
	}

	public function facebook_login(){
		$this->load->model("Login");
		$user = array(
			'clientID' => $this->input->post('clientID'),
			'accessToken' => $this->input->post('accessToken'),
			'email' => $this->input->post('email'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'is_logged_in' => TRUE
			);
		$add_user = $this->Login->add_facebook_user($user);
		$this->session->set_userdata($user);
		redirect('/welcome/get_messages', $user);
	}
	function new_message(){
		$this->load->model("Login");
		$message = array(
			"message" => $this->input->post('message'),
			"user_id" => $this->session->userdata('users_id')
			);
		$add_message = $this->Login->add_message($message);
		$messages = $this->Login->get_messages();
		$this->load->view('stories', array('messages' => $messages));
	}

	function get_messages(){
		$this->load->model("Login");
		$messages = array(
			"messages" => $this->Login->get_messages()
			);
		$this->load->view('stories', $messages);
	}

	function user_pics(){
		$this->load->model("Login");
		$pic = array(
			"pic" => $this->input->post('file'),
			"user_id" => $this->session->userdata('users_id')
			);
		$add_pic = $this->Login->add_pic($pic);
		$pics = $this->Login->get_pics();
		$this->load->view('pics', array('pics' => $pics));
	}

	public function stories(){
		$this->load->view('stories');
	}
	public function gallery(){
		$this->load->view('gallery');
	}

	public function logout(){
		$user_session_data = $this->session->all_userdata();
		$this->session->unset_userdata("users_id");
		$this->session->unset_userdata("users_email");
		$this->session->unset_userdata("users_name");
		$this->session->unset_userdata("is_logged_in");
		$this->session->sess_destroy();
		$this->load->view('index');
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */