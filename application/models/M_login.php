<?php

class M_login extends CI_Model {

	function cek_user($username){
		$sql = $this->db->get_where('tb_login', array('username' => $username));
		if ($sql->num_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	function get_user($username){
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->join('tb_jemaat', 'tb_login.kode_user = tb_jemaat.kode_user', 'left');
		$this->db->where('username', $username);
		$sql = $this->db->get();
		if ($sql->num_rows() > 0) {
			return $sql->row();
		}else{
			return false;
		}
	}

	function save_user(){

		// mengambil inputan dari form daftar view
		$nama				= $this->input->post('nama');
		$no_hp				= $this->input->post('no_hp');
		$tempat_lahir			= $this->input->post('tempat_lahir');
		$tgl_lahir			= $this->input->post('tgl_lahir');
		$alamat				= $this->input->post('alamat');
		$status_keanggotaan	= $this->input->post('status_keanggotaan');
		$username				= $this->input->post('username');
		$password				= $this->input->post('password');


		// memasukkan ke database login
		$login = array(
			'username' 	=> $username,
			'pass' 		=> md5($password),
			'role'		=> 1
		);

		$this->db->insert('tb_login', $login);

		// mengambil kode_user dari data user yang sudah dimasukkan ke tabel login
	   	$kode_user = $this->db->insert_id();

		// memasukkan ke database jemaat
		$jemaat = array(
			'kode_user' 			=> $kode_user,
			'nama' 					=> $nama,
			'alamat'				=> $alamat,
			'tempat_lahir'			=> $tempat_lahir,
			'tgl_lahir'				=> $tgl_lahir,
			'no_hp' 				=> $no_hp,
			'status_keanggotaan'	=> $status_keanggotaan
		);

		$this->db->insert('tb_jemaat', $jemaat);
	}

}?>