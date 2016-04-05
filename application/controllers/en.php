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

	public function index(){
		$this->home();
	}

	#Default homepage
	public function home(){
		$this->data['title'] 		=  'Distributed Database Sys';
		$this->data['content'] 	=  'home';

		$this->_load_view();
	}

	public function processor(){
		#process queries and return results
	}

	public function values(){
		$this->data['title'] 		=  'Distributed Database Sys';
		$this->data['content'] 	=  'results';

		$this->_load_view();
	}
}

/* End of file en.php */
/* Location: ./application/controllers/en.php */
