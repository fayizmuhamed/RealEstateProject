<?php

defined('BASEPATH') OR exit('No direct script access allowed');


if (!function_exists('send_email')) {

    function send_email($mailType = 'text',$to = '', $subject = '', $message = '',$attachment=null) {

        $CI = & get_instance();

        $CI->load->library('email');
        $CI->load->library('encryption');
        $password= $CI->configurations['mailserver_password'];

        $protocol = $CI->configurations['mailserver_protocol'];
        $smtp_host = $CI->configurations['mailserver_url'];
        $smtp_user = $CI->configurations['mailserver_login'];
        $smtp_pass = $CI->encryption->decrypt($password);
        $smtp_port = $CI->configurations['mailserver_port'];
        $starttls = $CI->configurations['mailserver_tls_or_ssl'] == 'yes' ? true : false;

        //or autoload it from /application/config/autoload.php

        $config = Array(
            'protocol' => $protocol,
            'smtp_host' => $smtp_host,
            'smtp_port' => $smtp_port,
            'smtp_user' => $smtp_user,
            'smtp_pass' => $smtp_pass,
            'mailtype' => $mailType,
            'starttls' => $starttls,
            'newline' => "\r\n"
        );

        $CI->email->initialize($config);
        $CI->email->from($smtp_user);
        $CI->email->to($to);
        $CI->email->subject($subject);
        $CI->email->message($message);
        if($attachment){
            
            $CI->email->attach($attachment);
        }
        return $CI->email->send();
    }

}


