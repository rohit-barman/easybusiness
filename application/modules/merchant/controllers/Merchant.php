<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Merchant
 *
 * @author chootu
 */
class Merchant extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->checkAuth();
        $this->load->model("Customer_info", "Customer");
        $this->load->model("merchant_info", "Merchant");
        $this->load->model("Transaction_info", "Transaction");
        $this->load->model("Perticuler", "Perticuler");
        $this->load->model("Guarantor_info", "Guarantor");
    }

    private function checkAuth() {
        if (!$this->session->userdata("merchant_id")) {
            return redirect("merchant/auth");
        }
    }

    public function index() {
        $data["mainContent"] = $this->load->view("merchant/index", "", true);
        $this->layout->merchantDashboard($data);
    }

    public function chart() {
        $data["mainContent"] = $this->load->view("merchant/chart", "", true);

        $this->layout->merchantChart($data);
    }

    public function table() {
        $page["customer_list"] = $this->Transaction->getAllCustomerForMerchant(array('merchant_id' => $this->session->userdata("merchant_id")));

        $data["mainContent"] = $this->load->view("merchant/table", $page, TRUE);
        $this->layout->merchantTable($data);
    }

    public function checkCustomerEmail($email) {
        $customer=$this->Customer->getOneCustomer(array("email"=>$email));
        if ($customer) {
            $baseurl= base_url("merchant/addTransaction/$customer->customer_id");
            $msg="Email already register with other account. <br/>Name: $customer->name <br/> Phone Number: $customer->mobile_number";
            $msg.="<br> <a href='$baseurl'>Click here</a> to add transaction";
            $this->form_validation->set_message('checkCustomerEmail', $msg);
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function checkCustomerMobile($mobile) {
        $customer=$this->Customer->getOneCustomer(array("mobile_number"=>$mobile));
        if ($customer) {
            $baseurl= base_url("merchant/addTransaction/$customer->customer_id");
            $msg="Email already register with other account. <br/>Name: $customer->name <br/> Email: $customer->email";
            $msg.="<br> <a href='$baseurl'>Click here</a> to add transaction";
            $this->form_validation->set_message('checkCustomerMobile', $msg);
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function form() {
        if ($this->input->post()) {
            $post = $this->input->post();
            $this->form_validation->set_rules("c_name", "c_name", "required|trim");
            $this->form_validation->set_rules("c_email", "c_email", "required|callback_checkCustomerEmail|trim");
            $this->form_validation->set_rules("c_mobile_number", "c_mobile_number", "required|callback_checkCustomerMobile|trim");
            $this->form_validation->set_rules("c_alternate_number", "c_alternate_number", "trim");
            $this->form_validation->set_rules("c_adhar_number", "c_adhar_number", "required|trim");
            $this->form_validation->set_rules("c_address", "c_address", "required|trim");
            $this->form_validation->set_rules("c_country", "c_country", "required|trim");
            $this->form_validation->set_rules("c_state", "c_state", "required|trim");
            $this->form_validation->set_rules("c_city", "c_city", "required|trim");
            $this->form_validation->set_rules("c_zip_code", "c_zip_code", "required|trim");
            $this->form_validation->set_rules("g_name", "g_name", "trim");
            $this->form_validation->set_rules("g_email", "g_email", "trim");
            $this->form_validation->set_rules("g_relation", "g_relation", "trim");
            $this->form_validation->set_rules("g_mobile_number", "g_mobile_number", "trim");
            $this->form_validation->set_rules("g_alternate_number", "g_alternate_number", "trim");
            $this->form_validation->set_rules("g_adhar_number", "g_adhar_number", "trim");
            $this->form_validation->set_rules("g_address", "g_address", "trim");
            $this->form_validation->set_rules("g_country", "g_country", "trim");
            $this->form_validation->set_rules("g_state", "g_state", "trim");
            $this->form_validation->set_rules("g_city", "g_city", "trim");
            $this->form_validation->set_rules("g_zip_code", "g_zip_code", "trim");
            $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

//            $customer_info=array()
            if ($this->form_validation->run() == FALSE) {
                $data["mainContent"] = $this->load->view("merchant/form", "", true);
                $this->layout->merchantForm($data);
            } else {
                $customer_info = array(
                    "name" => $post["c_name"],
                    "email" => $post["c_email"],
                    "mobile_number" => $post["c_mobile_number"],
                    "alternate_number" => $post["c_alternate_number"],
                    "adhar_number" => $post["c_adhar_number"],
                    "address" => $post["c_address"],
                    "country" => $post["c_country"],
                    "state" => $post["c_state"],
                    "city" => $post["c_city"],
                    "zip" => $post["c_zip_code"],
                    "created_at" => Date("Y-m-d H:i:s")
                );
                $customer_info["customer_id"] = md5(json_encode($customer_info) . Date('Ymdhis'));
                $merchant_info = array(
                    "name" => $post["g_name"],
                    "email" => $post["g_email"],
                    "mobile_number" => $post["g_mobile_number"],
                    "alternate_number" => $post["g_alternate_number"],
                    "adhar_number" => $post["g_adhar_number"],
                    "address" => $post["g_address"],
                    "country" => $post["g_country"],
                    "state" => $post["g_state"],
                    "city" => $post["g_city"],
                    "zip" => $post["g_zip_code"],
                    "created_at" => Date("Y-m-d H:i:s")
                );
                $merchant_info["guarantor_id"] = md5(json_encode($merchant_info) . Date('Ymdhis'));
                $customer_info["guarantor_id"] = $merchant_info["guarantor_id"];
                $this->db->trans_begin();
                $this->Customer->saveCustomerInfo($customer_info);
                $this->Guarantor->saveGuarantorInfo($merchant_info);

                if ($this->db->trans_status() === FALSE) {
                    $this->db->trans_rollback();
                    return redirect("merchant");
                } else {
                    $this->db->trans_commit();
                    return redirect("merchant/form");
                }
            }
        } else {



            $data["mainContent"] = $this->load->view("merchant/form", "", true);
            $this->layout->merchantForm($data);
        }
    }
    
    private function removeNumberFormate(String $str){
        return str_replace(",", "", $str);
    }

    public function addTransaction($customer_id = false) {
        if (!$customer_id) {
            return redirect('merchant');
        } else {
            $customer_info = $this->Customer->getOneCustomer(array("customer_id" => $customer_id));
            if ($customer_info) {
                if ($this->input->post()) {
                    $this->form_validation->set_rules("perticuler[]", "perticuler", "required");
                    $this->form_validation->set_rules("price[]", "price", "required");
                    $this->form_validation->set_rules("quantity[]", "quantity", "required");
                    $this->form_validation->set_rules("amount[]", "amount", "required");
                    $this->form_validation->set_rules("comment", "comment", "trim");
                    $this->form_validation->set_rules("total_amount", "total_amount", "required");
                    $this->form_validation->set_rules("amount_paid", "amount_paid", "required");
                    $this->form_validation->set_rules("remaining_amount", "remaining_amount", "required");
                    $this->form_validation->set_rules("intrest", "intrest", "required");
                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
                    if ($this->form_validation->run() == FALSE) {
                        $this->load->view("merchant/addTransaction");
                    } else {
                        echo "<pre>";
                        $post = $this->input->post();
                        $transaction_info = array(
                            "comment" => $post["comment"],
                            "total_amount" => $this->removeNumberFormate($post["total_amount"]),
                            "amount_paid" => $this->removeNumberFormate($post["amount_paid"]),
                            "remaining_amount" => $this->removeNumberFormate($post["remaining_amount"]),
                            "intrest" => $this->removeNumberFormate($post["intrest"]),
                            "merchant_id" => $this->session->userdata("merchant_id"),
                            "perticuler_count" => count($post["perticuler"]),
                            "customer_id" => $customer_id
                        );
//                        var_dump($transaction_info);die;
                        $transaction_info["transaction_id"] = md5(json_encode($transaction_info) . $this->session->userdata("merchant_id") . Date("YmdHis"));
                        $this->db->trans_begin();
                        $this->Transaction->saveTransactionInfo($transaction_info);
                        for ($index = 0; $index < count($post["perticuler"]); $index++) {
                            $perticuler = array(
                                "transaction_id" => $transaction_info["transaction_id"],
                                "perticuler" => $this->removeNumberFormate($post["perticuler"][$index]),
                                "price" => $this->removeNumberFormate($post["price"][$index]),
                                "quantity" => $this->removeNumberFormate($post["quantity"][$index]),
                                "amount" => $this->removeNumberFormate($post["amount"][$index])
                            );
                            $perticuler["perticuler_id"] = md5(json_encode($perticuler) . $this->session->userdata("merchant_id") . Date("Ymdhis"));
                            $this->Perticuler->savePerticuler($perticuler);
                        }
                        if ($this->db->trans_status() === FALSE) {
                            $this->db->trans_rollback();
                            return redirect("merchant");
                        } else {
                            $this->db->trans_commit();
                            return redirect("merchant/addTransaction/" . $customer_id);
                        }

                        var_dump($post);
                    }
                } else {
                    $this->load->view("merchant/addTransaction");
                }
            } else {
                return redirect('merchant');
            }
        }
    }

    public function calendar() {
        $prefs = array(
            'show_next_prev' => TRUE,
            'show_other_days' => TRUE,
            'next_prev_url' => base_url("merchant/calendar")
        );
        $prefs['template'] = array(
            'table_open' => '<table class="calendar">',
            'cal_cell_start' => '<td class="day">',
            'cal_cell_start_today' => '<td class="today">',
            'week_row_start' => "<tr class='weekdays'>",
            'week_row_end' => "</tr>",
            'cal_cell_start_other' => "<td class='other-month'>",
            'week_day_cell' => "<th>{week_day}</th>",
        );

        $prefs["data"] = array(
            3 => 'http://example.com/news/article/2006/06/03/',
            7 => 'http://example.com/news/article/2006/06/07/',
            13 => 'http://example.com/news/article/2006/06/13/',
            26 => 'http://example.com/news/article/2006/06/26/',
            19 => 'http://example.com/news/article/2006/06/26/'
        );
        $this->load->library('calendar', $prefs);
        $page["calendar"] = $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4), $prefs["data"]);
        $data["mainContent"] = $this->load->view("merchant/calendar", $page, TRUE);
        $this->layout->merchantTable($data);
    }

    public function logOut() {
        $this->session->sess_destroy();
        return redirect("merchant/auth");
    }

}
