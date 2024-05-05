<?php

class User_m extends CI_Model
{

    function user_insert($create_user)
    {
        $this->db->insert('users', $create_user);
    }

    function user_insert_otp($data_otp)
    {
        $this->db->insert('otp', $data_otp);
    }

    function email_exists($email)
    {
        return $this->db->where('email', $email)->get('users_temp')->num_rows();
    }

    /**
     * user temp
     */

    function get_user_temp($validate_uuid)
    {
        return $this->db->where('uuid', $validate_uuid)->get('users_temp')->row();
    }

    function user_insert_temp($create_user)
    {
        $this->db->insert('users_temp', $create_user);
    }

    function get_otp($uuid)
    {
        return $this->db->where('uuid', $uuid)->get('otp')->row();
    }
}
