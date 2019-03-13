<?php  

class Biodata extends CI_Controller 
{
	
	function __construct()
	{
		parent:: __construct();
	}
	function index()
	{
		$data['judul']="Biodata";
		$data['isi']="BiodataKu";
		$data['Nama']="=Anisdc";
		$data['Alamat']="=Padangan Pagu";
		$data['Jenis_Kelamin']="=Perempuan";
		$data['Asal_Sekolah']="=SMK TI PN";
		$this->load->view('profil',$data);
	}

}
?>