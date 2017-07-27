<?php
class school_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}
	public function insert($data1, $data2) {
		$this->db->trans_start ();
		
		$sql1 = "INSERT INTO members(name,emailaddress)
            VALUES (?,?)";
		
		$this->db->query ( $sql1, $data1 );
		
		
		$sql2 = "INSERT INTO schools(school)
		VALUES (?)";
		$this->db->query ( $sql2, $data2 );
				
		$this->db->trans_complete ();
				
		return $this->db->insert_id ();
			
	}
}
?>