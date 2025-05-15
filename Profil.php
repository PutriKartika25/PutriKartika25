<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
    public function index() {
        $data['title'] = 'Profil';
        $data['content'] = 'pages/profil';
        $this->load->view('layouts/layout', $data);
    }
}
