<?php

class Log_m extends CI_Model
{

    function otp_log($data_log)
    {
        $this->db->insert('log_otp', $data_log);
    }
}
