<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formulir()
    {
        return view('inputan');
    }

    public function hasil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:8|max:50',
            'nrp' => 'required|numeric',
            'jeniskelamin' => 'required|max:1',
            'departemen' => 'required',
            'angkatan' => 'required|numeric',
            'ipk' => 'required|numeric',
            'ips' => 'required|numeric',
            // 'ktm' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
        // $foto_link = $this->saveFoto($request, 1);
        // $request->ktm = $foto_link;
        return view('hasil', ['data' => $request]);
    }
    // public function saveFoto(Request $request, $id)
    // {
    //     $foto = $request->ktm; // typedata : file
    //     $foto_name = ''; // typedata : string
    //     if ($foto !== NULL) {
    //         $foto_name = 'foto' . '-' . $id . "." . $foto->extension(); // typedata : string
    //         $foto_name = str_replace(' ', '-', strtolower($foto_name)); // typedata : string
    //         $foto->storeAs(null, $foto_name, ['disk' => 'public']); // memanggil function untuk menaruh file di storage
    //     }
    //     return asset('storage') . '/' . $foto_name; // me return path/to/file.ext
    // }
}