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

	public function index(){
		#call a specific function
		$this->home();
	}

	#Default homepage
	public function home(){
		$this->data['title'] 	=  '';
		$this->data['content'] 	=  'home';

		$this->_load_view();
	}

	public function signin(){
		$this->data['title'] 	=  '';
		$this->data['content'] 	=  'signin';

		$this->_load_view();
	}
	public function signup(){
		$this->data['title'] 	=  '';
		$this->data['content'] 	=  'signup';

		$this->_load_view();
	}
	public function signrs(){
		#logic to resolve signin
		$config = array(
			array(
				'label' => '',
				'field' => '',
				'rules' => ''
			),
			array(
				'label' => '',
				'field' => '',
				'rules' => ''
			),
			array(
				'label' => '',
				'field' => '',
				'rules' => ''
			)
		);

		$this->form_validation->set_rules($config)

		if($this->form_validation->run() == true){
			#Do something when validation is passed
		} else {}
	}
	public function signuprs(){
		#logic to resolve signup
	}

	public function contactus()	{
		$this->data['title'] 	=  'Contact us Page';
		$this->data['content'] 	=  'contactus';

		$this->_load_view();
	}

	public function about(){
		$this->data['title'] 	=  'About us page';
		$this->data['content'] 	=  'aboutus';

		$this->_load_view();
	}

	#mailer function shell - uses the ci mailer modules
	#send mail
	public function mailer($studentname,$email){

		$config = array(
			'mailtype' => '',
			'protocol'	=>'',
			'smtp_host'	=>'',
			'smtp_post'	=>'',
			'smtp_user'=>'',
			'smtp_pass'=>'',
		);

		$this->load->library('email', $config);

		#quack stuff :(
		$this->email->set_newline("\r\n");

		$this->email->from('','');
		$this->email->reply_to('','');
		$this->email->to($email,$studentname);
		$this->email->subject('');
		$this->email->message('sample message');

		if($this->email->send()){
			#message if mail is sent
		} else {
			#what happens if mail is not sent ?
		}
	}
}

/* End of file en.php */
/* Location: ./application/controllers/en.php */
