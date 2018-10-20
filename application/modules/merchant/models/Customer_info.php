<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer_info
 *
 * @author chootu
 */
class Customer_info extends CI_Model {

    //put your code here
    const CUSTOMERTBL = "customer_info";

    public function __construct() {
        parent::__construct();
    }

    public function saveCustomerInfo($param) {
        return $this->db->insert(self::CUSTOMERTBL, $param);
    }

    public function getOneCustomer($where) {
        return $this->db->where($where)->get(self::CUSTOMERTBL)->row();
    }

   

}
