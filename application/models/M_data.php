<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_data extends CI_Model
{

    public function log()
    {
        $this->db->order_by('log_time', 'DESC');
        return $this->db->get('tabel_log');
    }
    public function tampil_data()
    {
        return $this->db->get('user');
    }
    public function data_artikel()
    {
        return $this->db->get('news');
    }
    public function data_agenda()
    {
        return $this->db->get('agenda');
    }
    //------------------------------------------------------------------------------------------------//
    public function edit_artikel($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function edit_agenda($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    //------------------------------------------------------------------------------------------------//
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    //------------------------------------------------------------------------------------------------//

    public function insert($data)
    {
        $this->db->insert('news', $data);
    }
    public function insertstruktur($data)
    {
        $this->db->insert('struktur', $data);
    }
    public function insertgallery($data)
    {
        $this->db->insert('gallery', $data);
    }
    public function insertlakip($data)
    {
        $this->db->insert('lakip', $data);
    }
    public function insertrenstra($data)
    {
        $this->db->insert('renstra', $data);
    }
    public function input_agenda($data)
    {
        $this->db->insert('agenda', $data);
    }

    //---------------------------------------------------------//

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // ------------------------------------------------------------------------------------------------------------

    public function lakilaki()
    {
        $this->db->select_sum('lakilaki');
        $query = $this->db->get('data_daerah');
        if ($query->num_rows() > 0) {
            return $query->row()->lakilaki;
        }
    }
    public function perempuan()
    {
        $this->db->select_sum('perempuan');
        $query = $this->db->get('data_daerah');
        if ($query->num_rows() > 0) {
            return $query->row()->perempuan;
        }
    }
    public function kepala_keluarga()
    {
        $this->db->select_sum('kepala_keluarga');
        $query = $this->db->get('data_daerah');
        if ($query->num_rows() > 0) {
            return $query->row()->kepala_keluarga;
        }
    }

    // Pendidikan-------------------------------------------------------------------------------
    public function sd()
    {
        $this->db->select_sum('sd');
        $query = $this->db->get('data_daerah');
        if ($query->num_rows() > 0) {
            return $query->row()->sd;
        }
    }
    public function smp()
    {
        $this->db->select_sum('smp');
        $query = $this->db->get('data_daerah');
        if ($query->num_rows() > 0) {
            return $query->row()->smp;
        }
    }
    public function sma()
    {
        $this->db->select_sum('sma');
        $query = $this->db->get('data_daerah');
        if ($query->num_rows() > 0) {
            return $query->row()->sma;
        }
    }
    public function akademi()
    {
        $this->db->select_sum('akademi');
        $query = $this->db->get('data_daerah');
        if ($query->num_rows() > 0) {
            return $query->row()->akademi;
        }
    }
    public function sarjana()
    {
        $this->db->select_sum('sarjana');
        $query = $this->db->get('data_daerah');
        if ($query->num_rows() > 0) {
            return $query->row()->sarjana;
        }
    }

    public function coba()
    {

        // $query = "SELECT MAX(SUM('sma','akademi','sarjana')) FROM data_daerah;";
        // return  $this->db->query($query)->result_array();
        // $query = "SELECT MAX(SUM('sma','akademi','sarjana')) FROM data_daerah;";
        // return $query->num_rows();
        $query = "select max(avg_salary) from (select worker_id, avg(salary) AS avg_salary
              from workers
              group by worker_id)";

              $query = "SELECT MAX(sma,akademi,)";
        return  $this->db->query($query)->result_array();
    }
}
