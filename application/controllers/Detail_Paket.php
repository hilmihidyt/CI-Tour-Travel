<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Detail_paket extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Paket_wisatum_model');
    }

    function index()
    {
       
        $data['_view'] = 'layouts/front/detail_paket';
        $this->load->view('layouts/front/main',$data);
    }

    function detail($id)
    {
        
    	$data['detail'] = $this->Paket_wisatum_model->get_paket_wisatum($id);
        $data['_view'] = 'layouts/front/detail_paket';
        $this->load->view('layouts/front/main',$data);
    }

    // function booking($id)
    // {
    //     $data['booking'] = $this->Paket_wisatum_model->get_paket_wisatum($id);
    //     $data['_view'] = 'layouts/front/detail_paket';
    //     $this->load->view('layouts/front/main',$data);
    // }
}