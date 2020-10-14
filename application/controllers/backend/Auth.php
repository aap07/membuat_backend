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
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_message('required', '%s Tidak Boleh Kosong');
        $this->form_validation->set_error_delimiters('<small class="text-danger pl-1">', '</small>');
        if ($this->form_validation->run() == false) {
            $this->template_auth->load('backend/templates/auth/template', 'backend/auth/login', $data);
        }
    }

    public function register()
    {
        $data['title'] = "Register";
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Your Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
        $this->form_validation->set_message(
            array(
                'required' => '%s Tidak Boleh Kosong',
                'min_length' => '%s Terlalu pendek, minimal 8 karakter',
                'matches' => '%s Tidak Sesuai'
            )
        );
        $this->form_validation->set_error_delimiters('<small class="text-danger pl-1">', '</small>');
        if ($this->form_validation->run() == false) {
            $this->template_auth->load('backend/templates/auth/template', 'backend/auth/regis', $data);
        }
    }
}
