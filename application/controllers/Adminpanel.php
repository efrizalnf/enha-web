<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');	
		$this->load->model('enhamodel');
		$this->setsession();
	}

	public function setsession(){
		if($this->session->userdata('status') != 1){
			$this->session->set_flashdata('error', 'Session anda telah berakhir, silahkan login kembali!');
			redirect(base_url('login/index'));
		} 
	}
	
	public function index()
	{	
		$datasession['tb_user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		$this->template->load('templates/admin/template',  $datasession);

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		}else{
			echo "asdasdasd";
		}
	}

	public function dashboard()
	{	
		$data['guru'] = count($this->enhamodel->getGuru());
		$data['file'] = count($this->enhamodel->getCountFile());
		$data['info'] = count($this->enhamodel->getCountInfo());
		$this->template->load('templates/admin/template', 'admin/dashboard', $data);
	}


	public function dataguru()
	{
		$data['guru'] = $this->enhamodel->getDirGuru();
		$this->template->load('templates/admin/template', 'admin/form_dirguru' , $data);
	}	

	public function inputguru(){
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama_guru');
			$mapel = $this->input->post('mapel_ampu');
			$uploadfoto = $_FILES['foto_guru']['name'];
			if($uploadfoto == ''){
				$nip = $this->input->post('nip');
			$nama = $this->input->post('nama_guru');
			$mapel = $this->input->post('mapel_ampu');
				
			}else{
				$config['upload_path'] = 'assets/landing/img/fotoguru'; 
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto_guru')) {
					$this->session->set_flashdata('error', 'Silahkan upload foto!');
					redirect('adminpanel/dataguru');
					// echo "Upload gagal!"; die(); //do alert here
				} else{
					$uploadfoto['foto_guru']= $this->upload->data('file_name');
				}
			}

			$data = array(
				'nip' => $nip,
				'nama_guru' => $nama,
				'mapel_ampu' => $mapel,
				'foto_guru'	=> $uploadfoto
			);

			
			$this->enhamodel->inputdataGuru($data, 'tb_guru');
			$this->session->set_flashdata('message', 'Data guru berhasil ditambahkan');
			redirect('adminpanel/dataguru');
		

	}

	// public function editguru($id){
	// 	// $this->setsession();
	// 	// $id = $this->input->post('edit_id');
    //     // $config['upload_path']= 'assets/landing/img/fotoguru';
    //     // $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
	// 	// $this->load->library('upload', $config);
    //     // if(!$this->upload->do_upload('foto_guru')){
	// 	// // 	$item = $this->enhamodel->get($data['id'])->row();
	// 	// // 	if ($item->image != null) {
	// 	// // 	$target_file = 'assets/landing/img/fotoguru'.$item->image;
	// 	// // 	unlink($target_file);
	// 	// // }
	// 	// 	$nip = $this->input->post('nip');
	// 	// 	$nama = $this->input->post('nama_guru');
	// 	// 	$mapel = $this->input->post('mapel_ampu');

	// 	// 	$data = array(
	// 	// 		'nip' => $nip,
	// 	// 		'nama_guru' => $nama,
	// 	// 		'mapel_ampu' => $mapel,
				
	// 	// 	);
	
	// 	// 	$this->enhamodel->prosesEditGuru($data, $id);
	// 	// 	$this->session->set_flashdata('message', 'Data guru berhasil di ubah');
	// 	// 	redirect('adminpanel/dataguru');
    //     // }else{
	// 	// 		$nip = $this->input->post('editnip');
	// 	// 		$nama = $this->input->post('editnamaguru');
	// 	// 		$mapel = $this->input->post('editmapelampu');
	// 	// 		$foto = $_FILES['editfotoguru']['name'];
    //     //         $foto = $this->upload->data('file_name');
    //     // }
        
    //     // $data = array(
	// 	// 	'nip' => $nip,
	// 	// 	'nama_guru' => $nama,
	// 	// 	'mapel_ampu' => $mapel,
			
	// 	// );

	// 	// if ($data['foto_guru'] != null) {
	// 	// 	# code...
	// 	// 	$data['foto_guru'] = $foto['foto_guru'];
	// 	// }
		

	// 	// $where = array('id_guru' => $id);
	// 	$data['guru'] = $this->enhamodel->getGuruById($id);
	// 	$this->template->load('templates/admin/template', 'admin/edit_guru', $data);
	// 	// $this->enhamodel->prosesEditGuru($data, $id, $where);
	// 	// $this->session->set_flashdata('message', 'Data guru berhasil di ubah');
	// 	// redirect('adminpanel/dataguru');
	   
	// }

	public function editguru(){
		// post di isi variable name di input
		$id = $this->input->post('edit_id');
		
		$nip = $this->input->post('editnip');
		$nama = $this->input->post('editnamaguru');
		$mapel = $this->input->post('editmapelampu');
		$foto = $_FILES['editfotoguru'];
        $config['upload_path']= 'assets/landing/img/fotoguru';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		
		// do_upload di isi name variable di form input
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('editfotoguru')) {
			$data = array(
				'nip' => $nip,
				'nama_guru' => $nama,
				'mapel_ampu' => $mapel
			);
	
			$this->enhamodel->updatedataguru($data, $id);
			$this->session->set_flashdata('message', 'Data guru berhasil di ubah');
			redirect('adminpanel/dataguru');
		}else{
		$guru['guru'] = $this->enhamodel->getGuruById($id);
		if ($guru['guru']['foto_guru'] != null) {
			$path = FCPATH.'assets/landing/img/fotoguru/'.$guru['guru']['foto_guru'];
			unlink($path);
		}
		// file_name menngembalikan nama file beserta extensinya
        $foto = $this->upload->data('file_name');
        
        $data = array(
			'nip' => $nip,
			'nama_guru' => $nama,
			'mapel_ampu' => $mapel,
			'foto_guru' => $foto
		);

		$this->enhamodel->updatedataguru($data, $id);
		$this->session->set_flashdata('message', 'Data guru berhasil di ubah');
		
		redirect('adminpanel/dataguru');
	}
	}


	public function deleteguru($id){
		$guru['guru'] = $this->enhamodel->getGuruById($id);
		if ($guru['guru']['foto_guru'] != null) {
			$path = FCPATH.'assets/landing/img/fotoguru/'.$guru['guru']['foto_guru'];
			unlink($path);
		$this->enhamodel->selectdeleteGuru($id);
		$this->session->set_flashdata('message', 'Data guru berhasil di hapus');
		redirect('adminpanel/dataguru');}
	}



	public function gallery(){
		$data['gallery'] = $this->enhamodel->getGallery();
		$this->template->load('templates/admin/template', 'admin/gallery', $data);
	}
	
	public function inputgallery(){
		$config['upload_path'] = 'assets/landing/img/gallery/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		$namakegiatan = $this->input->post('namakegiatan');
		$jmlfoto = count($_FILES['fotokegiatan']['name']);
		for ($i=0; $i <$jmlfoto ; $i++) { 
		if (!empty($_FILES['fotokegiatan']['name'][$i])) {
			$_FILES['file']['name'] = $_FILES['fotokegiatan']['name'][$i];
			$_FILES['file']['type'] = $_FILES['fotokegiatan']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['fotokegiatan']['tmp_name'][$i];
			$_FILES['file']['error'] = $_FILES['fotokegiatan']['error'][$i];
			$_FILES['file']['size'] = $_FILES['fotokegiatan']['size'][$i];
			if ($this->upload->do_upload('file')) {
				$fotokegiatan = $this->upload->data();
				$data['foto_kegiatan']= $fotokegiatan['file_name'];
				$data ['nama_kegiatan'] = $namakegiatan[$i];
				$this->enhamodel->inputFotogallery($data, 'tb_gallery');
				$this->session->set_flashdata('message', 'Foto berhasil di upload');
			}
		}	
	}
	redirect('adminpanel/gallery');
}

public function deletegallery($id){
	$gallery['gallery'] = $this->enhamodel->getGalleryById($id);
	if ($gallery['gallery']['foto_kegiatan'] != null) {
		$path = FCPATH.'assets/landing/img/gallery/'.$gallery['gallery']['foto_kegiatan'];
		unlink($path);
	$this->enhamodel->selectdeleteGallery($id);
	$this->session->set_flashdata('message', 'Foto berhasil di hapus');
	redirect('adminpanel/gallery');}
	}


	public function datainfo()
	{
		$data['info'] = $this->enhamodel->getInfo();
		$this->template->load('templates/admin/template', 'admin/form_info' , $data);
	}	

	public function inputinfo(){
		$judulinfo = $this->input->post('judulinfo');
		$isiinfo = $this->input->post('isiinfo');
		$tglinfo = $this->input->post('tglinfo');
		$gbrinfo = $_FILES['gbrinfo']['name'];
		$config['upload_path'] = 'assets/landing/img/info'; 
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('gbrinfo')){
			$data = array(
				'judul_info' => $judulinfo,
				'isi_info' => $isiinfo,
				'tgl_info' => $tglinfo
			);

			$this->enhamodel->inputDataInfo($data, 'tb_info');
			$this->session->set_flashdata('message', 'Data informasi berhasil ditambahkan');
			redirect('adminpanel/datainfo');
			}else{
				$data = array(
					'judul_info' => $judulinfo,
					'isi_info' => $isiinfo,
					'tgl_info' => $tglinfo,
					'gbr_info' => $gbrinfo
				);
		
			$gbrinfo['foto_guru']= $this->upload->data('file_name');
			$this->enhamodel->inputDataInfo($data, 'tb_info');
			$this->session->set_flashdata('message', 'Data informasi berhasil ditambahkan');
			redirect('adminpanel/datainfo');
			}
	}

	public function editinfo(){
		// post di isi variable name di input
		$id = $this->input->post('edit_id_info');
		$editjudul = $this->input->post('editjudul');
		$editisi = $this->input->post('editisi');
		// $edittgl = $this->input->post('edittgl');
		$foto = $_FILES['editgbrinfo'];
        $config['upload_path']= 'assets/landing/img/info';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		
		// do_upload di isi name variable di form input
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('editgbrinfo')) {
			$data = array(
				'judul_info' => $editjudul,
				'isi_info' => $editisi
				// 'tgl_info' => $edittgl
			);

			$this->enhamodel->updatedatainfo($data, $id);
			$this->session->set_flashdata('message', 'Data informasi berhasil diubah');
			redirect('adminpanel/datainfo');
		}else{
		$info['info'] = $this->enhamodel->getInfoById($id);
		if ($info['info']['gbr_info'] != null) {
			$path = FCPATH.'assets/landing/img/info/'.$info['info']['gbr_info'];
			unlink($path);
		}
		// file_name menngembalikan nama file beserta extensinya
        $foto = $this->upload->data('file_name');
        
		$data = array(
			'judul_info' => $editjudul,
			'isi_info' => $editisi,
			// 'tgl_info' => $edittgl,
			'gbr_info' => $foto
		);

		$this->enhamodel->updatedatainfo($data, $id);
		$this->session->set_flashdata('message', 'Data informasi berhasil di ubah');
		redirect('adminpanel/datainfo');
	}
	}

	public function deleteinfo($id){
		$info['info'] = $this->enhamodel->getInfoById($id);
		if ($info['info']['gbr_info'] != null) {
			$path = FCPATH.'assets/landing/img/info/'.$info['info']['gbr_info'];
			unlink($path);
		}
		$this->enhamodel->selectdeleteInfo($id);
		$this->session->set_flashdata('message', 'Data informasi berhasil di hapus');
		redirect('adminpanel/datainfo');
	}

	/* files download */
	public function datafile()
	{
		$data['filedata'] = $this->enhamodel->getFile();
		$this->template->load('templates/admin/template', 'admin/form_files' , $data);
	}	

	public function inputfile(){
		// post di isi variable name di input
		$namafile = $this->input->post('namafile');
		$lokasifile = $_FILES['lokasifile']['name'];
        $config['upload_path']= 'assets/landing/files/';
		$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
		$config['encrypt_name'] = true;
		
		// do_upload di isi name variable di form input
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('lokasifile')) {
			$data = ['nama_file' => $namafile];
	
			$this->enhamodel->inputDataFile($data, 'tb_files');
			$this->session->set_flashdata('message', 'Data file berhasil diupload');
			redirect('adminpanel/datafile');
		}else{
		
		// file_name menngembalikan nama file beserta extensinya
        $lokasifile = $this->upload->data('file_name');
        
		$data = array(
			'nama_file' => $namafile,
			'lokasi_file' => $lokasifile
		);

		$this->enhamodel->inputDataFile($data, 'tb_files');
		$this->session->set_flashdata('message', 'Data file berhasil diupload');
		redirect('adminpanel/datafile');
	}}

	public function editfile(){
		// post di isi variable name di input
		$id = $this->input->post('edit_id_file');
		$editfile = $this->input->post('editfile');
		$edtlokasifile = $_FILES['edtlokasifile'];
        $config['upload_path']= 'assets/landing/files';
		$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';
		$config['encrypt_name'] = true;
		
		// do_upload di isi name variable di form input
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('edtlokasifile')) {
			$data = ['nama_file' => $editfile];
	
			$this->enhamodel->updatedatafile($data, $id);
			$this->session->set_flashdata('message', 'Data informasi berhasil diubah');
			redirect('adminpanel/datafile');
		}else{
		$filedata['filedata'] = $this->enhamodel->getFileById($id);
		if ($filedata['filedata']['lokasi_file'] != null) {
			$path = FCPATH.'assets/landing/files/'.$filedata['filedata']['lokasi_file'];
			unlink($path);
		}
		// file_name menngembalikan nama file beserta extensinya
        $edtlokasifile = $this->upload->data('file_name');
        
		$data = array(
			'nama_file' => $editfile,
			'lokasi_file' => $edtlokasifile
		);

		$this->enhamodel->updatedatafile($data, $id);
		$this->session->set_flashdata('message', 'Data informasi berhasil di ubah');
		redirect('adminpanel/datafile');
	}}

	public function deletefile($id){
		$files['file'] = $this->enhamodel->getFileById($id);
		if ($files['file']['lokasi_file'] != null) {
			$path = FCPATH.'assets/landing/files/'.$files['file']['lokasi_file'];
			unlink($path);
		}
		$this->enhamodel->selectdeleteFile($id);
		$this->session->set_flashdata('message', 'Data file berhasil di hapus');
		redirect('adminpanel/datafile');
	}


	/* Carrousel */

	public function datacover()
	{
		$data['cover'] = $this->enhamodel->getCover();
		$this->template->load('templates/admin/template', 'admin/form_carrousel' , $data);
	}	

	public function editcover(){
		$id = $this->input->post('edit_id_cover');
		$editjudul = $this->input->post('editjudulcover');
		$editisi = $this->input->post('editdesccover');
		$foto = $_FILES['editimgcover'];
        $config['upload_path']= 'assets/landing/img/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
		
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('editimgcover')) {
			$data = array(
				'txt_title' => $editjudul,
				'txt_desc' => $editisi
			);

			$this->enhamodel->updatedatacover($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil diubah');
			redirect('adminpanel/datacover');
		}else{
		$cover['cvr'] = $this->enhamodel->getCoverById($id);
		if ($cover['cvr']['img_cover'] != null) {
			$path = FCPATH.'assets/landing/img/'.$cover['cvr']['img_cover'];
			unlink($path);
		}
        $foto = $this->upload->data('file_name');
        
		$data = array(
			'txt_title' => $editjudul,
			'txt_desc' => $editisi,
			'img_cover' => $foto
		);

		$this->enhamodel->updatedatacover($data, $id);
		$this->session->set_flashdata('message', 'Data berhasil di ubah');
		redirect('adminpanel/datacover');
	}
	}


	/* Running Text */
	public function data_rtext()
	{
		$data['runtext'] = $this->enhamodel->getRunText();
		$this->template->load('templates/admin/template', 'admin/form_rtext' , $data);
	}	

	public function editrtext(){
		$editrtext = $this->input->post('editrtext');
		
		$data = ['isi_rtext'=>$editrtext];
		
		$this->enhamodel->updatedataruntext($data);
		$this->session->set_flashdata('message', 'Data berhasil di ubah');
		redirect('adminpanel/data_rtext');
	}

	/* Edt Profile */
	public function dataprofile()
	{
		$data['profile'] = $this->enhamodel->getProfile();
		$this->template->load('templates/admin/template', 'admin/form_profile' , $data);
	}	

	public function editprofile(){
		
		$id = $this->input->post('idskul');
		$jejangsekolah = $this->input->post('jenjang');
		$nsm = $this->input->post('nsm');
		$npsn = $this->input->post('npsn');
		$namamadrasah = $this->input->post('namamadrasah');
		$akreditasi = $this->input->post('akreditasi');
		$statussekolah = $this->input->post('statussekolah');
		$provinsi = $this->input->post('provinsi');
		$kabkota = $this->input->post('kabkota');
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');
		$alamat = $this->input->post('alamat');
		$kodepos = $this->input->post('kodepos');
		$lattitude = $this->input->post('lattitude');
		$longitude = $this->input->post('longitude');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$linkfb = $this->input->post('linkfb');
		$linkig = $this->input->post('linkig');
		$linkyt = $this->input->post('linkyt');
		$visi = $this->input->post('visi');
		$nama_kepsek = $this->input->post('namakepsek');
		$nipkepsek = $this->input->post('nipkepsek');
		$uploadfotokamad =$_FILES['uploadfotokamad']['name'];
		$uploadlogo = $_FILES['uploadlogo']['name'];
		$config['upload_path']= 'assets/landing/img';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('uploadlogo')){
			if(!$this->upload->do_upload('uploadfotokamad')){
			$data = [
				'jenjang' => $jejangsekolah,
				'npsn' => $npsn,
				'nsm' => $nsm,
				'nama_madrasah' => $namamadrasah,
				'alamat_madrasah' => $alamat,
				'provinsi' => $provinsi,
				'kab_kota' => $kabkota,
				'kecamatan' => $kecamatan,
				'kelurahan'	=> $kelurahan,
				'kodepos' => $kodepos,
				'lattitude' => $lattitude,
				'longitude'	=> $longitude,
				'nilai_akreditasi'	=> $akreditasi,
				'status_sekolah' => $statussekolah,
				'email' => $email,
				'phone' => $phone,
				'link_fb'	=> $linkfb,
				'link_ig' => $linkig,
				'link_youtube' => $linkyt,
				'visi_motto' => $visi,
				'nama_kepsek' => $nama_kepsek,
				'nip_kepsek' => $nipkepsek
			];

			$this->enhamodel->updatedataprofile($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('adminpanel/dataprofile');
		}else{
			$loadfoto['profile'] = $this->enhamodel->getProfile();
			if ($loadfoto['profile']->img_kepsek != null) {
				$path = FCPATH.'assets/landing/img/'.$loadfoto['profile']->img_kepsek;
				unlink($path);
			}
        	$uploadfotokamad = $this->upload->data('file_name');
			$data = [
				'jenjang' => $jejangsekolah,
				'npsn' => $npsn,
				'nsm' => $nsm,
				'nama_madrasah' => $namamadrasah,
				'alamat_madrasah' => $alamat,
				'provinsi' => $provinsi,
				'kab_kota' => $kabkota,
				'kecamatan' => $kecamatan,
				'kelurahan'	=> $kelurahan,
				'kodepos' => $kodepos,
				'lattitude' => $lattitude,
				'longitude'	=> $longitude,
				'nilai_akreditasi'	=> $akreditasi,
				'status_sekolah' => $statussekolah,
				'email' => $email,
				'phone' => $phone,
				'link_fb'	=> $linkfb,
				'link_ig' => $linkig,
				'link_youtube' => $linkyt,
				'visi_motto' => $visi,
				'nama_kepsek' => $nama_kepsek,
				'nip_kepsek' => $nipkepsek,
				'img_kepsek' => $uploadfotokamad
			];

			$this->enhamodel->updatedataprofile($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di rubah');
			redirect('adminpanel/dataprofile');
			}
			
		}else{
			$loadfoto['profile'] = $this->enhamodel->getProfile();
			if ($loadfoto['profile']->logo_sekolah != null) {
				$path = FCPATH.'assets/landing/img/'.$loadfoto['profile']->logo_sekolah;
				unlink($path);
			}
        	$uploadlogo = $this->upload->data('file_name');
			$data = [
				'jenjang' => $jejangsekolah,
				'npsn' => $npsn,
				'nsm' => $nsm,
				'nama_madrasah' => $namamadrasah,
				'alamat_madrasah' => $alamat,
				'provinsi' => $provinsi,
				'kab_kota' => $kabkota,
				'kecamatan' => $kecamatan,
				'kelurahan'	=> $kelurahan,
				'kodepos' => $kodepos,
				'lattitude' => $lattitude,
				'longitude'	=> $longitude,
				'nilai_akreditasi'	=> $akreditasi,
				'status_sekolah' => $statussekolah,
				'email' => $email,
				'phone' => $phone,
				'link_fb'	=> $linkfb,
				'link_ig' => $linkig,
				'link_youtube' => $linkyt,
				'visi_motto' => $visi,
				'nama_kepsek' => $nama_kepsek,
				'nip_kepsek' => $nipkepsek,
				'logo_sekolah' => $uploadlogo
			];

			$this->enhamodel->updatedataprofile($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di rubah');
			redirect('adminpanel/dataprofile');
		}
	}


}