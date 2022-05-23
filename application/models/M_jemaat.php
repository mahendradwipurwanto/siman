<?php

class M_jemaat extends CI_Model
{

	function cek_absenAktif()
	{
		$query = $this->db->get_where('tb_mingguan', ['status' => 1]);
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	function cek_absenku()
	{
		$id_jemaat = $this->session->userdata('id_jemaat');
		$query = $this->db->query("SELECT * FROM tb_absen a, tb_mingguan b WHERE a.id_jemaat =  '$id_jemaat' AND b.status = 1");
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}
	function get_perjamuan()
	{
		$sql = $this->db->get('tb_perjamuan');
		if ($sql->num_rows() > 0) {

			// result() digunakan untuk mengambil query dari database, dengan lebih dari 1 data, biasanya buat tabel

			return $sql->result();
		} else {
			return false;
		}
	}
	function get_jadwal_perjamuan_pengguna()
	{
		$sql = $this->db->query('SELECT a.*, b.nama, b.alamat FROM tb_jadwal_perjamuan a LEFT JOIN tb_jemaat b ON a.rumah = b.id_jemaat');
		if ($sql->num_rows() > 0) {

			return $sql->result();
		} else {
			return false;
		}
	}

	function get_pengumuman()
	{
		$sql = $this->db->get('tb_warta');
		if ($sql->num_rows() > 0) {

			// result() digunakan untuk mengambil query dari database, dengan lebih dari 1 data, biasanya buat tabel

			return $sql->result();
		} else {
			return false;
		}
	}
	function get_pengumumanDetail($id_warta)
	{
		$sql = $this->db->get_where('tb_warta', array('id_warta' => $id_warta));
		if ($sql->num_rows() > 0) {

			return $sql->row();
		} else {
			return false;
		}
	}
	function tampil_warta()
	{
		return $this->db->get('tb_warta');
	}

	function get_jadwal()
	{
		$sql = $this->db->get('tb_jadwal');
		if ($sql->num_rows() > 0) {

			// result() digunakan untuk mengambil query dari database, dengan lebih dari 1 data, biasanya buat tabel

			return $sql->result();
		} else {
			return false;
		}
	}
	function get_jadwalDetail($id_jadwal)
	{
		$sql = $this->db->get_where('tb_jadwal', array('id_jadwal' => $id_jadwal));
		if ($sql->num_rows() > 0) {

			return $sql->row();
		} else {
			return false;
		}
	}
	function tampil_visitasi()
	{
		return $this->db->get('tb_jadwal');
	}

	function get_laporan_data_presensi()
	{
		$id_jemaat = $this->session->userdata('id_jemaat');
		$sql = $this->db->query("SELECT * FROM tb_absen a, tb_mingguan b, tb_login c, tb_jemaat d WHERE a.id_minggu = b.id_minggu AND a.id_jemaat = c.kode_user AND c.kode_user = d.id_jemaat AND a.id_jemaat = '$id_jemaat'");
		if ($sql->num_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}

	function input_databaptis($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function get_baptis()
	{
		$sql = $this->db->get('tb_baptis');
		if ($sql->num_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}

	function get_databaptis()
	{
		$sql = $this->db->get('tb_jemaat');
		if ($sql->num_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}

	function get_dataBaptisSingle($id_baptis)
	{
		$sql = $this->db->get_where('tb_jemaat', array('id_baptis' => $id_baptis));
		if ($sql->num_rows() > 0) {

			return $sql->row();
		} else {
			return false;
		}
	}

	function get_dataJemaatSingle($id_jemaat)
	{
		$sql = $this->db->get_where('tb_jemaat', array('kode_user' => $id_jemaat));
		if ($sql->num_rows() > 0) {

			return $sql->row();
		} else {
			return false;
		}
	}


	function get_dataperjamuan()
	{
		$sql = $this->db->get('tb_jemaat');
		if ($sql->num_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}

	function input_dataperjamuan($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function get_dataabsen()
	{
		$sql = $this->db->get('tb_absen');
		if ($sql->num_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}

	function input_datapersembahan($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function get_datapersembahan($input = null)
	{
		if (empty($input)) {
			$sql = $this->db->get('tb_persembahan');
			if ($sql->num_rows() > 0) {
				return $sql->result();
			} else {
				return false;
			}
		} else {
			$sql = $this->db->get_where('tb_persembahan', array("date_format(tgl_tf,'%Y-%m')" => $input));
			if ($sql->num_rows() > 0) {
				return $sql->result();
			} else {
				return false;
			}
		}
	}
	function input_dataabsensi($data, $table)
	{
		$this->db->insert($table, $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	function get_mingguan()
	{
		$this->db->select('*');
		$this->db->from('tb_mingguan');
		$this->db->order_by('tanggal', 'DESC');
		$sql = $this->db->get();
		if ($sql->num_rows() > 0) {

			// result() digunakan untuk mengambil query dari database, dengan lebih dari 1 data, biasanya buat tabel

			return $sql->result();
		} else {
			return false;
		}
	}
	function get_mingguanDetail($id_minggu)
	{

		// karena hanya mengambil satu data sesuai id mingguan, pakai get_where
		$sql = $this->db->get_where('tb_mingguan', array('id_minggu' => $id_minggu));
		if ($sql->num_rows() > 0) {

			// kalau untuk nampilin satu data saja atau satu baris data dari database, pakai row()

			return $sql->row();
		} else {
			return false;
		}
	}
	function get_jmlAbsensi($id_minggu)
	{
		return $this->db->get_where('tb_absen', ['id_minggu' => $id_minggu])->num_rows();
	}

	function get_jmlJemaat()
	{
		return $this->db->get('tb_jemaat')->num_rows();
	}
	function get_data_rekap($filter)
	{
		$this->db->select('a.id_minggu, a.minggu, a.jenis_ibadah, a.tanggal, a.jam_mulai, a.jam_berakhir, a.status, b.id_absen, b.id_jemaat, c.nama, b.waktu');
		$this->db->from('tb_mingguan a');
		$this->db->join('tb_absen b', 'a.id_minggu = b.id_minggu', 'left');
		$this->db->join('tb_jemaat c', 'b.id_jemaat = c.id_jemaat', 'left');
		if (!empty($filter)) {
			$this->db->where('a.id_minggu', $filter);
		}
		$sql = $this->db->get();
		if ($sql->num_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}
}
