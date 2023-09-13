<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class KaliputihModel extends Model
{
    protected $table = "keluarga";
    protected $primaryKey = "id_keluarga";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_keluarga', 'kepala_keluarga', 'dusun', 'jumlah_keluarga', 'rt_rw', 'kartu_keluarga','kecamatan','kabupaten','provinsi'];
}