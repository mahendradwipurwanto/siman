<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presensi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_admin');
	}

	public function riwayat()
	{
		$this->template->view('admin/riwayat');
	}

	public function rekap()
	{

		$filter = $this->input->get('filter');
		$data['mingguan']	= $this->M_admin->get_mingguan();
		$data['minggu']		= $this->M_admin->get_mingguanDetail($filter);
		$data['jml_absensi']		= $this->M_admin->get_jmlAbsensi($filter);
		$data['jml_jemaat']		= $this->M_admin->get_jmlJemaat();
		$data['filter'] = $filter;
		$data['rekap']	= $this->M_admin->get_data_rekap($filter);

		$this->template->view('admin/rekap', $data);
	}

	// ATUR ABSEN (BUAT QR CODE DAN ATUR STATUS MINGGUAN)
	function atur_absen()
	{
		// ambil data mingguan yang dipilih
		$data['mingguan']		= $this->M_admin->get_mingguan();
		$data['absen_aktif']	= $this->M_admin->get_mingguanAktif();
		$this->template->view('admin/atur_absen', $data);
	}

	function atur_aksiabsenMingguan($id_minggu)
	{
		// karena ini edit data jadi sama statusnya
		$status = $this->input->post('status');

		$data = array(
			'status' => $status,
		);

		$where = array('id_minggu' => $id_minggu);
		// nama tabel hmm
		$this->M_admin->update_data($data, 'tb_mingguan', $where);
		// balik kehalaman data mingguan donkkk -,-
		$this->session->set_flashdata('alert', 'Berhasil mengatur absen data mingguan !');
		redirect('presensi/atur_absen');
	}

	public function listMingguan()
	{
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_provinsi = $this->input->post('id_minggu');

		$mingguan = $this->M_admin->get_dataMingguan($id_provinsi);

		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$jenis = $mingguan->jenis_ibadah;
		$mulai = $mingguan->jam_mulai;
		$berakhir = $mingguan->jam_berakhir;

		$callback = array('jenis' => $jenis, 'mulai' => $mulai, 'berakhir' => $berakhir); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

	function atur_aksiabsenMingguanBaru()
	{
		// karena ini edit data jadi sama statusnya
		$id_minggu = $this->input->post('id_minggu');
		$status = $this->input->post('status');

		$data = array(
			'status' => $status,
		);

		$where = array('id_minggu' => $id_minggu);
		// nama tabel hmm
		$this->M_admin->update_data($data, 'tb_mingguan', $where);
		// balik kehalaman data mingguan donkkk -,-
		$this->session->set_flashdata('alert', 'Berhasil mengatur absen data mingguan !');
		redirect('presensi/atur_absen');
	}
}
