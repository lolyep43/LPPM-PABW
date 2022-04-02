<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogModel;
use App\Models\qnaModel;
use App\Models\anggotaModel;
use App\Models\TentangKamiModel;
use App\Models\PortofolioModel;
use App\Models\User;

use Illuminate\Support\Str;

class API extends Controller
{
    public function PortofolioIndex(){
        $data = blogModel::all();
        return json_encode($data);
    }

    public function PortofolioStore(Request $request){

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
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil ditambah',
            'Data' => [
                'jenis' => $request->jenis,
                'judul' => $request->judul,
                'problem' => $request->problem,
                'solusi' => $request->solusi,
                'fitur' => $request->fitur,
                'metode' => $request->metode,
                'foto' => 'public/uploads/portofolio' . $new_foto,
                'slug' => Str::slug($request->judul)
            ]
        ],200);
    }
    
    public function PortofolioEdit(Request $request, $id){
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
            $foto->move('public/uploads/blog/', $new_foto);

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

        // $data->update($data_update);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dirubah',
            'Data' => [
                'jenis' => $request->jenis,
                'judul' => $request->judul,
                'problem' => $request->problem,
                'solusi' => $request->solusi,
                'fitur' => $request->fitur,
                'metode' => $request->metode,
                'foto' => 'public/uploads/portofolio' . $new_foto,
                'slug' => Str::slug($request->judul)
            ],
            $data->update($data_update)
        ],200);
    }

    public function PortofolioDelete($id){
        $data = PortofolioModel::findOrFail($id);
        $data->delete();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dihapus'], 200);
    }


}
