<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crudController extends Controller
{
    public function index(){

        // $kelas = siswa::join('kelas', 'siswas.id_kelas', '=', 'kelas.id')->where('siswas.id_kelas', 1)->get();
        // @dd($kelas);


        return view('index', [
            "kelas" => siswa::all(),
            "no"    => 1,
            // "coba"  => $kelas
        ]);
    }

    public function insert(Request $request){

        $request->validate([
            "image" => 'required|mimes:jpg,png,jpeg',
        ]);
    
        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
    
        $request->image->move(public_path('images'), $imgName);

        siswa::create([
            'nama' => $request->nama,
            'image'=> $imgName,
            'nis'  => $request->nis,
            'id_kelas'  => $request->kelas
        ]);

        return redirect('/home');

    }

    public function edit(siswa $id){
        // @dd($id);
        return view('edit', [
            "data"  => siswa::where('id', $id->id)->first(),
            "kelas" => kelas::all()
        ]);

    }

    public function update(Request $request, siswa $id){

        if(!isset($request->image)){
            siswa::where('id', $id->id)
             ->update([
                 'nama' => $request->nama,
                 'nis'  => $request->nis,
                 'id_kelas' => $request->kelas
             ]);
        }else{
            $request->validate([
                "image" => 'mimes:jpg,png,jpeg',
            ]);
        
            $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        
            $request->image->move(public_path('images'), $imgName);

            siswa::where('id', $id->id)
             ->update([
                 'image'   => $imgName,
                 'nama' => $request->nama,
                 'nis'  => $request->nis,
                 'id_kelas' => $request->kelas
             ]);
        }
        

        
            
             return redirect('/home');
             
    }

    public function destroy(siswa $id){

        // @dd($id->id);
        siswa::destroy('id', $id->id);

        return redirect('/home');
    }

}
