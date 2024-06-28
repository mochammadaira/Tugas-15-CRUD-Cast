<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function create(){
        return view('cast.tambah');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required|max:400',
        ]);

        DB::table('cast') -> insert([
            'nama' =>$request->input('nama'),
            'umur' =>$request->input('umur'),
            'bio' =>$request->input('bio'),
        ]);

        return redirect('/cast');
    }

    public function index(){
        $cast = DB::table('cast')->get();

        return view('cast.display', ['cast' => $cast]); 
    }
    
    public function show($cast_id){
        $detail = DB::table('cast')->find($cast_id);

        return view('cast.detail', ['detail' => $detail]);
    }

    public function edit($cast_id){
        $edit = DB::table('cast')->find($cast_id);

        return view('cast.edit', ['edit' => $edit]);
    }

    public function update($cast_id, Request $request){
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required|max:400',
        ]);

        DB::table('cast')
            ->where('id', $cast_id)
            ->update(
                [
                    'nama' => $request->input('nama'),
                    'umur' => $request->input('umur'),
                    'bio' => $request->input('bio'),
                ]
            );
            return redirect('/cast');
    }

    public function destroy($cast_id){
        DB::table('cast')->where('id', '=', $cast_id)->delete();

        return redirect('/cast');
    }
}
