<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    public function data()
    {
        $data['title'] = 'Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->get_where('data_daerah', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/data', $data);
            $this->load->view('templates/footer');
        } else {

            $email = $this->input->post('email');
            $lakilaki = $this->input->post('lakilaki');
            $perempuan = $this->input->post('perempuan');
            $kepala_keluarga = $this->input->post('kepala_keluarga');
            $sd = $this->input->post('sd');
            $smp = $this->input->post('smp');
            $sma = $this->input->post('sma');
            $akademi = $this->input->post('akademi');
            $sarjana = $this->input->post('sarjana');

            //check jika ada gambar yang akan diupload

            $this->db->set('lakilaki', $lakilaki);
            $this->db->set('perempuan', $perempuan);
            $this->db->set('kepala_keluarga', $kepala_keluarga);
            $this->db->set('sd', $sd);
            $this->db->set('smp', $smp);
            $this->db->set('sma', $sma);
            $this->db->set('akademi', $akademi);
            $this->db->set('sarjana', $sarjana);
            $this->db->where('email', $email);
            $this->db->update('data_daerah');


            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data has been Updated!</div>');
            redirect('user/data');
        }
    }



    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $profil = $this->input->post('profil');

            //check jika ada gambar yang akan diupload

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . '/assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('profil', $profil);
            $this->db->where('email', $email);
            $this->db->update('user');


            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Profile has been Updated!</div>');
            redirect('user');
        }
    }

    public function changepassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password tak olle padeh bik se abit!</div>');
                    redirect('user/changepassword');
                } else {

                    //Password OK
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Change !</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
