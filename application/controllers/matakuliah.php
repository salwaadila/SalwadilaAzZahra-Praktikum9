<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class matakuliah extends CI_Controller {
 public function index()
 {
 $this->load->model('matakuliah_model','mtklh1');
 $this->mtklh1->id=1;
 $this->mtklh1->nama='Pemrograwan Web 2';
 $this->mtklh1->sks='2';
 $this->mtklh1->kode='023';
 $this->load->model('matakuliah_model','mtklh2');
 $this->mtklh2->id=2;
 $this->mtklh2->nama='Bahasa Inggris';
 $this->mtklh2->sks='2';
 $this->mtklh2->kode='025';
 $list_mtklh = [$this->mtklh1, $this->mtklh2];
 $data['list_mtklh']=$list_mtklh;
//  $this->load->view('header');
 $this->load->view('matakuliah/index',$data);
//  $this->load->view('footer');
 }
}
?>