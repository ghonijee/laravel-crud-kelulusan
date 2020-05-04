<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $req)
    {
        if (empty($req->search)) {
            $data = User::paginate('10');
        } else {
            $data = User::where('nama', 'like', '%'. $req->search . '%')->paginate(10);
        }
        // dd($data);
        return view('index')->with('datas', $data);
    }

    public function create()
    {
        return view('inputData');
    }

    public function createdStore(Request $req)
    {
        $req->validate([
            'id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required'
        ]);
        
        User::create([
            'id' => $req->id,
            'nama' => $req->nama,
            'alamat' => $req->alamat,
            'keterangan' => $req->keterangan
        ]);

        return back();
    }

    public function showData(Request $req)
    {
        if (empty($req->search)) {
            $data = User::paginate(10);
        } else {
            $data = User::where('nama', 'like', '%'. $req->search . '%')->paginate(10);
        }
        return view('showData')->with('datas', $data);
    }

    public function delete($nis)
    {
        $data = User::where('id', $nis)->first();
        $data->delete();

        return back();
    }
}
