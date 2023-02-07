<?php

namespace App\Models;
use CodeIgniter\Model;

class SejarahModel extends Model
{
    protected $table = 'sejarah';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'deskripsi', 'konten', 'gambar','status'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}