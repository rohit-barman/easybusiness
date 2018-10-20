<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auth
 *
 * @author chootu
 */
class Auth extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->checkAuth();
        $this->load->model("merchant_info", "Merchant");
    }

    private function checkAuth() {
        if ($this->session->userdata("merchant_id")) {
            return redirect("merchant");
        }
    }

    public function index() {
        if ($this->input->post()) {
            $post = $this->input->post();
            $this->form_validation->set_rules("email", "email", "required|trim");
            $this->form_validation->set_rules("password", "password", "required|trim");
            $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view("merchant/login");
            } else {
                $where = array(
                    "email" => $post["email"],
                    "password" => md5($post["password"])
                );
                $merchant = $this->Merchant->getOneMerchant($where);
                if ($merchant) {
                    $this->session->set_userdata((array) $merchant);
                    if (isset($post["remember"])) {
                        setcookie("email", $post["email"], time() + (86400 * 30), "/");
                        setcookie("password", $post["password"], time() + (86400 * 30), "/");
                    }
                    return redirect("merchant");
                } else {
                    $this->session->set_flashdata("error", "Invalid login details.");
                    return redirect("merchant/auth");
                }
            }
        } else {
            $this->load->view("merchant/login");
        }
    }

    public function register() {
        if ($this->input->post()) {
            $post = $this->input->post();
            $this->form_validation->set_rules("name", "name", "required|trim");
            $this->form_validation->set_rules("email", "email", "required|valid_email|is_unique[merchant_info.email]|trim");
            $this->form_validation->set_rules("password", "password", "required|trim");
            $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view("merchant/register");
            } else {
                $param = array(
                    "name" => $post["name"],
                    "email" => $post["email"],
                    "password" => $post["password"],
                    "created_at" => Date("Y-m-d H:i:s")
                );
                $param["merchant_id"] = md5(json_encode($param) . Date("YmdHis"));
                if ($this->Merchant->saveMerchantInfo($param)) {
                    $this->session->set_userdata($param);
                    return redirect("merchant");
                } else {
                    $this->session->set_flashdata("error", "Something went wrong.");
                    return redirect("merchant/auth");
                }
            }
        } else {
            $this->load->view("merchant/register");
        }
    }

    public function forgetPassword() {
        $this->load->view("merchant/forgetPassword");
    }

}
