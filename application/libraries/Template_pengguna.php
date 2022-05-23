<?php
class Template_pengguna{
	protected $_ci;

	function __construct(){
		$this->_ci = &get_instance();

	}

	function view($content, $data = NULL){
		$this->_ci->load->view('template/header_pengguna',$data);
		$this->_ci->load->view($content, $data);
		$this->_ci->load->view('template/footer',$data);

	}
}
