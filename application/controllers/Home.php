<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		# code...
		parent::__construct();
		$this->load->model('Home_model', 'home');	
	}

	public function index(){
		$data['berita'] = $this->home->get_data('berita')->result();
		$data['kegiatan'] = $this->home->get_data('jadwal_kegiatan')->result();
		$data['kitab'] = $this->home->get_data('kitab_ngaji')->result();
		$data['kontak'] = $this->home->get_data('kontak')->result();
		$data['abah'] = $this->home->get_data('profil_abah')->row();
		$data['slider'] = $this->home->get_data('slider')->result();
		// $data[''] = $this->home->get_data('')->result();

		$this->load->view('template', $data);
	}

	public function berita($id){
		$this->load->view('berita_one');

	}
}
