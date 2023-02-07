<?php

namespace App\Controllers;
use CodeIgniter\Files\File;

class Admin extends BaseController
{
    public function __construct(){
        // dd(session('logged_in'));
        if(session('logged_in')==null){
            return redirect()->to("/Login");
        }
    }
    public function index()
    {
        return view('admin/overview');
    }

    
    // pariwisata start
    public function pariwisata(){
        $pariwisata = new \App\Models\PariwisataModel;

        $all=$pariwisata->findAll();
        
        $data = [
            'pariwisata'=>$all
        ];
        return view('admin/pariwisata/pariwisata', $data);
    }

    public function pariwisataAdd(){
        return view('admin/pariwisata/pariwisata-add');
    }

    public function pariwisataEdit($id){
        $model= new \App\Models\PariwisataModel;
        $data['id'] = $model->where('id', $id)->first();
        return view('admin/pariwisata/pariwisata-edit', $data);
    }
    public function pariwisataDelete($id){
        $model= new \App\Models\PariwisataModel;
        $data['post'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('/Admin/Pariwisata'));
        
    }

    public function pariwisataUpdate($id){
        $model= new \App\Models\PariwisataModel;

        $validationRule = [
            'file' => [
                'rules' => [
                    'uploaded[file]',
                    'is_image[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[file,100]',
                ],
            ],
        ];
        $img = $this->request->getFile('file');

        $img->move('uploads');

        $namaFile = $img->getName();

        if($this->request->getPost('draft')=='publish'){
            $status = 'publish';
        }else{
            $status = 'draft';
        }

        $model -> update($id,[
            "judul" => $this->request->getPost('judul'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            "konten" => $this->request->getPost('konten'),
            "gambar" => $namaFile,
            "status"=>$status
        ]);
        return redirect()->to('http://localhost:8080/Admin/Pariwisata');
    }

    public function addArtikelP(){
        $validationRule = [
            'file' => [
                
                'rules' => [
                    'uploaded[file]',
                    'is_image[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[file,100]',
                ],
            ],
        ];
        $img = $this->request->getFile('file');

        $img->move('uploads');

        $namaFile = $img->getName();

        $model = new \App\Models\PariwisataModel;

        if($this->request->getPost('draft')=='publish'){
            $status = 'publish';
        }else{
            $status = 'draft';
        }
        $model->save([
            "judul" => $this->request->getPost('title'),
            "deskripsi" => $this->request->getPost('description'),
            "konten" => $this->request->getPost('content'),
            "gambar" => $namaFile,
            "status"=>$status
        ]);
        // sleep(5);
        return redirect()->to('http://localhost:8080/Admin/Pariwisata');
    }

    // end
    // 
    // 
    // 
    // 
    // 
    public function sejarah(){
        $sejarah = new \App\Models\SejarahModel;

        $all=$sejarah->findAll();
        
        $data = [
            'sejarah'=>$all
        ];
        return view('admin/sejarah/sejarah',$data);
    }
     public function sejarahAdd(){
        return view('admin/sejarah/sejarah-add');
    }
    public function addArtikelS(){
        $validationRule = [
            'file' => [
                
                'rules' => [
                    'uploaded[file]',
                    'is_image[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[file,100]',
                ],
            ],
        ];
        if($this->request->getPost('draft')=='publish'){
            $status = 'publish';
        }else{
            $status = 'draft';
        }
        $img = $this->request->getFile('file');

        $img->move('uploads');

        $namaFile = $img->getName();

        $model = new \App\Models\SejarahModel;

        $model->save([
            "judul" => $this->request->getPost('judul'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            "konten" => $this->request->getPost('konten'),
            "gambar" => $namaFile,
            "status" => $status
        ]);
        return redirect()->to('http://localhost:8080/Admin/Sejarah');
    }
    
    public function SejarahUpdate($id){
        // dd("et");
        $validationRule = [
            'file' => [
                'rules' => [
                    'uploaded[file]',
                    'is_image[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[file,100]',
                ],
            ],
        ];
        $img = $this->request->getFile('file');

        $img->move('uploads');

        $namaFile = $img->getName();

        if($this->request->getPost('draft')=='publish'){
            $status = 'publish';
        }else{
            $status = 'draft';
        }
        $model= new \App\Models\SejarahModel;
        $model -> update($id,[
            "judul" => $this->request->getPost('judul'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            "konten" => $this->request->getPost('konten'),
            "gambar" => $namaFile,
            "status"=>$status
        ]);
        return redirect()->to('http://localhost:8080/Admin/Sejarah');
    }
     public function sejarahEdit($id){
        $model= new \App\Models\SejarahModel;
        $data['id'] = $model->where('id', $id)->first();
        return view('admin/sejarah/sejarah-edit', $data);
    }
    public function sejarahDelete($id){
        $model= new \App\Models\SejarahModel;
        $data['post'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('/Admin/Sejarah'));
        
    }
}