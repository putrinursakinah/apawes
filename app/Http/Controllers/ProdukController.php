<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function MhsView() {
        //$allDataUser=User::all();
        // $Data['allDataMhs']=::all();
        // return view('backend.mhs.view_mhs', $Data);

    }

//     public function MhsAdd() {
//         //$allDataUser=User::all();
//        // $Data['allDataUser']=User::all();
//         return view('backend.mhs.add_mhs');
//     }

//     public function MhsStore(Request $request) {
        
//         // $validatedData=$request->validate([
//         //     'nim' =>'required',
//         //     'nama' =>'required',
//         //     'alamat' =>'required',
//         //     'tanggal_lahir' =>'required',
//         // ]);
//         //dd($request);
//         $data=new Mahasiswa();
//         $data->nim=$request->nim;
//         $data->nama=$request->nama;
//         $data->alamat=$request->alamat;
//         $data->tanggal_lahir=$request->tanggal_lahir;
//         $data->save();

//         return redirect()->route('mhs.view')->with('info','Tambah Mahasiswa Berhasil');

//     }

//     public function MhsEdit($id){
//         // dd('berhasil masuk controller user edit');
//         $editData= Mahasiswa::find($id);
//         return view('backend.mhs.edit_mhs', compact('editData'));
//     }

//     public function MhsUpdate(Request $request, $id) {
        
//         // $validatedData=$request->validate([
//         //     'nim' =>'required',
//         //     'nama' =>'required',
//         //     'alamat' =>'required',
//         //     'tanggal_lahir' =>'required',
//         // ]);
//         //dd($request);
//         $data=Mahasiswa::find($id);
//         $data->nim=$request->nim;
//         $data->nama=$request->nama;
//         $data->alamat=$request->alamat;
//         $data->tanggal_lahir=$request->tanggal_lahir;
//         // if($request->password!=""){
//         //     $data->password=bcrypt($request->password);
//         // }
//         $data->save();

//         return redirect()->route('mhs.view')->with('info','Update Mahasiswa Berhasil');

//     }

//     public function MhsDelete($id){
//         // dd('berhasil masuk controller user edit');
//         $deleteData= Mahasiswa::find($id);
//         $deleteData->delete();

//         return redirect()->route('mhs.view')->with('info','Delete Mahasiswa Berhasil');

//     }
    
}
