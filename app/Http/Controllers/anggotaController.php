<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anggotaModel;
use Illuminate\Support\Str;

class anggotaController extends Controller
{
    public function index()
    {
        $data = anggotaModel::all();
        return view('admin.anggota.index', compact('data'));
    }

    public function create()
    {
        return view('admin.anggota.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'jabatan' => 'required',
            'nama' => 'required'

        ]);

        $foto = $request->foto;
        $new_foto = time() . $foto->getClientOriginalName();

        $data = anggotaModel::create([
            'jabatan' => $request->jabatan,
            'nama' => $request->nama,
            'foto' => 'public/uploads/anggota/' . $new_foto,
            'slug' => Str::slug($request->nama)
        ]);

        $foto->move('public/uploads/anggota', $new_foto);
        return redirect()->route('anggota.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = anggotaModel::findOrFail($id);
        return view('admin.anggota.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jabatan' => 'required',
            'nama' => 'required'

        ]);

        $data = anggotaModel::findOrFail($id);

        if ($request->has('foto')){
            $foto = $request->foto;
            $new_foto = time() . $foto->getClientOriginalName();
            $foto->move('public/uploads/anggota/', $new_foto);

            $data_update = [
                'jabatan' => $request->jabatan,
                'nama' => $request->nama,
                'foto' => 'public/uploads/anggota/' . $new_foto,
                'slug' => Str::slug($request->nama)
            ];
        } else {
            $data_update = [
                'jabatan' => $request->jabatan,
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama)
            ];
        }

        $data->update($data_update);
        return redirect()->route('anggota.index')->with('Success', 'Data telah diperbarui');

    }

    public function destroy($id)
    {
        $data = anggotaModel::findOrFail($id);
        $data->delete();
        return redirect()->route('anggota.index')->with('success', 'Data telah berhasil dihapus');
    }
}
