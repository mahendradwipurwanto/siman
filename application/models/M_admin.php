<?php

class M_admin extends CI_Model
{

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

	function get_jmlAbsensi($id_minggu)
	{
		return $this->db->get_where('tb_absen', ['id_minggu' => $id_minggu])->num_rows();
	}

	function get_jmlJemaat()
	{
		return $this->db->get('tb_jemaat')->num_rows();
	}


	// bikin function buat get mingguan detail, dengan parameter id mingguan yang dikirm dari controller
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

	function get_mingguanAktif()
	{

		// karena hanya mengambil satu data sesuai id mingguan, pakai get_where
		$sql = $this->db->get_where('tb_mingguan', array('status' => 1));
		if ($sql->num_rows() > 0) {

			// kalau untuk nampilin satu data saja atau satu baris data dari database, pakai row()

			return $sql->row();
		} else {
			return false;
		}
	}

	function get_data_jemaat()
	{
		$sql = $this->db->get('tb_jemaat');
		if ($sql->num_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}

	function get_data_pengurus()
	{
		$sql = $this->db->get('tb_pengurus');
		if ($sql->num_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
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

	function get_data_persembahan($input = null)
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

	function get_data_aturabsen()
	{
		$sql = $this->db->get('tb_absen');
		if ($sql->num_rows() > 0) {
			return $sql->result();
		} else {
			return false;
		}
	}

	function tampil_data()
	{
		return $this->db->get('tb_jemaat');
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function input_data_jemaat($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function input_data_pengurus($data, $table)
	{

		$this->db->insert($table, $data);
	}

	// karena update sama, kayak edit data ada where sesuai id yang dikirim
	function update_data($data, $table, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function update_dataverifikasibaptis($data, $table, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
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

	function get_warta()
	{
		$sql = $this->db->get('tb_warta');
		if ($sql->num_rows() > 0) {

			// result() digunakan untuk mengambil query dari database, dengan lebih dari 1 data, biasanya buat tabel

			return $sql->result();
		} else {
			return false;
		}
	}

	function get_umurJemaat()
	{
		$sql = $this->db->query("SELECT YEAR(CURRENT_TIMESTAMP) - YEAR(tgl_lahir) - (RIGHT(CURRENT_TIMESTAMP, 5) < RIGHT(tgl_lahir, 5)) as age FROM tb_jemaat");
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
	function input_warta($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function update_warta($data, $table, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function hapus_warta($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
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
	function get_visitasi()
	{
		$sql = $this->db->get('tb_jadwal');
		if ($sql->num_rows() > 0) {

			return $sql->result();
		} else {
			return false;
		}
	}
	function tampil_visitasi()
	{
		return $this->db->get('tb_jadwal');
	}
	function input_visitasi($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function update_visitasi($data, $table, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function hapus_visitasi($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	//AMBIL DATA MINGGUAN BERDASSARKAN DATA MINGGUAN YANG DIPILIH SAAT DROP DOWN DI ATUR ABSEN
	public function get_dataMingguan($id_minggu)
	{
		$this->db->where('id_minggu', $id_minggu);
		$result = $this->db->get('tb_mingguan')->row(); // Tampilkan data mingguan berdasarkan id minggu

		return $result;
	}

	function update_datapengurus($data, $table, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function get_pengurusDetail($id_pengurus)
	{
		$sql = $this->db->get_where('tb_pengurus', array('id_pengurus' => $id_pengurus));
		if ($sql->num_rows() > 0) {

			return $sql->row();
		} else {
			return false;
		}
	}

	function hapus_datapengurus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function get_databaptis()
	{
		$sql = $this->db->get('tb_baptis');
		if ($sql->num_rows() > 0) {

			return $sql->result();
		} else {
			return false;
		}
	}

	function get_detailbaptis($id_baptis){
		$query = $this->db->get_where('tb_baptis', array('id_baptis' => $id_baptis))->row();
		return $query;
	}

	function get_baptisan()
	{
		$sql = $this->db->get('tb_baptis');
		if ($sql->num_rows() > 0) {

			return $sql->result();
		} else {
			return false;
		}
	}

	function get_dataBaptisSingle($id_baptis)
	{
		$sql = $this->db->get_where('tb_baptis', array('id_baptis' => $id_baptis));
		if ($sql->num_rows() > 0) {

			return $sql->row();
		} else {
			return false;
		}
	}

	function input_jadwal_perjamuan($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function get_dataperjamuan()
	{
		$sql = $this->db->get('tb_perjamuan');
		if ($sql->num_rows() > 0) {

			return $sql->result();
		} else {
			return false;
		}
	}

	function get_perjamuan()
	{
		$sql = $this->db->get('tb_perjamuan');
		if ($sql->num_rows() > 0) {

			return $sql->result();
		} else {
			return false;
		}
	}

	function get_jadwal_perjamuan()
	{
		$sql = $this->db->query('SELECT a.*, b.nama FROM tb_jadwal_perjamuan a LEFT JOIN tb_jemaat b ON a.rumah = b.id_jemaat ORDER BY a.tanggal DESC');
		if ($sql->num_rows() > 0) {

			return $sql->result();
		} else {
			return false;
		}
	}

	public function get_datajadwalperjamuan($id_jemaat)
	{
		$this->db->where('id_jemaat', $id_jemaat);
		$result = $this->db->get('tb_jemaat')->row(); // Tampilkan data mingguan berdasarkan id minggu

		return $result;
	}

	function get_dataperjamuanSingle($id_perjamuan)
	{
		$sql = $this->db->get_where('tb_perjamuan', array('id_perjamuan' => $id_perjamuan));
		if ($sql->num_rows() > 0) {

			return $sql->row();
		} else {
			return false;
		}
	}

	function update_dataperjamuan($data, $table, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function update_jadwalperjamuan($data, $table, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function get_jadwal_perjamuandetail($id_jadwalperjamuan)
	{
		$this->db->select('a.*, b.nama');
		$this->db->from('tb_jadwal_perjamuan a');
		$this->db->join('tb_jemaat b', 'a.rumah = b.id_jemaat');
		$this->db->where('a.id_jadwalperjamuan', $id_jadwalperjamuan);
		$sql = $this->db->get();
		if ($sql->num_rows() > 0) {

			return $sql->row();
		} else {
			return false;
		}
	}
	function hapus_jadwal_perjamuan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function get_jadwal_perjamuan_admin()
	{
		$sql = $this->db->query('SELECT a.*, b.nama, b.alamat FROM tb_jadwal_perjamuan a LEFT JOIN tb_jemaat b ON a.rumah = b.id_jemaat');
		if ($sql->num_rows() > 0) {

			return $sql->result();
		} else {
			return false;
		}
	}

	function input_data_pengumuman($data, $table)
	{
		$this->db->insert($table, $data);
	}
}
