<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dosen extends CI_Controller {
 public function index()
 {
 $this->load->model('dosen_model','dsn1');
 $this->dsn1->id=1;
 $this->dsn1->nidn='03258';
 $this->dsn1->nama='Faiz Fikri';
 $this->dsn1->gender='L';
 $this->dsn1->tmp_lahir='Depok';
 $this->dsn1->pendidikan='S2 Akuntansi';
 $this->load->model('dosen_model','dsn2');
 $this->dsn2->id=2;
 $this->dsn2->nidn='03259';
 $this->dsn2->nama='Ferista Nahda';
 $this->dsn2->gender='P';
 $this->dsn2->tmp_lahir='Jakarta';
 $this->dsn2->pendidikan='S2 Ilmu Teknologi';
 $list_dsn = [$this->dsn1, $this->dsn2];
 $data['list_dsn']=$list_dsn;

 $this->load->view('layout/header');
 $this->load->view('layout/sidebar');
 $this->load->view('dosen/index',$data);
 $this->load->view('layout/footer');
 }

 public function create(){
     $data['judul']='Form Kelola Dosen';
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('dosen/create',$data);
    $this->load->view('layout/footer'); 
 }

 public function save(){
    $this->load->model('dosen_model','dsn1');
    $this->dsn1->nidn = $this->input->post('nidn');
    $this->dsn1->nama = $this->input->post('nama');
    $this->dsn1->gender = $this->input->post('jk');
    $this->dsn1->tmp_lahir = $this->input->post('tmp_lahir');
    $this->dsn1->tgl_lahir = $this->input->post('tgl_lahir');
    $this->dsn1->pendidikan = $this->input->post('pendidikan');
    $this->dsn1->prodi = $this->input->post('prodi');

    //die(print_r($this->dsn1));
    $data['dsn1']=$this->dsn1;
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('dosen/view',$data);
    $this->load->view('layout/footer'); 

 }
}
