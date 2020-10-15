<?php
namespace App\Controllers;

use App\Models\Agama_Model;

class Agama extends BaseController {

    public function __construct() {
        $this->session = \Config\Services::session();

        $db = \Config\Database::connect();

        $this->agama = new Agama_Model($db);
    }

    public function index() {
        $data['session'] = $this->session->getFlashdata('response');
        $data['dataAgama'] = $this->agama->get()->getResult();

        echo view('header_v');
        echo view('agama_v', $data);
        echo view('footer_v');
    }

    public function add() {
        echo view('header_v');
        echo view('agama_form_v');
        echo view('footer_v');
    }

    public function edit($id) {
        $where = ['kode_agama' => $id];

        $data['dataAgama'] = $this->agama->get($where)->getResult()[0];
        
        echo view('header_v');
        echo view('agama_form_v', $data);
        echo view('footer_v');
    }

    public function save() {
        $data = [
            'nama_agama' => $this->request->getPost('nama')
        ];

        $id = $this->request->getPost('id');

        if (empty($id)) { //Insert
            $response = $this->agama->insert($data);

            if ($response->resultID) {
                $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data gagal disimpan. '. $response->connID->error]);
            }
        } else { // Update
            $where = ['kode_agama' => $id];

            $response = $this->agama->update($data, $where);
            
            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        }

        return redirect()->to(site_url('Agama'));
    }

    public function delete($id) {
        $where = ['kode_agama' => $id];

        $response = $this->agama->delete($where);
        
        if ($response->resultID) {
            $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data gagal dihapus. '. $response->connID->error]);
        }

        return redirect()->to(site_url('Agama'));
    }
}