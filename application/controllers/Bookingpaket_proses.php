<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bookingpaket_proses extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pemesanan_model');
        
    }

    function index()
    {
    	$data['pemesanan'] = $this->Pemesanan_model->get_all_pemesanan();

        $data['_view'] = 'layouts/front/bookingpaket_proses';
        $this->load->view('layouts/front/main',$data);
    }

    function paket($id)
    {
        
    	$data['paket'] = $this->Pemesanan_model->get_pemesanan($id);
        $data['_view'] = 'layouts/front/detail_paket';
        $this->load->view('layouts/front/main',$data);
    }
}