<?php

class Profile_model  extends CI_Model  {

public function get_table(String $table_name) {

    $output = $this->db->get($table_name)->result_array();

    return $output;
}

}
