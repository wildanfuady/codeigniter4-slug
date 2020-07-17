<?php
  
namespace App\Models;
  
use CodeIgniter\Model;
  
class Artikel_model extends Model{
  
    protected $table = "artikel";
    protected $primaryKey = "id";

    public function viewArtikel($slug = false)
    {
        if($slug === false){
            return $this->table($this->table)
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table($this->table)
                        ->where('slug', $slug)
                        ->get()
                        ->getRowArray();
        }
    }

    public function insertArtikel($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
  
}