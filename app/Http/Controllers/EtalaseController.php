<?php

namespace App\Http\Controllers;

use App\Models\etalase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EtalaseController extends Controller
{
    public function index()
    {
        $etalase = etalase::all();
        return view('lihatetalase', compact(['etalase']));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function create()
    {
        return view('tambahetalase');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        etalase::create($request->except(['_token', 'submit']));
        return redirect('/etalase');
        // etalase itu nama model yang kita buat, penamaannya diperhatikan huruf kapitalnya
    }

    public function destroy($id)
    {
        $etalase = etalase::find($id);
        $etalase->delete();
        return redirect('/etalase/edit');
    }

    public function edit()
    {
        $etalase = etalase::all();
        return view('kelolaetalase', compact(['etalase']));
    }

    public function view_edit($id){
        $data = etalase::findorFail($id);
        return view('edit.index', compact('data'));
    }

    public function update(Request $request, $id){
        $etalase = etalase::findorFail($id);
        if($etalase != null){
            $validator = Validator::make($request->all(), [
                'nama_karya' => 'required',
                'nama_kreator' => 'required',
                'harga_karya' => 'required|integer',
                'deskripsi_karya' => 'required'
            ]);
            if ($validator->fails()) {
                return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
            }else{
                $data = [
                    'nama_karya' => $request->nama_karya,
                    'nama_kreator' => $request->nama_kreator,
                    'harga_karya' => $request->harga_karya,
                    'deskripsi_karya' => $request->deskripsi_karya,
                ];
                $etalase->update($data);
                return redirect()->route('edit')->with(['success' => 'Data berhasil diedit']);
            }
        }
        return back()->with('error', 'Data tidak ditemukan!')->withInput();
    }
}
