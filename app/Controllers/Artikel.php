<?php namespace App\Controllers;

use App\Models\Artikel_model;

class Artikel extends BaseController
{
    public function __construct() {
        $this->artikel = new Artikel_model;
    }

	public function index()
	{
        $data['articles'] = $this->artikel->viewArtikel();
		return view('v_artikel', $data);
    }

    public function tambah()
	{
        return view('v_tambah_artikel');
    }

    public function simpan()
	{
        $title      = $this->request->getPost('title');
        $slug       = url_title($title, '-', TRUE);
        $content    = nl2br($this->request->getPost('content'));
        
        $data = [
            'title' => $title,
            'slug'  => $slug,
            'content' => $content
        ];

        $simpan = $this->artikel->insertArtikel($data);

        if($simpan){
            return redirect()->to('/artikel');
        } else {
            die("Gagal menyimpan data");
        }

    }
    
    public function detail($slug = null)
	{
        $artikel = $this->artikel->viewArtikel($slug);

        if(empty($artikel)){
            die("Artikel tidak ditemukan");
        } 

        return view('v_detail_artikel', compact('artikel'));
    }
}
