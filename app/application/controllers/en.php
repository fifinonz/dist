<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class En extends CI_Controller {

	private $data;

	function __construct(){
		parent::__construct();
	}

	#for login modules | portal display
	public function _load_view(){
		$this->load->view('inc/tmp',$this->data);
	}

	#for default pages
	public function _load_pages(){
		$this->load->view('inc/_tmp',$this->data);
	}

	public function index()
	{
		$this->data['title'] 	=  '';
		$this->data['content'] 	=  '';

		$this->_load_view();
	}

	public function signin()
	{
		$this->data['title'] 	=  '';
		$this->data['content'] 	=  '';

		$this->_load_view();
	}
	public function signup()
	{
		$this->data['title'] 	=  '';
		$this->data['content'] 	=  '';

		$this->_load_view();
	}
	public function signrs()
	{
		#logic to resolve signin
	}
	public function signuprs()
	{
		#logic to resolve signup
	}

	public function contactus()
	{
		$this->data['title'] 	=  'Contact us Page';
		$this->data['content'] 	=  'contactus';

		$this->_load_view();
	}

	public function about(){
		$this->data['title'] 	=  'About us page';
		$this->data['content'] 	=  'aboutus';

		$this->_load_view();
	}
}

/* End of file en.php */
/* Location: ./application/controllers/en.php */
