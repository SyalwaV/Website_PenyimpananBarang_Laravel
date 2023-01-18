<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class barangmodel extends Model
{
    public function Readbarang()
    {
    $barang=DB::table('tbl_barang')->get();
    return $barang; 
    }

    public function Simpanbarang($x)
  {
       $barang=DB::table('tbl_barang')->insert([
      'kodebrg'=>$x->kodebrg,
      'kodekt'=>$x->kodekt,
      'namabr'=>$x->namabr,
      'namakt'=>$x->namakt,
      'satuan'=>$x->satuan,
      'harga'=>$x->harga,
]);
}

public function Editbarang($kodebrg)
{
  $barang=DB::table('tbl_barang')->where('kodebrg',$kodebrg)->get();
  return $barang;
}

public function Edittbarang($x)
{
  $barang=DB::table('tbl_barang')->where('kodebrg',$x->kodebrg)->update([
    'kodekt'=>$x->kodekt,
    'namabr'=>$x->namabr,
    'namakt'=>$x->namakt,
    'satuan'=>$x->satuan,
    'harga'=>$x->harga,
  ]);
}

public function Hapusbarang($kodebrg)
{
  $barang=DB::table('tbl_barang')->where('kodebrg',$kodebrg)->delete();
}

public function SimpanKategori($kodekt,$namakt)
  {
       DB::table('tbl_kategori')->insert([
      'kodekt'=>$kodekt,
      'namakt'=>$namakt,    
]);
}    

}
