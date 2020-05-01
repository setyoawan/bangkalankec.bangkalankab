<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Action extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        is_logged_in();
    }


    public function artikel()
    {
        $data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['artikel'] = $this->m_data->data_artikel()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('action/artikel', $data);
        $this->load->view('templates/footer');
    }

    public function upload()
    {
        $config['upload_path']         = 'assets/img/news/';  // folder upload 
        $config['allowed_types']        = 'jpg|png|jpeg'; // jenis file
        $config['max_size']             = 10000;
        // $config['max_width']            = 3000;
        // $config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) //sesuai dengan name pada form 
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload Gagal!</div>');
            redirect('action/artikel');
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');
            $file = $this->upload->data();

            $this->m_data->insert(array(
                'gambar' => $gambar,
                'judul' => $judul,
                'isi' => $isi,
                'date_created' => time()
            ));
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
            redirect('action/artikel ');
        }
    }
    public function deleteartikel($id)
    {
        $where = array('id' => $id);
        $this->m_data->delete($where, 'news');

        helper_log("hapus", "Menghapus Artikel");

        redirect('action/artikel');
    }

    public function editartikel($id)
    {
        $data['title'] = 'Edit Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('id' => $id);
        $data['artikel'] = $this->m_data->edit_artikel($where, 'news')->result();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('action/edit-artikel', $data);
        $this->load->view('templates/footer');
    }

    public function updateartikel()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');


        $data = array(
            'judul' => $judul,
            'isi' => $isi

        );


        $where = array(
            'id' => $id
        );
        //======================================
        helper_log("edit", "Mengedit Artikel");
        //======================================

        $this->m_data->update_data($where, $data, 'news');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Update Success!</div>');
        redirect('action/artikel');
    }

    public function agenda()
    {
        $data['title'] = 'Agenda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        // $data['agenda'] =  $this->db->get('agenda')->result_array();

        $data['agenda'] = $this->m_data->data_agenda()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('action/agenda', $data);
        $this->load->view('templates/footer');
    }



    public function insertagenda()
    {

        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');


        $data = array(
            'judul' => $judul,
            'isi' => $isi,
            'date_created' => time()
        );
        $this->m_data->input_agenda($data, 'agenda');
        redirect('action/agenda');
    }


    public function editagenda($id)
    {
        $data['title'] = 'Edit Agenda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('id' => $id);
        $data['agenda'] = $this->m_data->edit_agenda($where, 'agenda')->result();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('action/edit-agenda', $data);
        $this->load->view('templates/footer');
    }

    public function deleteagenda($id)
    {
        $where = array('id' => $id);
        $this->m_data->delete($where, 'agenda');

        helper_log("hapus", "Menghapus Agenda");

        redirect('action/agenda');
    }

    public function updateagenda()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');


        $data = array(
            'judul' => $judul,
            'isi' => $isi

        );


        $where = array(
            'id' => $id
        );
        //======================================
        helper_log("edit", "Mengedit Agenda");
        //======================================

        $this->m_data->update_data($where, $data, 'agenda');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Update Success!</div>');
        redirect('action/agenda');
    }

    public function struktur()
    {
        $data['title'] = 'Struktur Organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        // $data['struktur'] =  $this->db->get('struktur')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('action/struktur', $data);
        $this->load->view('templates/footer');
    }

    public function insertstruktur()
    {
        $config['upload_path']         = 'assets/img/struktur/';  // folder upload 
        $config['allowed_types']        = 'jpg|png|jpeg'; // jenis file
        $config['max_size']             = 10000;
        // $config['max_width']            = 3000;
        // $config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) //sesuai dengan name pada form 
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload Gagal!</div>');
            redirect('action/struktur');
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $file_upload = $file['file_name'];
            $file = $this->upload->data();

            $this->m_data->insertstruktur(array(
                'file' => $file_upload,
                'date_created' => time()
            ));
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
            redirect('action/struktur ');
        }
    }


    public function gallery()
    {
        $data['title'] = 'Gallery';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['gallery'] =  $this->db->get('gallery')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('action/gallery', $data);
        $this->load->view('templates/footer');
    }

    public function insertgallery()
    {
        $config['upload_path']         = 'assets/img/gallery/';  // folder upload 
        $config['allowed_types']        = 'jpg|png|jpeg'; // jenis file
        $config['max_size']             = 10000;
        // $config['max_width']            = 3000;
        // $config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) //sesuai dengan name pada form 
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload Gagal!</div>');
            redirect('action/gallery');
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $file_upload = $file['file_name'];
            $file = $this->upload->data();

            $this->m_data->insertgallery(array(
                'file' => $file_upload,
                'date_created' => time()
            ));
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
            redirect('action/gallery ');
        }
    }
    public function deletegallery($id)
    {
        $where = array('id' => $id);
        $this->m_data->delete($where, 'gallery');

        helper_log("hapus", "Menghapus Gallery");

        redirect('action/gallery');
    }

    public function lakiprenstra()
    {
        $data['title'] = 'Lakip & Renstra';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['lakip'] =  $this->db->get('lakip')->result_array();
        $data['renstra'] =  $this->db->get('renstra')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('action/lakiprenstra', $data);
        $this->load->view('templates/footer');
    }
    public function insertlakip()
    {
        $config['upload_path']         = 'assets/file/lakip/';  // folder upload 
        $config['allowed_types']        = 'doc|docx|pdf'; // jenis file
        $config['max_size']             = 10000;
        // $config['max_width']            = 3000;
        // $config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) //sesuai dengan name pada form 
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload Gagal!</div>');
            redirect('action/lakiprenstra');
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $file_upload = $file['file_name'];
            $file = $this->upload->data();

            $this->m_data->insertlakip(array(
                'file' => $file_upload,
                'date_created' => time()
            ));

            helper_log("add", "Menambah data Lakip  ");
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
            redirect('action/lakiprenstra ');
        }
    }
    public function insertrenstra()
    {
        $config['upload_path']         = 'assets/file/renstra/';  // folder upload 
        $config['allowed_types']        = 'doc|docx|pdf'; // jenis file
        $config['max_size']             = 10000;
        // $config['max_width']            = 3000;
        // $config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) //sesuai dengan name pada form 
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload Gagal!</div>');
            redirect('action/lakiprenstra');
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $file_upload = $file['file_name'];
            $file = $this->upload->data();

            $this->m_data->insertrenstra(array(
                'file' => $file_upload,
                'date_created' => time()
            ));
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
            redirect('action/lakiprenstra ');
        }
    }
    public function deletelakip($id)
    {
        $where = array('id' => $id);
        $this->m_data->delete($where, 'lakip');

        helper_log("hapus", "Menghapus Lakip");

        redirect('action/lakiprenstra');
    }
    public function deleterenstra($id)
    {
        $where = array('id' => $id);
        $this->m_data->delete($where, 'renstra');

        helper_log("hapus", "Menghapus Renstra");

        redirect('action/lakiprenstra');
    }

    public function videos(){
        $data['title'] = 'Videos';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $data['videos'] = $this->db->get('videos')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('action/videos', $data);
        $this->load->view('templates/footer');   
    }
}
