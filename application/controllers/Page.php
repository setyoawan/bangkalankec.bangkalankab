<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_data');
    }


    public function index()
    {
        $data['title'] = 'Welcome';

        // $data['news'] = $this->db->get('news')->result_array();
        // $data['agenda'] = $this->db->get('agenda')->result_array();
        $data['profile'] = $this->db->get('user')->result_array();
        // $data['videos'] = $this->db->get('videos')->result_array();

        $this->load->view('page/header', $data);
        $this->load->view('page/index');
        $this->load->view('page/footer');
    }

    // public function loadartikel()
    // {
    //     $data['title'] = 'Artikel';
    //     $this->load->view('templates/page_header',$data);
    //     $this->load->view('page/berita', $data);
    //     $this->load->view('templates/page_footer');
    // }

    public function loadartikel()
    {
        $data['title'] = 'Artikel';
        $data['page'] = 'Artikel';
        $data['sub'] = 'Detail Berita';
        
        

        $this->load->view('templates/page_header_artikel', $data);
        $this->load->view('page/berita', $data);
        $this->load->view('templates/page_footer_artikel');
    }
    public function loadagenda()
    {
        $data['title'] = 'Agenda';
        $data['page'] = 'Agenda';
        $data['sub'] = 'Detail Agenda';
        
        

        $this->load->view('templates/page_header_artikel', $data);
        $this->load->view('page/agenda', $data);
        $this->load->view('templates/page_footer_artikel');
    }

    public function sejarah()
    {
        $data['title'] = 'Sejarah';
        $data['page'] = 'Sejarah';
        $data['sub'] = 'Bangkalan';

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/sejarah');
        $this->load->view('templates/page_footer');
    }
    public function geografis()
    {
        $data['title'] = 'Geografis';
        $data['page'] = 'Geografis';
        $data['sub'] = 'Bangkalan';

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/geografi');
        $this->load->view('templates/page_footer');
    }
    public function adatbudaya()
    {
        $data['title'] = 'Adat & Budaya';
        $data['page'] = 'Adat & Budaya';
        $data['sub'] = 'Bangkalan';

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/adatbudaya');
        $this->load->view('templates/page_footer');
    }
    public function programkerja()
    {
        $data['title'] = 'Program Kerja';
        $data['page'] = 'Program Kerja';
        $data['sub'] = 'Bangkalan';

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/programkerja');
        $this->load->view('templates/page_footer');
    }

// STAKEHOLDERS--------------------------------------------------------------------------------------

    public function koramil()
    {
        $data['title'] = 'Koramil';
        $data['page'] = 'Stakeholders';
        $data['sub'] = 'Koramil';
        $data['keldes2'] = 'Selamat Datang di Profile Koramil.';
        $data['user'] = $this->db->get_where('user', ['email' => 'koramilbangkalan@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'koramilbangkalan@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();
        // $data['sdm'] =  $this->db->get('data_daerah')->result_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/koramil', $data);
        $this->load->view('templates/page_footer');
    }
    public function polsek()
    {
        $data['title'] = 'Polsek';
        $data['page'] = 'Stakeholders';
        $data['sub'] = 'Polsek';
        $data['keldes2'] = 'Selamat Datang di Profile Polsek.';
        $data['user'] = $this->db->get_where('user', ['email' => 'polsekbangkalan@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'polsekbangkalan@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();
        // $data['sdm'] =  $this->db->get('data_daerah')->result_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/polsek', $data);
        $this->load->view('templates/page_footer');
    }
    public function puskesmas()
    {
        $data['title'] = 'Puskesmas';
        $data['page'] = 'Stakeholders';
        $data['sub'] = 'Puskesmas';
        $data['keldes2'] = 'Selamat Datang di Profile Puskesmas.';
        $data['user'] = $this->db->get_where('user', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();
        // $data['sdm'] =  $this->db->get('data_daerah')->result_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/puskesmas', $data);
        $this->load->view('templates/page_footer');
    }

    // KELURAHAN/DESA
    public function demangan()
    {
        $data['title'] = 'Demangan';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Demangan';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Demangan.';
        $data['user'] = $this->db->get_where('user', ['email' => 'kelurahandemangan69115@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'kelurahandemangan69115@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();
        // $data['sdm'] =  $this->db->get('data_daerah')->result_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/demangan', $data);
        $this->load->view('templates/page_footer');
    }
    public function pejagan()
    {
        $data['title'] = 'Pejagan';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Pejagan';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Pejagan.';
        $data['user'] = $this->db->get_where('user', ['email' => 'kelurahanpejagan69112@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'kelurahanpejagan69112@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/pejagan', $data);
        $this->load->view('templates/page_footer');
    }
    public function kraton()
    {
        $data['title'] = 'Kraton';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Kraton';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Kraton.';
        $data['user'] = $this->db->get_where('user', ['email' => 'kelurahankraton69119@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'kelurahankraton69119@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/kraton', $data);
        $this->load->view('templates/page_footer');
    }
    public function pangeranan()
    {
        $data['title'] = 'Pangeranan';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Pangeranan';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Pangeranan.';
        $data['user'] = $this->db->get_where('user', ['email' => 'kelurahanpangeranan69115@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'kelurahanpangeranan69115@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/pangeranan', $data);
        $this->load->view('templates/page_footer');
    }
    public function kemayoran()
    {
        $data['title'] = 'Kemayoran';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Kemayoran';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Kemayoran.';
        $data['user'] = $this->db->get_where('user', ['email' => 'kelurahankemayoran69116@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'kelurahankemayoran69116@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/kemayoran', $data);
        $this->load->view('templates/page_footer');
    }
    public function mlajah()
    {
        $data['title'] = 'Mlajah';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Mlajah';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Mlajah.';
        $data['user'] = $this->db->get_where('user', ['email' => 'kelurahanmlajah69116@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'kelurahanmlajah69116@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/mlajah', $data);
        $this->load->view('templates/page_footer');
    }
    public function bancaran()
    {
        $data['title'] = 'Bancaran';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Bancaran';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Bancaran.';
        $data['user'] = $this->db->get_where('user', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/bancaran', $data);
        $this->load->view('templates/page_footer');
    }
    public function martajasah()
    {
        $data['title'] = 'Martajasah';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Martajasah';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Martajasah.';
        $data['user'] = $this->db->get_where('user', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/martajasah', $data);
        $this->load->view('templates/page_footer');
    }
    public function ujungpiring()
    {
        $data['title'] = 'Ujung Piring';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Ujung Piring';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Ujung Piring.';
        $data['user'] = $this->db->get_where('user', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/ujungpiring', $data);
        $this->load->view('templates/page_footer');
    }
    public function kramat()
    {
        $data['title'] = 'Kramat';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Kramat';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Kramat.';
        $data['user'] = $this->db->get_where('user', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/kramat', $data);
        $this->load->view('templates/page_footer');
    }
    public function sambilangan()
    {
        $data['title'] = 'Sambilangan';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Sambilangan';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Sambilangan.';
        $data['user'] = $this->db->get_where('user', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/sambilangan', $data);
        $this->load->view('templates/page_footer');
    }
    public function sabiyan()
    {
        $data['title'] = 'Sabiyan';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Sabiyan';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Sabiyan.';
        $data['user'] = $this->db->get_where('user', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/sabiyan', $data);
        $this->load->view('templates/page_footer');
    }
    public function gebang()
    {
        $data['title'] = 'Gebang';
        $data['page'] = 'Kelurahan/Desa';
        $data['sub'] = 'Gebang';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Gebang.';
        $data['user'] = $this->db->get_where('user', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'tikp2.e24m.nawawi@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/gebang', $data);
        $this->load->view('templates/page_footer');
    }
    // SUB 3------------------------------------------------------------------------------------------------
    public function visimisi()
    {
        $data['title'] = 'Visi & Misi';
        $data['page'] = 'Pemerintahan';
        $data['sub'] = 'Visi & Misi';

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/visimisi');
        $this->load->view('templates/page_footer');
    }
    public function strukturorganisasi()
    {
        $data['title'] = 'Struktur Organisasi';
        $data['page'] = 'Pemerintahan';
        $data['sub'] = 'Struktur Organisasi';

        // $data['struktur'] = $this->db->get('news')->result_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/strukturorganisasi');
        $this->load->view('templates/page_footer');
    }
    public function lakip()
    {
        $data['title'] = 'Lakip';
        $data['page'] = 'Pemerintahan';
        $data['sub'] = 'Lakip';

        $data['lakip'] = $this->db->get('lakip')->result_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/lakip');
        $this->load->view('templates/page_footer');
    }
    public function renstra()
    {
        $data['title'] = 'Renstra';
        $data['page'] = 'Pemerintahan';
        $data['sub'] = 'Renstra';

        $data['renstra'] = $this->db->get('renstra')->result_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/renstra');
        $this->load->view('templates/page_footer');
    }

    // SUB 4------------------------------------------------------------------------------------------------
    public function penduduk()
    {

        // $this->load->model('m_data');
        $data['title'] = 'Penduduk';
        $data['page'] = 'Statistik';
        $data['sub'] = 'Penduduk';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Pejagan.';
        $data['user'] = $this->db->get_where('user', ['email' => 'nawawigaming@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'nawawigaming@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();
        $data['lakilaki'] = $this->m_data->lakilaki();
        $data['perempuan'] = $this->m_data->perempuan();
        $data['kepala_keluarga'] = $this->m_data->kepala_keluarga();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/penduduk', $data);
        $this->load->view('templates/page_footer');
    }
    public function pendidikan()
    {
        $data['title'] = 'Pendidikan';
        $data['page'] = 'Statistik';
        $data['sub'] = 'Pendidikan';
        $data['keldes2'] = 'Selamat Datang di Profile Kelurahan Pejagan.';
        $data['user'] = $this->db->get_where('user', ['email' => 'nawawigaming@gmail.com'])->row_array();
        $data['sdm'] = $this->db->get_where('data_daerah', ['email' => 'nawawigaming@gmail.com'])->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => sad])->row_array();

        $data['sd'] = $this->m_data->sd();
        $data['smp'] = $this->m_data->smp();
        $data['sma'] = $this->m_data->sma();
        $data['akademi'] = $this->m_data->akademi();
        $data['sarjana'] = $this->m_data->sarjana();
        // $data['coba'] = $this->m_data->coba();

        // $s3 = $this->m_data->sma();
        // $s4 = $this->m_data->akademi();
        // $s5 = $this->m_data->sarjana();

        // $data['max'] = $this->db->select_max($s3, $s4, $s5);


        $this->load->view('templates/page_header', $data);
        $this->load->view('page/pendidikan', $data);
        $this->load->view('templates/page_footer');
    }

    public function allnews()
    {
        $data['title'] = 'Semua Berita';
        $data['page'] = 'News';
        $data['sub'] = 'Semua Berita';

        $data['news'] = $this->db->get('news')->result_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/allnews');
        $this->load->view('templates/page_footer');
    }
    public function allagenda()
    {
        $data['title'] = 'Semua Agenda';
        $data['page'] = 'Agenda';
        $data['sub'] = 'Semua Agenda';

        $data['agenda'] = $this->db->get('agenda')->result_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/allagenda');
        $this->load->view('templates/page_footer');
    }
    public function allvideos()
    {
        $data['title'] = 'Semua Videos';
        $data['page'] = 'Videos';
        $data['sub'] = 'Semua Videos';

        $data['videos'] = $this->db->get('videos')->result_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/allvideos');
        $this->load->view('templates/page_footer');
    }
    public function allgallery()
    {
        $data['title'] = 'Semua Gallery';
        $data['page'] = 'Gallery';
        $data['sub'] = 'Semua Gallery';

        $data['gallery'] = $this->db->get('gallery')->result_array();

        $this->load->view('templates/page_header', $data);
        $this->load->view('page/allgallery');
        $this->load->view('templates/page_footer');
    }
}
