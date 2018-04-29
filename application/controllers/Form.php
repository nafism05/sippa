<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

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
		$this->load->model('Form_model', 'form');	
	}

	public function index(){
		/*$data['berita'] = $this->home->get_data('berita')->result();
		$data['kegiatan'] = $this->home->get_data('jadwal_kegiatan')->result();
		$data['kitab'] = $this->home->get_data('kitab_ngaji')->result();
		$data['kontak'] = $this->home->get_data('kontak')->result();
		$data['abah'] = $this->home->get_data('profil_abah')->result();
		$data['slider'] = $this->home->get_data('slider')->result();*/
		// $data[''] = $this->home->get_data('')->result();
		$this->form_validation->set_rules('fullname', 'Nama', 'required');

		if ($this->form_validation->run()){
			$data_form = array(
                    'nama' => $this->input->post('fullname'),
                    'email' => $this->input->post('email'),
                    'alamat' => $this->input->post('kota_asal'),
                    'tmpt_lahir' => $this->input->post('tmpt_lahir'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'telepon' => $this->input->post('telepon')
                );

			$insert_id = $this->form->insert($data_form);

			$data_status = array(
					'id_santri' => $insert_id,
					'id_status' => 1
				);
			
			$this->form->insert_status($data_status);

			$this->load->view('form_success');

    	}else{
    		// $this->load->view('form2');
			$this->load->view('form');
    	}
	}
}
