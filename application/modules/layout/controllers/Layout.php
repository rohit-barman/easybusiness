<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Layout
 *
 * @author chootu
 */
class Layout extends MY_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function merchantDashboard($data = array()) {
        $mainContent = $data["mainContent"];
        $head = $this->load->view("layout/merchant/dashboardHead", "", TRUE);
        $mobileHeader = $this->load->view("layout/merchant/mobileHeader", "", TRUE);
        $menuSidebar = $this->load->view("layout/merchant/sidebar", "", TRUE);
        $desktopHeader = $this->load->view("layout/merchant/desktopHeader", "", TRUE);
        $foot = $this->load->view("layout/merchant/dashboardfooter", "", TRUE);
        $data = array(
            "head" => $head,
            "mobileHeader" => $mobileHeader,
            "menuSidebar" => $menuSidebar,
            "desktopHeader" => $desktopHeader,
            "foot" => $foot,
            "mainContent" => $mainContent,
        );
        $this->load->view("layout/merchant/main", $data);
    }

    public function merchantChart($data) {
        $mainContent = $data["mainContent"];
        $head = $this->load->view("layout/merchant/dashboardHead", "", TRUE);
        $mobileHeader = $this->load->view("layout/merchant/mobileHeader", "", TRUE);
        $menuSidebar = $this->load->view("layout/merchant/sidebar", "", TRUE);
        $desktopHeader = $this->load->view("layout/merchant/desktopHeader", "", TRUE);
        $foot = $this->load->view("layout/merchant/dashboardfooter", "", TRUE);
        $data = array(
            "head" => $head,
            "mobileHeader" => $mobileHeader,
            "menuSidebar" => $menuSidebar,
            "desktopHeader" => $desktopHeader,
            "foot" => $foot,
            "mainContent" => $mainContent,
        );
        $this->load->view("layout/merchant/main", $data);
    }

    public function merchantTable($data) {
        $mainContent = $data["mainContent"];
        $head = $this->load->view("layout/merchant/dashboardHead", "", TRUE);
        $mobileHeader = $this->load->view("layout/merchant/mobileHeader", "", TRUE);
        $menuSidebar = $this->load->view("layout/merchant/sidebar", "", TRUE);
        $desktopHeader = $this->load->view("layout/merchant/desktopHeader", "", TRUE);
        $foot = $this->load->view("layout/merchant/dashboardfooter", "", TRUE);
        $data = array(
            "head" => $head,
            "mobileHeader" => $mobileHeader,
            "menuSidebar" => $menuSidebar,
            "desktopHeader" => $desktopHeader,
            "foot" => $foot,
            "mainContent" => $mainContent,
        );
        $this->load->view("layout/merchant/main", $data);
    }

    public function merchantForm($data) {
        $mainContent = $data["mainContent"];
        $head = $this->load->view("layout/merchant/formHead", "", TRUE);
        $mobileHeader = $this->load->view("layout/merchant/mobileHeader", "", TRUE);
        $menuSidebar = $this->load->view("layout/merchant/sidebar", "", TRUE);
        $desktopHeader = $this->load->view("layout/merchant/desktopHeader", "", TRUE);
        $foot = $this->load->view("layout/merchant/formFooter", "", TRUE);
        $data = array(
            "head" => $head,
            "mobileHeader" => $mobileHeader,
            "menuSidebar" => $menuSidebar,
            "desktopHeader" => $desktopHeader,
            "foot" => $foot,
            "mainContent" => $mainContent,
        );
        
        $this->load->view("layout/merchant/main", $data);
    }

    public function merchantCalendar($param) {
        
    }

}
