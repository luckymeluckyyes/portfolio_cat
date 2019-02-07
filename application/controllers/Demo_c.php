<?php 

class Demo_c extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('demo_m');
	}

	public function index() {

		$data['users'] = $this->demo_m->get_users();

		$data['users1'] = $this->demo_m->get_users1();

		$this->load->view('index', $data);
	}

	public function label($id) {

		$a = $this->demo_m->label_m($id);

		$a = $this->demo_m->label_m1($id);

		$this->load->view('index', $data);
	}
}

 ?>