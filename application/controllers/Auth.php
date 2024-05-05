<?php

class Auth extends CI_Controller
{


    function registration()
    {
        $utrx     = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $generateUUID  = substr(str_shuffle($utrx), 0, 8);
        $uuid           = $generateUUID;
        $fullname       = $this->input->post('fullname', TRUE);
        $phone          = $this->input->post('phone', TRUE);
        $email          = $this->input->post('email', TRUE);
        $password       = $this->input->post('password', TRUE);
        $is_approve     = $this->input->post('is_approve', TRUE);
        $created        = date('Y-m-d h:i:s');

        $check_email = $this->User_m->email_exists($email);

        if ($check_email > 0) {
            $this->session->set_flashdata('failed', 'Email Anda Sudah Terdaftar');
            redirect('auth/welcome');
        } else {
            $salt = array('cost' => 10);
            $encryptPassword = password_hash($password, PASSWORD_BCRYPT, $salt);
            $create_user = array(
                'uuid'          => $uuid,
                'roleid'        => 2,
                'fullname'      => $fullname,
                'phone'         => $phone,
                'email'         => $email,
                'password'      => $encryptPassword,
                'is_approve'    => $is_approve,
                'created'       => $created
            );

            if ($create_user) {
                /**
                 * otp code
                 */


                $otp_code = substr(str_shuffle('123456789'), 0, 6);
                $data_otp = array(
                    'uuid'  => $uuid,
                    'phone' => $phone,
                    'otp'   => $otp_code,
                );
                $message_to_user = 'Halo, ' . $fullname . ' Berikut Kode OTP anda ' .  $otp_code;
                $this->common_lib->notification_otp_register($phone, $message_to_user);
                $this->User_m->user_insert_otp($data_otp);

                // insert data user
                $this->User_m->user_insert_temp($create_user);


                $data['validate_uuid']       = $uuid;
                $data['validate_roleid']     = 2;
                $data['validate_fullname']   = $fullname;
                $data['validate_phone']      = $phone;
                $data['validate_email']      = $email;
                $data['validate_password']   = $encryptPassword;
                $data['validate_is_approve'] = $is_approve;
                $data['validate_created']    = $created;
                $data['content']    = "app/auth/otp";
                $this->load->view('layouts/main', $data);
            } else {
                $this->session->set_flashdata('failed', 'Pendaftaran Anda Gagal');
                redirect('auth/welcome');
            }
        }
    }

    function process_otp()
    {
        /**
         * otp input
         */

        $otp1 = $this->input->post('otp1', TRUE);
        $otp2 = $this->input->post('otp2', TRUE);
        $otp3 = $this->input->post('otp3', TRUE);
        $otp4 = $this->input->post('otp4', TRUE);
        $otp5 = $this->input->post('otp5', TRUE);
        $otp6 = $this->input->post('otp6', TRUE);

        $completeotp = $otp1 . $otp2 . $otp3 . $otp4 . $otp5 . $otp6;

        $validate_uuid = $this->input->post('validate_uuid', TRUE);
        $validate_data  = $this->User_m->get_user_temp($validate_uuid);
        $validate_otp   = $this->User_m->get_otp($validate_uuid);


        if ($completeotp == $validate_otp->otp) {
            $data['validate_uuid']       = $validate_data->uuid;
            $data['validate_roleid']     = 2;
            $data['validate_fullname']   = $validate_data->fullname;
            $data['validate_phone']      = $validate_data->phone;
            $data['validate_email']      = $validate_data->email;
            $data['validate_password']   = $validate_data->password;
            $data['validate_is_approve'] = $validate_data->is_approve;
            $data['validate_created']    = $validate_data->created;
            $create_user = array(
                'uuid'          => $validate_data->uuid,
                'roleid'        => $validate_data->roleid,
                'fullname'      => $validate_data->fullname,
                'phone'         => $validate_data->phone,
                'email'         => $validate_data->email,
                'password'      => $validate_data->password,
                'is_approve'    => $validate_data->is_approve,
                'is_status'     => 1,
                'created'       => $validate_data->created
            );
            $this->User_m->user_insert($create_user);
            $this->session->set_flashdata('success', 'Pendaftaran Anda Berhasil');
            redirect('auth/welcome');
        } else {
            $data['validate_uuid']       = $validate_data->uuid;
            $data['validate_roleid']     = 2;
            $data['validate_fullname']   = $validate_data->fullname;
            $data['validate_phone']      = $validate_data->phone;
            $data['validate_email']      = $validate_data->email;
            $data['validate_password']   = $validate_data->password;
            $data['validate_is_approve'] = $validate_data->is_approve;
            $data['validate_created']    = $validate_data->created;
            $this->session->set_flashdata('failed', 'OTP anda salah');
            $data['content'] = "app/auth/otp";
            $this->load->view('layouts/main', $data);
        }
    }
}
