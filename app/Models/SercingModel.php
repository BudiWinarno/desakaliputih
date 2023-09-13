<?php namespace App\Models;
use CodeIgniter\Model;
 
class SercingModel extends Model
{

  protected $table = "keluarga";
  


  public function pencarian($kunci) {
  	return $this->table('keluarga')->like('kepala_keluarga', $kunci);
  }
}