<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogModel;
use Illuminate\Support\Str;

class blogController extends Controller
{
    public function index()
    {
        $data = blogModel::all();
        return view('admin.blog.index', compact('data'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required'

        ]);

        $foto = $request->foto;
        $new_foto = time() . $foto->getClientOriginalName();

        $data = blogModel::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => 'public/uploads/blog/' . $new_foto,
            'slug' => Str::slug($request->judul)
        ]);

        $foto->move('public/uploads/blog/', $new_foto);
        return redirect()->route('blog.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = blogModel::findOrFail($id);
        return view('admin.blog.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = blogModel::findOrFail($id);

        if ($request->has('foto')){
            $foto = $request->foto;
            $new_foto = time() . $foto->getClientOriginalName();
            $foto->move('public/uploads/blog/', $new_foto);

            $data_update = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => 'public/uploads/blog/'. $new_foto,
                'slug' => Str::slug($request->judul)
            ];
        } else {
            $data_update = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'slug' => Str::slug($request->judul)
            ];
        }

        $data->update($data_update);
        return redirect()->route('blog.index')->with('Success', 'Data telah diperbarui');

    }

    public function destroy($id)
    {
        $data = blogModel::findOrFail($id);
        $data->delete();
        return redirect()->route('blog.index')->with('success', 'Data telah berhasil dihapus');
    }
}
