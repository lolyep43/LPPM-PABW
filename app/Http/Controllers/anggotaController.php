<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Model\anggotaModel;
=======
use App\Models\anggotaModel;
use Illuminate\Support\Str;
>>>>>>> 39746d2 (MailHog)

class anggotaController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $deskripsi = anggotaModel::all();
        return view('admin.fokus_riset.index', compact('deskripsi'));
=======
        $data = anggotaModel::all();
        return view('admin.anggota.index', compact('data'));
>>>>>>> 39746d2 (MailHog)
    }

    public function create()
    {
<<<<<<< HEAD
        return view('admin.fokus_riset.create');
=======
        return view('admin.anggota.create');
>>>>>>> 39746d2 (MailHog)
    }

    public function store(Request $request)
    {
        $this->validate($request, [
<<<<<<< HEAD
            'judul' => 'required',
            'deskripsi' => 'required'

        ]);

        $deskripsi = deskripsiFokus::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'slug' => Str::slug($request->judul)
        ]);

        return redirect()->route('fokus-riset.index')->with('success', 'Data berhasil ditambahkan');
=======
            'level' => 'required',
            'jabatan' => 'required',
            'nama' => 'required'

        ]);

        $foto = $request->foto;
        $new_foto = time() . $foto->getClientOriginalName();

        $data = anggotaModel::create([
            'level' => $request->level,
            'jabatan' => $request->jabatan,
            'nama' => $request->nama,
            'foto' => 'public/uploads/anggota/' . $new_foto,
            'slug' => Str::slug($request->nama)
        ]);

        $foto->move('public/uploads/anggota', $new_foto);
        return redirect()->route('anggota.index')->with('success', 'Data berhasil ditambahkan');
>>>>>>> 39746d2 (MailHog)
    }

    public function edit($id)
    {
<<<<<<< HEAD
        $deskripsi = deskripsiFokus::findOrFail($id);
        return view('admin.fokus_riset.edit', compact('deskripsi'));
=======
        $data = anggotaModel::findOrFail($id);
        return view('admin.anggota.edit', compact('data'));
>>>>>>> 39746d2 (MailHog)
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
<<<<<<< HEAD
            'deskripsi' => 'required',
        ]);

        $deskripsi = deskripsiFokus::findOrFail($id);

        $deskripsi_update = [
            'deskripsi' => $request->deskripsi,
            'slug' => Str::slug($request->judul)
        ];

        $deskripsi->update($deskripsi_update);
        return redirect()->route('fokus-riset.index')->with('success', 'Deskripsi berhasil diperbarui');
=======
            'level' => 'required',
            'jabatan' => 'required',
            'nama' => 'required'

        ]);

        $data = anggotaModel::findOrFail($id);

        if ($request->has('foto')){
            $foto = $request->foto;
            $new_foto = time() . $foto->getClientOriginalName();
            $foto->move('public/uploads/anggota/', $new_foto);

            $data_update = [
                'level' => $request->level,
                'jabatan' => $request->jabatan,
                'nama' => $request->nama,
                'foto' => 'public/uploads/anggota/' . $new_foto,
                'slug' => Str::slug($request->nama)
            ];
        } else {
            $data_update = [
                'level' => $request->level,
                'jabatan' => $request->jabatan,
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama)
            ];
        }

        $data->update($data_update);
        return redirect()->route('anggota.index')->with('Success', 'Data telah diperbarui');

>>>>>>> 39746d2 (MailHog)
    }

    public function destroy($id)
    {
<<<<<<< HEAD
        $deskripsi = deskripsiFokus::findOrFail($id);
        $deskripsi->delete();
        return redirect()->route('fokus-riset.index')->with('success', 'Data telah berhasil dihapus');
=======
        $data = anggotaModel::findOrFail($id);
        $data->delete();
        return redirect()->route('anggota.index')->with('success', 'Data telah berhasil dihapus');
>>>>>>> 39746d2 (MailHog)
    }
}
