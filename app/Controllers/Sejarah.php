<?php

namespace App\Controllers;
class Sejarah extends BaseController
{
    protected $sejarahModel;
    public function __Construct(){
        $this->sejarahModel = new \App\Models\SejarahModel();
    }
    public function index()
    {
        $sejarah=$this->sejarahModel->findAll();

        $data = [
            'title' => 'Sejarah',
            'sejarah' => $sejarah
        ];

        return view('sejarah',$data);
    }
     public function detail($id){
        $sejarah=$this->sejarahModel->where('id',$id)->first();
          $data = [
            'title' => 'Pariwisata',
            'sejarah' => $sejarah
        ];
        return view('detailS',$data);
    }
}
