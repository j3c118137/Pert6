<?php namespace App\Controllers;

class Mahasiswa extends BaseController {
    
    public function index() {

    }

    public function ucapan(){
        $data['n'] = $this->request->getPost('nama');
        echo view("hello",$data);
    }

}