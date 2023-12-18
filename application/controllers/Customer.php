<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $user = $this->ModelUser->getWhere(["email" => $this->session->userdata("email")])->row();
        if ($user) {
            if ($user->role_id == 1) {
                redirect("admin");
            }
        } else {
            $this->session->set_flashdata("alert", '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
  Silahkan login terlebih dahulu<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
            redirect("autentifikasi");
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("role_id");
        redirect("autentifikasi");
    }
    public function data_transaction()
    {
        $data = [
            "transactions" => $this->ModelTransaction->get()->result()
        ];
        $this->load->view('transaction-list',$data);
    }
    public function transaction()
    {
        $this->load->view('transaction');
    }
}


