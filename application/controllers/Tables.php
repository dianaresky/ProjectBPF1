<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tables extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("layout/header");
        $this->load->view("tables/vw_tables");
        $this->load->view("layout/footer");

    }
}