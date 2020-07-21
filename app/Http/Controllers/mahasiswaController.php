<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;

class mahasiswaController extends Controller
{
    public function index() {
    	
        $mahasiswa_list = mahasiswa::orderBy('nama', 'asc') ->paginate(3);
        $jumlah_mahasiswa = mahasiswa::count();
		return view('mahasiswa.index', compact('mahasiswa_list','jumlah_mahasiswa'));
}
    	
 public function create() {
 	$halaman = 'mahasiswa';
    return view('mahasiswa.create', compact('halaman'));
    	
    }

    public function store(Request $request) {
    

    	$input = $request->all();
    	mahasiswa::create($input);
    return redirect('mahasiswa');
    	
    }

    public function show($id) {
    	$halaman = 'mahasiswa';
    	$mahasiswa = mahasiswa::findOrFail($id);
    return view('mahasiswa.show', compact('halaman', 'mahasiswa'));

}

public function edit($id) {
    	$mahasiswa = mahasiswa::findOrFail($id);
    return view('mahasiswa.edit', compact('mahasiswa'));

}

public function update($id, Request $request) {
    	$mahasiswa = mahasiswa::findOrFail($id);
    	$mahasiswa ->update($request->all());
    return redirect('mahasiswa');

}

public function destroy($id) {
    	$mahasiswa = mahasiswa::findOrFail($id);
    	$mahasiswa ->delete();
    return redirect('mahasiswa');
}
}
