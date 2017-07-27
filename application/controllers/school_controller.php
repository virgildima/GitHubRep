<?php
class school_controller extends CI_Controller {
	function __construct() {
		parent::__construct ();
	}
	function index() {
		// Loading view
		$this->load->view ( 'school_view' );
		// If you have post data...
		if (! empty ( $_POST )) {
			$name = $this->input->post ( 'name' );
			$email = $this->input->post ( 'emailaddress' );
			$school = $this->input->post ( 'school' );
			
			// Loading model
			$this->load->model ( 'school_model' );
			
			$data1 = array (
					'name' => $name,
					'emailaddress' => $email 
			);
			$data2 = array (
					'school' => $school 
			);
			// // Calling model
			$this->school_model->insert ( $data1, $data2 );
		}
	}
}

?>
