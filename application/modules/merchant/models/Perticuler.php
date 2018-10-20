<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Perticuler
 *
 * @author chootu
 */
class Perticuler extends CI_Model{
    //put your code here
    const PERTICULER="perticuler";
    public function __construct() {
        parent::__construct();
    }
    
    public function savePerticuler($param) {
        return $this->db->insert(self::PERTICULER,$param);
    }
}
