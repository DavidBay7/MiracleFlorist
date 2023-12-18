<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $user = $this->ModelUser->getWhere(["email" => $this->session->userdata("email")])->row();
        if ($user) {
            if ($user->role_id == 2) {
                redirect("home");
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

    public function index()
    {
        $data = [
        "userCount" => $this->ModelUser->count(),
        "transactionCount" => $this->ModelTransaction->count(),
        "productCount" => $this->ModelProduct->count(),
        "messageCount" => $this->ModelMessage->count(),
        ];
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer_admin', $data);
    }
    public function transaction()
    {
        $data = [
            "transactions" => $this->ModelTransaction->get()->result()
        ];
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('admin/transaction', $data);
        $this->load->view('admin/footer_admin', $data);
    }
    public function user()
    {
        $data = [
            "users" => $this->ModelUser->get()->result()
        ];
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('admin/footer_admin', $data);
    }
    public function user_add()
    {
        $this->form_validation->set_rules("name", "Nama", "required|trim", [
			"required" => "%s tidak boleh kosong"
		]);
		$this->form_validation->set_rules("role_id", "Role", "required|trim", [
			"required" => "%s tidak boleh kosong"
		]);
		$this->form_validation->set_rules("phone", "Nomor Handphone", "required|trim|numeric|min_length[10]|max_length[14]", [
			"required" => "%s tidak boleh kosong",
			"numeric" => "%s harus berupa angka",
			"min_length" => "%s terlalu pendek",
			"max_length" => "%s terlalu panjang",
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[users.email]|valid_email', [
			'required' => '%s tidak boleh kosong!',
			'is_unique' => '%s sudah digunakan!',
			'valid_email' => '%s tidak valid!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[password_confirmation]', [
			'required' => '%s tidak boleh kosong!',
			'matches' => '%s tidak cocok!',
			'min_length' => '%s minimal 5 karakter!'
		]);
		$this->form_validation->set_rules('password_confirmation', 'Password Konfirmasi', 'required|trim|matches[password]', [
			'required' => '%s tidak boleh kosong!',
			'matches' => '%s tidak cocok!',
		]);
		$this->form_validation->set_rules("address", "Alamat", "required|trim", [
			"required" => "%s tidak boleh kosong"
		]);
        $data = [
            "name" => htmlspecialchars($this->input->POST("name", true)),
            "phone" => htmlspecialchars($this->input->POST("phone", true)),
            "email" => htmlspecialchars($this->input->POST("email", true)),
            "password" => password_hash($this->input->POST("password"), PASSWORD_DEFAULT),
            "address" => htmlspecialchars($this->input->POST("address", true)),
            "role_id" => htmlspecialchars($this->input->POST("role_id", true))
        ];


		if (!$this->form_validation->run()) {
			$user = $this->ModelUser->getWhere(["email" => $this->session->userdata("email")])->row();
			$data = [
				"user" => $user,
				"activeLink" => "users",
				"roles" => $this->ModelRole->get()->result()
			];
            $this->load->view('admin/sidebar_admin', $data);
            $this->load->view('admin/user_add', $data);
            $this->load->view('admin/footer_admin', $data);
		} else {
			$data = [
				"name" => htmlspecialchars($this->input->POST("name", true)),
				"phone" => htmlspecialchars($this->input->POST("phone", true)),
				"email" => htmlspecialchars($this->input->POST("email", true)),
				"password" => password_hash($this->input->POST("password"), PASSWORD_DEFAULT),
				"address" => htmlspecialchars($this->input->POST("address", true)),
				"role_id" => htmlspecialchars($this->input->POST("role_id", true))
			];
			$this->ModelUser->insert($data);

			$this->session->set_flashdata("alert", '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Selamat!</strong> Data pengguna telah berhasil ditambah.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect("admin/user"); 
    }
}
public function user_edit($user_id)
{
    $this->form_validation->set_rules("name", "Nama", "required|trim", [
        "required" => "%s tidak boleh kosong"
    ]);
    $this->form_validation->set_rules("phone", "Nomor Handphone", "required|trim|numeric|min_length[10]|max_length[14]", [
        "required" => "%s tidak boleh kosong",
        "numeric" => "%s harus berupa angka",
        "min_length" => "%s terlalu pendek",
        "max_length" => "%s terlalu panjang",
    ]);
    $this->form_validation->set_rules("address", "Alamat", "required|trim", [
        "required" => "%s tidak boleh kosong"
    ]);
    $this->form_validation->set_rules("role_id", "Role", "required|trim", [
        "required" => "%s tidak boleh kosong"
    ]);

    if (!$this->form_validation->run()) {
        $user = $this->ModelUser->getWhere(["email" => $this->session->userdata("email")])->row();
        $userEdit = $this->ModelUser->getWhere(["users.id" => $user_id])->row();

        $data = [
            "user" => $user,
            "activeLink" => "users",
            "title" => "Edit User",
            "roles" => $this->ModelRole->get()->result(),
            "userEdit" => $userEdit
        ];
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('admin/user_edit', $data);
        $this->load->view('admin/footer_admin', $data);
    } else {
        $data = [
            "name" => htmlspecialchars($this->input->POST("name", true)),
            "phone" => htmlspecialchars($this->input->POST("phone", true)),
            "address" => htmlspecialchars($this->input->POST("address", true)),
            "role_id" => htmlspecialchars($this->input->POST("role_id", true)),
        ];
        $this->ModelUser->update($data, $user_id);

        $this->session->set_flashdata("alert", '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> Data pengguna telah diperbaharui.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
              </div>');
        redirect("admin/user");
    }
}
    public function user_delete($user_id)
	{
		$this->ModelUser->deleteWhere(["id" => $user_id]);
		$this->session->set_flashdata("alert", '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Selamat!</strong> Data pengguna telah berhasil dihapus.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect("admin/user");
    }
    
    public function product()
    {
        $data = [
            "products" => $this->ModelProduct->get()->result()
        ];
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('admin/product', $data);
        $this->load->view('admin/footer_admin', $data);
    }
    public function product_edit($user_id)
    {
        $this->form_validation->set_rules("name", "Nama", "required|trim", [
            "required" => "%s tidak boleh kosong"
        ]);
        $this->form_validation->set_rules("price", "Price", "required|trim|numeric|min_length[5]|max_length[7]", [
            "required" => "%s tidak boleh kosong",
            "numeric" => "%s harus berupa angka",
            "min_length" => "%s terlalu pendek",
            "max_length" => "%s terlalu panjang",
        ]);
        $this->form_validation->set_rules("stock", "Stock", "required|trim", [
            "required" => "%s tidak boleh kosong"
        ]);
        $this->form_validation->set_rules("image", "Image", "required|trim", [
            "required" => "%s tidak boleh kosong"
        ]);
    
        if (!$this->form_validation->run()) {
            $product = $this->ModelProduct->getWhere(["id" => $this->session->userdata("email")])->row();
            $productEdit = $this->ModelProduct->getWhere(["users.id" => $user_id])->row();
    
            $data = [
                "product" => $product,
                "activeLink" => "users",
                "title" => "Edit Product",
                "roles" => $this->ModelRole->get()->result(),
                "productEdit" => $productEdit
            ];
            $this->load->view('admin/sidebar_admin', $data);
            $this->load->view('admin/user_edit', $data);
            $this->load->view('admin/footer_admin', $data);
        } else {
            $data = [
                "name" => htmlspecialchars($this->input->POST("name", true)),
                "phone" => htmlspecialchars($this->input->POST("phone", true)),
                "address" => htmlspecialchars($this->input->POST("address", true)),
                "role_id" => htmlspecialchars($this->input->POST("role_id", true)),
            ];
            $this->ModelUser->update($data, $user_id);
    
            $this->session->set_flashdata("alert", '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Data pengguna telah diperbaharui.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                  </div>');
            redirect("admin/user");
        }
    }
    public function product_delete($id)
	{
		$this->ModelProduct->deleteWhere(["id" => $id]);
		$this->session->set_flashdata("alert", '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Selamat!</strong> Data pengguna telah berhasil dihapus.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect("admin/product");
    }
    public function role()
    {
        $data = [
            "roles" => $this->ModelRole->get()->result()
        ];
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('admin/footer_admin', $data);
    }
    public function message()
    {
        $data = [
            "messages" => $this->ModelMessage->get()->result()
        ];
        $this->load->view('admin/sidebar_admin', $data);
        $this->load->view('admin/message', $data);
        $this->load->view('admin/footer_admin', $data);
    }
    public function message_add()
    {
        $this->form_validation->set_rules("name", "Nama", "required|trim", [
			"required" => "%s tidak boleh kosong"
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[users.email]|valid_email', [
			'required' => '%s tidak boleh kosong!',
			'is_unique' => '%s sudah digunakan!',
			'valid_email' => '%s tidak valid!'
		]);
        $this->form_validation->set_rules("number", "Nomor Handphone", "required|trim|numeric|min_length[10]|max_length[14]", [
			"required" => "%s tidak boleh kosong",
			"numeric" => "%s harus berupa angka",
			"min_length" => "%s terlalu pendek",
			"max_length" => "%s terlalu panjang",
		]);
        $this->form_validation->set_rules("messages", "Message", "required|trim", [
			"required" => "%s tidak boleh kosong"
		]);
        $data = [
            "name" => htmlspecialchars($this->input->POST("name", true)),
            "email" => htmlspecialchars($this->input->POST("email", true)),
            "number" => htmlspecialchars($this->input->POST("number", true)),
            "message" => htmlspecialchars($this->input->POST("message", true))
        ];
        $this->ModelMessage->insert($data);
        $this->session->set_flashdata("alert", '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> Pesan berhasil dikirim.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect("home"); 
    }
    public function transaction_process($id)
    {
        $status = $this->input->post("status");

        $data = [
            "status" => $status
        ];
        $this->ModelTransaction->update($data, $id);

        redirect("admin/transaction");
    }
    public function product_process($id)
    {
        $product = $this->input->post("product");

        $data = [
            "status" => $status
        ];
        $this->ModelProduct->update($data, $id);

        redirect("admin/product");
    }
    public function logout()
    {
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("role_id");
        redirect("autentifikasi");
    }
    public function role_delete($role_id)
	{
		$this->ModelRole->deleteWhere(["id" => $role_id]);
		$this->session->set_flashdata("alert", '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Selamat!</strong> Data role telah berhasil dihapus.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect("admin/role_list");
	}
    // public function hapusMessage($id) {
    //     $this->ModelMessage->delete($id);
    //     redirect('admin/message');
    // }
}