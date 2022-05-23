<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jemaat');
	}

	public function index()
	{
		$data['cek_absen'] = $this->M_jemaat->cek_absenAktif();
		$data['pengumuman'] = $this->M_jemaat->get_pengumuman();
		$data['jadwal'] = $this->M_jemaat->get_jadwal();

		$this->template_pengguna->view('pengguna/dashboard', $data);
	}

	public function warta_jemaat()
	{
		$data['pengumuman'] = $this->M_jemaat->get_pengumuman();
		$data['jadwal'] = $this->M_jemaat->get_jadwal();

		$this->template_pengguna->view('pengguna/dashboard', $data);

	}



	public function baptis_pengguna()
	{
		$id = $this->session->userdata('kode_user');
		$data['baptis'] = $this->M_jemaat->get_databaptis();
		$data['jemaat'] = $this->M_jemaat->get_dataJemaatSingle($id);
		$this->template_pengguna->view('pengguna/baptis_pengguna', $data);
	}

	public function daftar_baptis()
	{
		$nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_hp = $this->input->post('no_hp');
		$nama_ayah = $this->input->post('nama_ayah');
		$nama_ibu = $this->input->post('nama_ibu');


		$data = array(
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'no_hp' => $no_hp,
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu,
		);

		$this->M_jemaat->input_databaptis($data, 'tb_baptis');
		$this->session->set_flashdata('alert', 'Anda Telah Berhasil Mendaftar !');
		redirect('pengguna/baptis_pengguna');
	}

	public function laporan_baptis()
	{
		$tanggal = $this->input->post('bulan');
		if(empty($tanggal)){
			$data['databaptis'] = $this->M_jemaat->get_baptis();
		}else{
			$data['databaptis'] = $this->db->query("select * from tb_baptis where date_format(tgl_baptis,'%Y-%m') = '$tanggal'")->result();
		}
		
		$this->template_pengguna->view('pengguna/laporan_baptis', $data);
	}

	public function perjamuan_pengguna()
	{
		$id = $this->session->userdata('kode_user');
		$data['perjamuan'] = $this->M_jemaat->get_dataperjamuan();
		$data['jemaat'] = $this->M_jemaat->get_dataJemaatSingle($id);
		$this->template_pengguna->view('pengguna/perjamuan_pengguna', $data);

	}

	public function daftar_perjamuan()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');


		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
		);

		$this->M_jemaat->input_dataperjamuan($data, 'tb_perjamuan');
		$this->session->set_flashdata('alert', 'Berhasil menambahkan data perjamuan !');
		redirect('pengguna/perjamuan_pengguna');
	}


	public function listBaptisPengguna()
	{
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_baptis = $this->input->post('id_baptis');

		$baptis = $this->M_jemaat->get_dataBaptisSingle($id_baptis);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$no_hp = $baptis->no_hp;
		$tempat = $baptis->tempat_lahir;
		$tgl = $baptis->tgl_lahir;
		$ayah = $baptis->nama_ayah;
		$ibu = $baptis->nama_ibu;

		$callback = array('hp' => $no_hp, 'tempat' => $tempat, 'tgl' => $tgl, 'ayah' => $ayah, 'ibu' => $ibu); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

	public function jadwal_perjamuan()
	{

		$data['jadwal_perjamuan'] = $this->M_jemaat->get_jadwal_perjamuan_pengguna();

		$this->template_pengguna->view('pengguna/jadwal_perjamuan', $data);
	}

	public function listperjamuan()
	{
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_jemaat = $this->input->post('id_jemaat');

		$datajemaat = $this->M_jemaat->get_dataperjamuan($id_jemaat);
		
		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih
		$alamat = $datajemaat->alamat;
		$no = $datajemaat->no_hp;

		$callback = array('alamat' => $alamat, 'no' => $no); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

	

}
