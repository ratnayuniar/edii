<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    function cek_login($data)
    {
        $sql = $this->db->query("SELECT * FROM user WHERE email = '".$data['email']."' AND password = '".$data['password']."'
        ");
        return $sql;
    }

    function simpanUser($data)
    {
        $sql = $this->db->query("INSERT INTO user (email,password,level) VALUES ('".$data['email']."', '".$data['password']."','1') ");
        return $sql;
    }

    // function cek_login($table,$where){		
	// 	return $this->db->get_where($table,$where);
	// }
}

?>