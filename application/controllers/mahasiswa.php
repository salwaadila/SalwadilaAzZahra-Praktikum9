<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Mahasiswa extends CI_Controller {
 public function index()
 {
 $this->load->model('model_mahasiswa','mhs1');
 $this->mhs1->id=1;
 $this->mhs1->nim='010001';
 $this->mhs1->nama='Faiz Fikri';
 $this->mhs1->gender='Laki-Laki';
//  $this->mhs1->tgl_lahir='25-10-2000';
//  $this->mhs1->tmp_lahir='Jakarta';
//  $this->mhs1->prodi='Sistem Informasi';
 $this->mhs1->ipk=3.85;
 
 $this->load->model('model_mahasiswa','mhs2');
 $this->mhs2->id=2;
 $this->mhs2->nim='020001';
 $this->mhs2->nama='Pandan Wangi';
 $this->mhs2->gender='Perempuan';
//  $this->mhs2->tgl_lahir='08-12-1999';
//  $this->mhs2->tmp_lahir='Jakarta';
//  $this->mhs2->prodi='Sistem Informasi';
$this->mhs2->ipk=3.35;
 $list_mhs = [$this->mhs1, $this->mhs2];
 $data['list_mhs']=$list_mhs;

 $this->load->view('layout/header');
 $this->load->view('layout/sidebar');
 $this->load->view('mahasiswa/index',$data);
 $this->load->view('layout/footer');
 }

 public function create(){
     $data['judul']='Form Kelola Mahasiswa';
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('mahasiswa/create',$data);
    $this->load->view('layout/footer'); 
 }

 public function save(){
    $this->load->model('model_mahasiswa','mhs1');
    $this->mhs1->nim = $this->input->post('nim');
    $this->mhs1->nama = $this->input->post('nama');
    $this->mhs1->gender = $this->input->post('jk');
    $this->mhs1->tmp_lahir = $this->input->post('tmp_lahir');
    $this->mhs1->tgl_lahir = $this->input->post('tgl_lahir');
    $this->mhs1->prodi = $this->input->post('prodi');
    $this->mhs1->ipk = $this->input->post('ipk');

    //die(print_r($this->mhs1));
    $data['mhs1']=$this->mhs1;
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('mahasiswa/view',$data);
    $this->load->view('layout/footer'); 

 }
}
