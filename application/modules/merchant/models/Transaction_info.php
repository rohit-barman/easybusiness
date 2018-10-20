<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transaction_info
 *
 * @author chootu
 */
class Transaction_info extends CI_Model {

    //put your code here
    const TRANSACTIONINFO = "transaction_info";
    const CUSTOMERTBL = "customer_info";

    public function __construct() {
        parent::__construct();
    }

    public function saveTransactionInfo($param) {
        return $this->db->insert(self::TRANSACTIONINFO, $param);
    }

    public function getAllCustomerForMerchant($where) {

        $this->db->select(self::CUSTOMERTBL.".customer_id");
        $this->db->select(self::CUSTOMERTBL.".name");
        $this->db->select(self::CUSTOMERTBL.".email");
        $this->db->select(self::CUSTOMERTBL.".mobile_number");
        $this->db->select("sum(".self::TRANSACTIONINFO.".total_amount) total_amount");
        $this->db->select("sum(".self::TRANSACTIONINFO.".amount_paid) amount_paid");
        $this->db->select("sum(".self::TRANSACTIONINFO.".remaining_amount) remaining_amount");
        $this->db->join(self::CUSTOMERTBL, self::CUSTOMERTBL.".customer_id=".self::TRANSACTIONINFO.".customer_id","LEFT");
        $this->db->where($where);
        $this->db->group_by(self::CUSTOMERTBL.".customer_id");

        return $this->db->get(self::TRANSACTIONINFO)->result();
    }

}
