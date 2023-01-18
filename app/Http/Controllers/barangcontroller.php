<?php

namespace App\Http\Controllers;

use App\Models\barangmodel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class barangcontroller extends Controller
{
    public function readbarang()
    {
        $xx = new barangmodel();
        $barang = $xx->Readbarang();
        return view('barang.databarang', ['barang' => $barang]);
    }
    public function tambahbarang()
    {
        return view('barang.tambahbarang');
    }

    public function simpanbarang(Request $x)
    {
        $this->validate($x, [
            'kodebrg' => 'required|min:1|max:20',
            'kodekt' => 'required|min:1|max:200',
            'namabr' => 'required|min:1|max:20',
            'satuan' => 'required|min:1|max:200',
            'harga' => 'required|min:1|max:200',
        ]);
        $xx = new barangmodel();
        $xx->Simpanbarang($x);
        return redirect('/barang');
    }

    public function editbarang($kodebrg)
    {
        $xx=new barangmodel();
        $barang=$xx->Editbarang($kodebrg);
        return view('barang.editbarang',['barang'=>$barang]);
    }
    
    public function edittbarang(Request $x)
    {
        $xx=new barangmodel();
        $xx->Edittbarang($x);
        return redirect('/barang');
    }
    public function hapusbarang($kodebrg)
    {
    $xx=new barangmodel();
    $xx->Hapusbarang($kodebrg);
    return redirect('/barang');
    }

    public function kategorii($kodekt,$namakt){
        $xx=new barangmodel();
        $xx->SimpanKategori($kodekt,$namakt);
      }


}
