<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home1 extends CI_Controller {

public function index()
{
	//echo "Hello World";
	$this->load->view('students');
}

public function add_students()
{
	$roll = $this->input->post('roll');
	$name = $this->input->post('name');

	//echo "$roll <br/> $name";
	//$this->load->library('database');

	$this->load->model('MyModel');

	$this->MyModel->add($roll,$name);

	echo "Record inserted";
}

}
?>