<?php

class Common_lib
{

    public function __get($var)
    {

        return get_instance()->$var;
    }

    function notification_otp_register($to, $message_to_user)
    {
        $userkey = '64a1b42fd084';
        $passkey = 'bee6fffef7c8bc00aca5d675';
        $telepon = $to;
        $message = $message_to_user;
        $url = 'https://console.zenziva.net/wareguler/api/sendWA/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $telepon,
            'message' => $message
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);


        $messageId = $results['messageId'];
        $to_user = $results['to'];
        $status_user = $results['status'];
        $text_user = $results['text'];
        $created = date('Y-m-d H:i:s');

        $data = array(
            'messageId' => $messageId,
            'to_message' => $to_user,
            'status_message' => $status_user,
            'message' => $text_user,
            'created' => $created,

        );

        $this->Log_m->otp_log($data);

        return true;
    }
}
