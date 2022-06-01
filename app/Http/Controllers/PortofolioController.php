<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortofolioModel;
use Illuminate\Support\Str;

class PortofolioController extends Controller
{
    public function index()
    {
        $data = PortofolioModel::latest()->paginate(10);
        return view('admin.portofolio.index', compact('data'));
    }

    public function create()
    {
        return view('admin.portofolio.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'jenis' => 'required',
            'judul' => 'required',
            'problem' => 'required',
            'solusi' => 'required',
            'fitur' => 'required',
            'metode' => 'required'

        ]);

        $foto = $request->foto;
        $new_foto = time() . $foto->getClientOriginalName();

        $data = PortofolioModel::create([
            'jenis' => $request->jenis,
            'judul' => $request->judul,
            'problem' => $request->problem,
            'solusi' => $request->solusi,
            'fitur' => $request->fitur,
            'metode' => $request->metode,
            'foto' => 'public/uploads/portofolio' . $new_foto,
            'slug' => Str::slug($request->judul)
        ]);

        $foto->move('public/uploads/portofolio/', $new_foto);
        return redirect()->route('portofolio.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = PortofolioModel::findOrFail($id);
        return view('admin.portofolio.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jenis' => 'required',
            'judul' => 'required',
            'problem' => 'required',
            'solusi' => 'required',
            'fitur' => 'required',
            'metode' => 'required'
        ]);

        $data = PortofolioModel::findOrFail($id);

        if($request->has('foto')){
            $foto = $request->foto;
            $new_foto = time() . $foto->getClientOriginalName();
            $foto->move('public/uploads/portofolio/', $new_foto);

            $data_update = [
                'jenis' => $request->jenis,
                'judul' => $request->judul,
                'problem' => $request->problem,
                'solusi' => $request->solusi,
                'fitur' => $request->fitur,
                'metode' => $request->metode,
                'foto' => 'public/uploads/portofolio/' . $new_foto,
                'slug' => Str::slug($request->judul)
            ];
        } else {
            $data_update = [
                'jenis' => $request->jenis,
                'judul' => $request->judul,
                'problem' => $request->problem,
                'solusi' => $request->solusi,
                'fitur' => $request->fitur,
                'metode' => $request->metode,
                'slug' => Str::slug($request->judul)
            ];
        }

        $data->update($data_update);
        return redirect()->route('portofolio.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = PortofolioModel::findOrFail($id);
        $data->delete();
        return redirect()->route('portofolio.index')->with('success', 'Data telah berhasil dihapus');
    }
}
