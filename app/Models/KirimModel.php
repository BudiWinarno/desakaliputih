<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class KirimModel extends Model
{
    protected $table = "kontak";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama_lengkap', 'alamat_email', 'no_tlp', 'tulis_pesan'];
}