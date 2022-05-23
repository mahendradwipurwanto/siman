<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));

		$this->load->model('M_admin');
	}

	public function index()
	{
		redirect('admin/warta');
	}

	public function warta()
	{
		$data['pengumuman']	= $this->M_admin->get_pengumuman();

		$this->template->view('admin/warta', $data);
	}
	function tambah_warta(){
		$this->template->view('admin/tambah_warta');
	}
	function tambah_aksiwarta(){
		$judul_warta = $this->input->post('judul_warta');
		$isi_warta = $this->input->post('isi_warta');
		$tanggal = $this->input->post('tanggal');
		$image = $this->input->post('image');

		$config['upload_path'] = './foto/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 10 * 1024; #kb
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			echo $this->upload->display_errors();
		} else {
			$upload_data = $this->upload->data();
			$file_name = $upload_data['file_name']; 

 
		$data = array(
			'judul_warta' => $judul_warta,
			'isi_warta' => $isi_warta,
			'tanggal' => $tanggal,
			'image' => $file_name,
			);

		$this->M_admin->input_data($data,'tb_warta');
		$this->session->set_flashdata('alert', 'Berhasil menambahkan data warta !');
		redirect('admin/warta');
		}
	}
	function edit_warta($id_warta){
		$data['pengumuman']	= $this->M_admin->get_pengumumanDetail($id_warta);

		$this->template->view('admin/edit_warta', $data);
	}
	
	function edit_aksiwarta($id_warta){
		$judul_warta = $this->input->post('judul_warta');
		$isi_warta = $this->input->post('isi_warta');
		$tanggal = $this->input->post('tanggal');
 
		$data = array(
			'judul_warta' => $judul_warta,
			'isi_warta' => $isi_warta,
			'tanggal' => $tanggal,
			);
		
			$where = array('id_warta' => $id_warta);
		$this->M_admin->update_warta($data,'tb_warta', $where);
		$this->session->set_flashdata('alert', 'Berhasil mengubah data warta !');
		redirect('admin/warta');
	}
	function hapus_warta($id_warta){
		$where = array('id_warta' => $id_warta);
		$this->M_admin->hapus_warta($where,'tb_warta');
		$this->session->set_flashdata('alert', 'Berhasil menghapus data warta !');
		redirect('admin/warta');
	}



	public function visitasi()
	{
		// $data['jadwal']	= $this->M_admin->get_jadwal();
		$data['jadwal']	= $this->db->get('tb_jadwal')->result_array();
		
			$tanggal = $this->input->post('bulan');
		if(empty($tanggal)){
			$data['visitasi']	= $this->M_admin->get_visitasi();
		}else{
			$data['visitasi'] = $this->db->query("select * from tb_jadwal where date_format(tanggal,'%Y-%m') = '$tanggal'")->result();
		}

		$this->template->view('admin/visitasi', $data);
	}
	function tambah_visitasi(){

		$data['visitasi']	= $this->db->get('tb_pengurus')->result_array();
		$this->template->view('admin/tambah_visitasi', $data);
	}
	function tambah_aksivisitasi(){
		$hari = $this->input->post('hari');
		$rumah_jemaat = $this->input->post('rumah_jemaat');
		$pelayan = $this->input->post('pelayan');
		$tanggal = $this->input->post('tanggal');

 
		$data = array(
			'hari' => $hari,
			'rumah_jemaat' => $rumah_jemaat,
			'pelayan' => $pelayan,
			'tanggal' => $tanggal,
			);

		$this->M_admin->input_visitasi($data,'tb_jadwal');
		$this->session->set_flashdata('alert', 'Berhasil menambahkan data visitasi !');
		redirect('admin/visitasi');
	}
	function edit_visitasi($id_jadwal){
		$data['jadwal']	= $this->M_admin->get_jadwalDetail($id_jadwal);

		$this->template->view('admin/edit_visitasi', $data);
	}
	function edit_aksivisitasi($id_jadwal){
		$hari = $this->input->post('hari');
		$rumah_jemaat = $this->input->post('rumah_jemaat');
		$pelayan = $this->input->post('pelayan');
		$tanggal = $this->input->post('tanggal');

 
		$data = array(
			'hari' => $hari,
			'rumah_jemaat' => $rumah_jemaat,
			'pelayan' => $pelayan,
			'tanggal' => $tanggal,
			);
		
			$where = array('id_jadwal' => $id_jadwal);
		$this->M_admin->update_visitasi($data,'tb_jadwal', $where);
		$this->session->set_flashdata('alert', 'Berhasil mengubah data visitasi !');
		redirect('admin/visitasi');
	}
	function hapus_visitasi($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$this->M_admin->hapus_visitasi($where,'tb_jadwal');
		$this->session->set_flashdata('alert', 'Berhasil menghapus data visitasi !');
		redirect('admin/visitasi');
	}

	function tambah_datajemaat(){
		$this->template->view('admin/tambah_datajemaat');
	}

	function tambah_tambah_aksidatajemaat(){
		
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$no_hp = $this->input->post('no_hp');
		$status_keanggotaan = $this->input->post('status_keanggotaan');
		
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'tgl_lahir' => $tgl_lahir,
			'tempat_lahir' => $tempat_lahir,
			'no_hp' => $no_hp,
			'status_keanggotaan' => $status_keanggotaan,
			);

		$this->M_admin->input_data_jemaat($data,'tb_jemaat');
		$this->session->set_flashdata('alert', 'Berhasil menambahkan data jemaat !');
		redirect('admin/data_jemaat');
	}

	public function chart()
	{
		$data['umur_jemaat']	= $this->M_admin->get_umurJemaat();
		$this->template->view('admin/chart', $data);
	}


	public function data_mingguan()
	{

		$data['mingguan']	= $this->M_admin->get_mingguan();

		$this->template->view('admin/data_mingguan', $data);
	}


	public function data_jemaat()
	{
		$data['umur_jemaat']	= $this->M_admin->get_umurJemaat();
		$data['datajemaat']	= $this->M_admin->get_data_jemaat();
		

		$this->template->view('admin/data_jemaat', $data);
	}

	public function data_pengurus()
	{
		$data['datapengurus']	= $this->M_admin->get_data_pengurus();

		$this->template->view('admin/data_pengurus', $data);
	}

	function tambah_pengurus(){
		$this->template->view('admin/tambah_pengurus');
	}

	function tambah_aksipengurus(){
		
		$nama_lengkap = $this->input->post('nama_lengkap');
		$jabatan = $this->input->post('jabatan');
		
 
		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'jabatan' => $jabatan,
			);

		$this->M_admin->input_data_pengurus($data,'tb_pengurus');
		$this->session->set_flashdata('alert', 'Berhasil menambahkan data mingguan !');
		redirect('admin/data_pengurus');
	}

	
	function tambah_mingguan(){
		$this->template->view('admin/tambah_mingguan');
	}

	function tambah_aksiMingguan(){
		
		$minggu = $this->input->post('minggu');
		$jenis_ibadah = $this->input->post('jenis_ibadah');
		$tanggal = $this->input->post('tanggal');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_berakhir = $this->input->post('jam_berakhir');
		
		
 
		$data = array(
			'minggu' => $minggu,
			'jenis_ibadah' => $jenis_ibadah,
			'tanggal' => $tanggal,
			'jam_mulai' => $jam_mulai,
			'jam_berakhir' => $jam_berakhir,
			);

		$this->M_admin->input_data($data,'tb_mingguan');
		$this->session->set_flashdata('alert', 'Berhasil menambahkan data mingguan !');
		redirect('admin/data_mingguan');
	}

	

	// edit data mingguan, karena tadi di tombol link dikirim juga sama id, di function juga diterima di parameternya
	function edit_mingguan($id_mingguan){

		// teurs bikin method buat ngambil detail data mingguan yang mau di edit, dikirim juga idnya

		// data mingguan berguna buat nampilin di view nanti
		$data['mingguan']	= $this->M_admin->get_mingguanDetail($id_mingguan);

		$this->template->view('admin/edit_mingguan', $data);
	}
	
	// sama, nerima id di link waktu klik edit di form edit mingguan
	function edit_aksiMingguan($id_minggu){
		// $id_minggu = $this->input->post('id_minggu'); | gk usah id_mingguan karena AI
		$minggu = $this->input->post('minggu');
		$jenis_ibadah = $this->input->post('jenis_ibadah');
		$tanggal = $this->input->post('tanggal');
		
		// karena ini edit data jadi sama statusnya
		$status = $this->input->post('status');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_berakhir = $this->input->post('jam_berakhir');
 
		$data = array(
			'minggu' => $minggu,
			'jenis_ibadah' => $jenis_ibadah,
			'tanggal' => $tanggal,
			'jam_mulai' => $jam_mulai,
			'jam_berakhir' => $jam_berakhir,
			'status' => $status,
			);
		
			$where = array('id_minggu' => $id_minggu);
			// nama tabel hmm
		$this->M_admin->update_data($data,'tb_mingguan', $where);
		// balik kehalaman data mingguan donkkk -,-
		$this->session->set_flashdata('alert', 'Berhasil mengubah data mingguan !');
		redirect('admin/data_mingguan');
	}
	
	function hapus_mingguan($id_minggu){
		$where = array('id_minggu' => $id_minggu);
		$this->M_admin->hapus_data($where,'tb_mingguan');
		$this->session->set_flashdata('alert', 'Berhasil menghapus data mingguan !');
		redirect('admin/data_mingguan');
	}

	function edit_pengurus($id_pengurus){

		$data['pengurus']	= $this->M_admin->get_pengurusDetail($id_pengurus);

		$this->template->view('admin/edit_pengurus', $data);
	}

	function edit_aksipengurus($id_pengurus){
		$nama = $this->input->post('nama_lengkap');
		$jabatan = $this->input->post('jabatan');
 
		$data = array(
			'nama_lengkap' => $nama,
			'jabatan' => $jabatan,
			);
		
			$where = array('id_pengurus' => $id_pengurus);

		$this->M_admin->update_datapengurus($data,'tb_pengurus', $where);
		$this->session->set_flashdata('alert', 'Berhasil mengubah data pengurus !');
		redirect('admin/data_jemaat');
	}

	function hapus_pengurus($id_pengurus){
		$where = array('id_pengurus' => $id_pengurus);
		$this->M_admin->hapus_datapengurus($where,'tb_pengurus');
		$this->session->set_flashdata('alert', 'Berhasil menghapus data pengurus !');
		redirect('admin/data_jemaat');
	}

	public function baptis_admin()
	{

		$data['baptis']	= $this->M_admin->get_databaptis();


		$this->template->view('admin/baptis_admin', $data);
	}

	public function detail($id_baptis){

		$data['detail']	= $this->M_admin->get_detailbaptis($id_baptis);
	
		$this->template->view('admin/detail', $data);
	}

	public function verifikasi_baptis()
	{
		$data['baptis']= $this->M_admin->get_databaptis();
		$data['verifikasi']	= $this->db->get('tb_pengurus')->result_array();

		$this->template->view('admin/verifikasi_baptis', $data);
	}
  
	public function listBaptis(){
	  
	  $id_baptis = $this->input->post('id_baptis');
	  
	  $baptis = $this->M_admin->get_dataBaptisSingle($id_baptis);
	  
	  
	  $hp = $baptis->no_hp;
	  $tempat = $baptis->tempat_lahir;
	  $tanggal = $baptis->tgl_lahir;
	  $ayah = $baptis->nama_ayah;
	  $ibu = $baptis->nama_ibu;
	  
	  $callback = array('hp'=>$hp, 'tempat' => $tempat, 'tanggal' => $tanggal, 'ayah' => $ayah, 'ibu' => $ibu); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
	  echo json_encode($callback); 
	}

	function atur_verifikasibaptis(){
		
		$id_baptis = $this->input->post('id_baptis');
		$status_verifikasi = $this->input->post('status_verifikasi');
		$tgl_baptis = $this->input->post('tgl_baptis');
		$gereja = $this->input->post('gereja');
		$pendeta = $this->input->post('pendeta');
 
		$data = array(
			'status_verifikasi' => $status_verifikasi,
			'tgl_baptis' => $tgl_baptis,
			'gereja' => $gereja,
			'pendeta' => $pendeta,
			);
		
			$where = array('id_baptis' => $id_baptis);
			
		$this->M_admin->update_dataverifikasibaptis($data,'tb_baptis', $where);
		$this->session->set_flashdata('alert', 'Baptis Telas Terverifikasi !');
		redirect('admin/verifikasi_baptis');
}
	public function perjamuan_admin(){

	$data['perjamuan']	= $this->M_admin->get_dataperjamuan();

	$this->template->view('admin/perjamuan_admin', $data);
}

public function verifikasi_perjamuan()
	{
		$data['perjamuan']= $this->M_admin->get_perjamuan();

		$this->template->view('admin/verifikasi_perjamuan', $data);
	}

public function listperjamuan_admin(){
	// Ambil data ID Provinsi yang dikirim via ajax post
	$id_perjamuan = $this->input->post('id_perjamuan');
	
	$perjamuan = $this->M_admin->get_dataperjamuanSingle($id_perjamuan);
	
	// Buat variabel untuk menampung tag-tag option nya
	$address = $perjamuan->alamat;
	$hp = $perjamuan->no_hp;
	
	$callback = array('address'=>$address, 'hp' => $hp); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
	echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }

  public function jadwal_perjamuan_admin()
	{
		$data['jadwal_perjamuan']	= $this->M_admin->get_jadwal_perjamuan();

		$this->template->view('admin/jadwal_perjamuan_admin', $data);
	}

	public function listjadwalperjamuan()
	{
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_provinsi = $this->input->post('id_jemaat');

		$jadwal_perjamuan = $this->M_admin->get_datajadwalperjamuan($id_provinsi);

		$alamat = $jadwal_perjamuan->alamat;

		$callback = array('alamat' => $alamat); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}

	function tambah_jadwal_perjamuan(){

		$data['perjamuan']= $this->db->get('tb_jemaat')->result();
		$data['jadwal']	= $this->db->get('tb_pengurus')->result_array();
		$this->template->view('admin/tambah_jadwal_perjamuan', $data);
	}

	function tambah_aksi_jadwalperjamuan(){
		
		$hari = $this->input->post('hari');
		$tanggal = $this->input->post('tanggal');
		$jam = $this->input->post('jam');
		$rumah = $this->input->post('rumah');
		$pelayan = $this->input->post('pelayan');
 
		$data = array(
			'hari' => $hari,
			'tanggal' => $tanggal,
			'jam' => $jam,
			'rumah' => $rumah,
			'pelayan' => $pelayan,
			);

		$this->M_admin->input_jadwal_perjamuan($data,'tb_jadwal_perjamuan');
		$this->session->set_flashdata('alert', 'Berhasil menambahkan data jadwal perjamuan !');
		redirect('admin/jadwal_perjamuan_admin');
	}

	function edit_jadwal_perjamuan($id_jadwalperjamuan){
		$data['jadwalperjamuan']= $this->M_admin->get_jadwal_perjamuandetail($id_jadwalperjamuan);

		$this->template->view('admin/edit_jadwal_perjamuan', $data);
	}

	function edit_jadwalperjamuan($id_jadwalperjamuan){
		$hari = $this->input->post('hari');
		$tanggal = $this->input->post('tanggal');
		$jam = $this->input->post('jam');
		$rumah = $this->input->post('rumah');
		$pelayan = $this->input->post('pelayan');
 
		$data = array(
			'hari' => $hari,
			'tanggal' => $tanggal,
			'jam' => $jam,
			'rumah' => $rumah,
			'pelayan' => $pelayan,
			);
		
			$where = array('id_jadwalperjamuan' => $id_jadwalperjamuan);
		$this->M_admin->update_jadwalperjamuan($data,'tb_jadwal_perjamuan', $where);
		$this->session->set_flashdata('alert', 'Berhasil mengubah data Jadwal Perjamuan !');
		redirect('admin/jadwal_perjamuan_admin');
		}
	function hapus_jadwal_perjamuan($id_jadwalperjamuan){
		$where = array('id_jadwalperjamuan' => $id_jadwalperjamuan);
		$this->M_admin->hapus_jadwal_perjamuan($where,'tb_jadwal_perjamuan');
		$this->session->set_flashdata('alert', 'Berhasil menghapus data Jadwal Perjamuan !');
		redirect('admin/jadwal_perjamuan_admin');
	}

	public function laporan_perjamuan_admin()
	{
		$tanggal = $this->input->post('bulan');
		if(empty($tanggal)){
		$data['jadwal_perjamuan'] = $this->M_admin->get_jadwal_perjamuan_admin();
	}else{
		$data['jadwal_perjamuan'] = $this->db->query("SELECT a.*, b.nama, b.alamat FROM tb_jadwal_perjamuan a LEFT JOIN tb_jemaat b ON a.rumah = b.id_jemaat WHERE date_format(a.tanggal,'%Y-%m') = '$tanggal'")->result();
	}

		$this->template->view('admin/laporan_perjamuan_admin', $data);
	}
  function atur_verifikasiperjamuan(){
	$id_perjamuan = $this->input->post('id_perjamuan');
	$status = $this->input->post('status');

	$data = array(
		'status' => $status,
		);
	
		$where = array('id_perjamuan' => $id_perjamuan);
		
	$this->M_admin->update_dataperjamuan($data,'tb_perjamuan', $where);
	$this->session->set_flashdata('alert', 'Perjamuan Telah Terverifikasi !');
	redirect('admin/verifikasi_perjamuan');
}
	}

