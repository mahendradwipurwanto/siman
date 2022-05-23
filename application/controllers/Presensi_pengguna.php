<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presensi_pengguna extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jemaat');
	}

	public function presensi_sekarang()
	{
		$data['cek_absen'] = $this->M_jemaat->cek_absenAktif();
		$data['cek_absenku'] = $this->M_jemaat->cek_absenku();

		$this->template_pengguna->view('pengguna/presensi_sekarang', $data);
	}

	function absen_sekarang()
	{

		$id_minggu = $this->input->post('id_minggu');


		$data = array(
			'id_jemaat' => $this->session->userdata('id_jemaat'),
			'id_minggu' => $id_minggu,
			'waktu' => time(),
		);

		if ($this->M_jemaat->input_dataabsensi($data, 'tb_absen') == true) {
			$this->session->set_flashdata('alert', 'Berhasil melakukan absensi !');
			redirect('presensi_pengguna/presensi_sekarang');
		} else {
			$this->session->set_flashdata('alert', 'Gagal saat melakukan absensi !');
			redirect('presensi_pengguna/presensi_sekarang');
		}
	}

	public function laporan_presensi_pengguna()
	{
		$filter = $this->input->get('filter');
		$data['mingguan']	= $this->M_jemaat->get_mingguan();
		$data['minggu']		= $this->M_jemaat->get_mingguanDetail($filter);
		$data['jml_absensi']		= $this->M_jemaat->get_jmlAbsensi($filter);
		$data['jml_jemaat']		= $this->M_jemaat->get_jmlJemaat();
		$data['filter'] = $filter;
		$data['rekap']	= $this->M_jemaat->get_data_rekap($filter);
		$this->template_pengguna->view('pengguna/laporan_presensi_pengguna', $data);
	}
}
