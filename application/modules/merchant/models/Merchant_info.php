<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Merchant_info
 *
 * @author chootu
 */
class Merchant_info extends CI_Model {
    const MERCHANTINFO="merchant_info";

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function saveMerchantInfo($param) {
        return $this->db->insert(self::MERCHANTINFO, $param);
    }
    
    public function getOneMerchant($where) {
        return $this->db->where($where)->get(self::MERCHANTINFO)->row();
    }

}
