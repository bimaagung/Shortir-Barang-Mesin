<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$content['main_content'] = 'barang/view_daftar_barang.php';
		$this->load->view('dashboard',$content);
	}
}
