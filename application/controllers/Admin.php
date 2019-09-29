<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = new stdClass();

		$data->users = $this->db->query("SELECT users.*, reg_users.username as reseller FROM users LEFT JOIN reg_users on users.member_id = reg_users.id ")->result();
		$this->load->view('admin/index', $data);
	}


	public function customers() {

		$data = new stdClass();
		$data->users = $this->db->query("SELECT users.*, reg_users.username as reseller FROM users LEFT JOIN reg_users on users.member_id = reg_users.id ")->result();
		$this->load->view('admin/customers', $data);
	}

	public function streams() {

		$data = new stdClass();
		$data->users = $this->db->query("SELECT * from streams")->result();
		$this->load->view('admin/streams', $data);
	}



}
