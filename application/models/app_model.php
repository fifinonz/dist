<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_model extends CI_Model {

	public function get_female_employees(){

/*// Loading second db and running query.
$CI = &get_instance();
//setting the second parameter to TRUE (Boolean) the function will return the database object.
$this->db2 = $CI->load->database('db2', TRUE);*/

		$query = $this->db->query('SELECT * FROM `employment_logs`');

		foreach ($query->result() as $key) {
			echo $key->empid;
		}
	}
}
