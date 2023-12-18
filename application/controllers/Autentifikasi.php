<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentifikasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $user = $this->ModelUser->getWhere(["email" => $this->session->userdata("email")])->row();
        if ($user) {
            if ($user->role_id == 1) {
                redirect("admin");
            } elseif ($user->role_id == 2) {
                redirect("home");
            }
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => '%s tidak boleh kosong!',
            'valid_email' => '%s tidak valid'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => '%s tidak boleh kosong!',
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('autentifikasi/login');
        } else {
            $this->_login();
        }
        ;
    }

    private function _login()
    {
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        $user = $this->ModelUser->getWhere(["email" => $email])->row();

        if ($user) {
            if (password_verify($password, $user->password)) {
                $data = [
                    "email" => $email,
                    "role_id" => $user->role_id
                ];
                $this->session->set_userdata($data);

                if ($user->role_id == 1) {
                    redirect("admin");
                } elseif ($user->role_id == 2) {
                    redirect("home");
                }
            } else {
                $this->session->set_flashdata("alert", '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
  Password salah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
                redirect("autentifikasi");
            }
        } else {
            $this->session->set_flashdata("alert", '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
  Akun tidak terdaftar!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
            redirect("autentifikasi");
        }
    }
    public function register()
    {
        $this->form_validation->set_rules("name", "Nama", "required|trim", [
            "required" => "%s harus diisi"
        ]);

        $this->form_validation->set_rules("phone", "Nomor Handphone", "required|trim|numeric|min_length[10]|max_length[14]", [
            "required" => "%s harus diisi",
            "numeric" => "%s harus berupa angka",
            "min_length" => "%s terlalu pendek",
            "max_length" => "%s terlalu panjang",
        ]);

        $this->form_validation->set_rules("email", "Email", "required|trim|valid_email|is_unique[users.email]", [
            "required" => "%s harus diisi",
            "valid_email" => "%s tidak valid",
            "is_unique" => "%s sudah terdaftar",
        ]);

        $this->form_validation->set_rules("address", "Alamat", "required|trim", [
            "required" => "%s harus diisi",
        ]);

        $this->form_validation->set_rules("password", "Password", "required|trim|min_length[5]|matches[password_confirmation]", [
            "required" => "%s harus diisi",
            "min_length" => "%s minimal 5 karakter",
            "matches" => "%s tidak cocok",
        ]);

        $this->form_validation->set_rules("password_confirmation", "Password Konfirmasi", "required|trim|matches[password]", [
            "required" => "%s harus diisi",
            "matches" => "%s tidak cocok",
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view("autentifikasi/register");
        } else {
            $data = [
                "name" => $this->input->POST("name"),
                "email" => $this->input->POST("email"),
                "phone" => $this->input->POST("phone"),
                "address" => $this->input->POST("address"),
                "password" => password_hash($this->input->POST("password"), PASSWORD_DEFAULT),
                "role_id" => 2
            ];

            $this->ModelUser->insert($data);

            $this->session->set_flashdata("alert", '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
  Registrasi Berhasil<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
            redirect("autentifikasi");
        }
    }

}

