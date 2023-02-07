<?php

namespace App\Controllers;

class Pariwisata extends BaseController
{
    protected $pariwisataModel;
    public function __Construct(){
        $this->pariwisataModel = new \App\Models\PariwisataModel;
    }
    public function index()
    {
        $pariwisata=$this->pariwisataModel->where('status','publish')->findAll();
        $data = [
            'title' => 'Pariwisata',
            'pariwisata' => $pariwisata
        ];

        return view('pariwisata',$data);
    }
    public function detail($id){
        $pariwisata=$this->pariwisataModel->where('id',$id)->first();
          $data = [
            'title' => 'Pariwisata',
            'pariwisata' => $pariwisata
        ];
        return view('detailP',$data);
    }
}
