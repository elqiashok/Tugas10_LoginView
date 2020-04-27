<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Nama  : Elqi Ashok
// NIM   : 1301184158
// Kelas : IF-42-11

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('View_login');
    }
}
