<?php

/**
 * Created by PhpStorm.
 * User: Muhsin Ahadi
 * Date: 1/23/2018
 * Time: 11:13 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class error_page extends CI_Controller
{
//    public function __construct()
//    {
//        parent::__construct();
//        $this->load->helper('url');
//    }

    public function index()
    {
        $this->load->view('page_error');
    }
}