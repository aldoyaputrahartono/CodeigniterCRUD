<?php defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model
{
    private $_table = "mahasiswa";

    public $nrp;
    public $nama;
    public $jenis_kelamin;
    public $alamat;
    public $telepon;
    public $jurusan;

    public function rules()
    {
        return [
            ['field' => 'nrp',
            'label' => 'NRP',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'Jenis_kelamin',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'telepon',
            'label' => 'Telepon',
            'rules' => 'required'],
            
            ['field' => 'jurusan',
            'label' => 'Jurusan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nrp" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nrp = $post["nrp"];
        $this->nama = $post["nama"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->telepon = $post["telepon"];
        $this->jurusan = $post["jurusan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nrp = $post["nrp"];
        $this->nama = $post["nama"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->telepon = $post["telepon"];
        $this->jurusan = $post["jurusan"];
        return $this->db->update($this->_table, $this, array('nrp' => $post['nrp']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nrp" => $id));
    }
}