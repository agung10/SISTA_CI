<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_PesertaSeminar extends CI_Model
{
    public function PesertaByID($where)
    {
        return $this->db->get_where('peserta_seminar', $where)->result();
    }
}
