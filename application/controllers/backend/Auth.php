<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $data['title'] = "Login";
        $this->template_auth->load('backend/templates/auth/template', 'backend/auth/login', $data);
    }

    public function register()
    {
        $data['title'] = "Register";
        $this->template_auth->load('backend/templates/auth/template', 'backend/auth/regis', $data);
    }
}
