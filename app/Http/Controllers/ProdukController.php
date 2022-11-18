<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function ProdukView() {
        $Data['allDataProduk']=Produk::all();
        return view('backend.produk.view_produk', $Data);


    }

    public function ProdukAdd() {
        return view('backend.produk.add_produk');
    }

    public function ProdukStore(Request $request) {
       
        $data=new Produk();
        $data->namaproduk=$request->namaproduk;
        $data->hargaproduk=$request->hargaproduk;
        $data->deskripsiproduk=$request->deskripsiproduk;
        $data->fotoproduk=$request->fotoproduk;
        $data->save();

        return redirect()->route('produk.view')->with('info','Tambah Produk Berhasil');

    }

    public function ProdukEdit($id){
    
        $editData= Produk::find($id);
        return view('backend.produk.edit_produk', compact('editData'));
    }

    public function ProdukUpdate(Request $request, $id) {
       
        $data=new Produk();
        $data->namaproduk=$request->namaproduk;
        $data->hargaproduk=$request->hargaproduk;
        $data->deskripsiproduk=$request->deskripsiproduk;
        $data->fotoproduk=$request->fotoproduk;
        
        $data->save();

        return redirect()->route('produk.view')->with('info','Update Produk Berhasil');

    }

    public function ProdukDelete($id){
        
        $deleteData= Produk::find($id);
        $deleteData->delete();

        return redirect()->route('produk.view')->with('info','Delete Produk Berhasil');

    }
    
}
