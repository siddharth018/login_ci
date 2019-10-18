<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}
	public function logincheck()
    {
        if (isset($_SESSION['email'])) {
           return true;
        } else {
            redirect('login');
        }
    }
	public function index()
	{
		$this->load->view('home/login');
	}
	public function register()
	{
		$this->load->view('home/register');
	}
	public function user_store()
	{
		$blogs = new UserModel;
		$blogs->insert_user();
		redirect(base_url('login'));
	}
	public function userDetails_store()
	{
		$blogs = new UserModel;
		$blogs->userDetails_store();
		redirect(base_url('dashboard'));
	}
	public function user_login_check()
    {
        $data   = array(
            'Email' => $this->input->post('Email'),
            'Pwd' => $this->input->post('Pwd')
        );
        $result = $this->UserModel->user_login_check($data);
        if ($result == TRUE) {
            $this->session->set_userdata(array(
                'email' => $data['Email']
            ));
            $this->session->userdata('email');
            redirect("dashboard");
        } else {
            redirect('login');
        }
    }
	public function dashboard()
	{
		$this->logincheck();
		$this->load->view('admin/index');
	}
	public function userDeatilsList()
	{
		$this->logincheck();
		$result['data'] = $this->UserModel->userDeatilsList();
		$this->load->view('admin/list',$result);
	}
	 public function user_edit()
    {
    	$this->logincheck();
        $id = $_GET['id'];
        $result['data'] = $this->UserModel->user_edit($id);
        $this->load->view('admin/user_edit', $result);
    }
	 public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    public function udpate_userDetails($id)
	{
		$blogs = new UserModel;
		$blogs->udpate_userDetails($id);
		redirect(base_url('user_list'));
	}
}
