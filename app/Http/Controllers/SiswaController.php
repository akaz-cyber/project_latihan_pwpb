<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jurusan;

class siswacontroller extends Controller
{
     public function index () {
        $data_siswa = \App\siswa::all();
        return view ('siswa.index',compact('data_siswa'));

   }
   public function create (Request $request) {
      \App\Siswa::create ($request -> all());
      return redirect('/siswa') -> with ('success','DATA FAILED SUCCESS!!!');
    }
    public function edit ($id){
      $siswa = \App\siswa::find($id);
      return view ('siswa/edit',['siswa' => $siswa]);
    }
    public function update(Request $request,$id){
      $siswa = \App\siswa::find($id);
      $siswa->update($request->all());
      return redirect('/siswa')-> with ('success','DATA BERHASIL DI UPDATE!!!');
    }
     
    public function delete ($id ) {
     $siswa = \App\Siswa::find ($id );
     $siswa -> delete ($siswa);
      return redirect('/siswa') -> with ('success','HAPUS FAILED SUCCESS!!!');
    }
}
