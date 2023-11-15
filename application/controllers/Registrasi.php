<?php

class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[password_2]');
        $this->form_validation->set_rules('password_2', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('registrasi');
            $this->load->view('template/footer');
        } else {
            $hashed_password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

            $data = array(
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $hashed_password,
                'role_id' => 2,
            );

            $this->db->insert('tbl_user', $data);

            redirect('auth/login');
        }
    }
}
