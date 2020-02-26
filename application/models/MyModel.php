<?php

class MyModel extends CI_Model {

	public function add($roll,$name)
	{
		$data = array(
        'roll' => $roll,
        'name' => $name
      
			);

		$this->db->insert('users', $data);
	}

}

?>