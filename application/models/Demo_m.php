<?php 

class Demo_m extends CI_Model {

	public function __construct() {

		parent::__construct();
	}

	public function get_users($id = null) {

		if($id!=null) {

			$sql = $this->db->where('id', $id)->get('demo');
		} else {

			$sql = $this->db->query('SELECT * FROM demo');
			$sql = $this->db->get('demo');
		}

		$res = $sql->result_array();
		return $res;
	}

	public function label_m($id) {

		$this->db->where('id', $id);
		$this->db->get('demo');
		return TRUE;
	}

	public function get_users1($id = null) {

		if($id!=null) {

			$sql = $this->db->where('id', $id)->get('test');
		} else {

			$sql = $this->db->query('SELECT * FROM test');
			$sql = $this->db->get('test');
		}

		$res = $sql->result_array();
		return $res;
	}

	public function label_m1($id) {

		$this->db->where('id', $id);
		$this->db->get('test');
		return TRUE;
	}
}

 ?>