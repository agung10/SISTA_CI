<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Jadwal extends CI_Model
{
    public function GET()
    {
        $this->db->select(
            'seminar_ta.*, 
            kategori_seminar.nama as nama_seminar, 
            dosen.nidn, dosen.nama as nama_dosen'
        );
        $this->db->from('seminar_ta');
        $this->db->join(
            'kategori_seminar',
            'seminar_ta.kategori_seminar_id = kategori_seminar.id'
        );
        $this->db->join(
            'dosen',
            'seminar_ta.pembimbing_id = dosen.id',
        );
        $this->db->order_by('id', 'DESC');

        $q = $this->db->get();
        return $q->result();
    }

    public function ADD($data)
    {
        $this->db->insert('peserta_seminar', $data);
    }

    public function SHOW($where)
    {
        return $this->db->get_where('peserta_seminar', $where)->result();
    }
}
