<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\blogModel;
use App\Models\qnaModel;
use App\Models\anggotaModel;
use App\Models\TentangKamiModel;
use App\Models\PortofolioModel;
use App\Models\User;
use App\Models\ContactModel;

use Illuminate\Support\Str;

class API extends Controller
{

    public function link_password(Request $request){

        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return response()->json([
            'Number' => '200',
            'Status' => 'Silahkan check email untuk melakukan reset password'],200);
    }


    public function PortofolioIndex(){
        $data = PortofolioModel::all();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function PortofolioData($id){
        $data = PortofolioModel::find($id);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
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
                'id' => $data->id,
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

    public function AnggotaIndex(){
        $data = anggotaModel::all();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function AnggotaData($id){
        $data = anggotaModel::find($id);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    } 

    public function AnggotaStore(Request $request){

        $this->validate($request, [
            'jabatan' => 'required',
            'nama' => 'required',

        ]);

        $foto = $request->foto;
        $new_foto = time() . $foto->getClientOriginalName();

        $data = anggotaModel::create([
            'level' => $request->level,
            'jabatan' => $request->jabatan,
            'nama' => $request->nama,
            'foto' => 'public/uploads/anggota' . $new_foto,
        ]);

        $foto->move('public/uploads/anggota/', $new_foto);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil ditambah',
            'Data' => [
                'id' => $data->id,
                'jabatan' => $request->jabatan,
                'nama' => $request->nama,
                'foto' => 'public/uploads/anggota' . $new_foto,
            ]
        ],200);
    }

    public function anggotaEdit(Request $request, $id){
        $this->validate($request, [
            'jabatan' => 'required',
            'nama' => 'required',
        ]);

        $data = anggotaModel::findOrFail($id);

        if($request->has('foto')){
            $foto = $request->foto;
            $new_foto = time() . $foto->getClientOriginalName();
            $foto->move('public/uploads/anggota/', $new_foto);

            $data_update = [

                'jabatan' => $request->jabatan,
                'nama' => $request->nama,
                'foto' => 'public/uploads/anggota' . $new_foto,
            ];
        } else {
            $data_update = [

                'jabatan' => $request->jabatan,
                'nama' => $request->nama,
                'foto' => 'public/uploads/anggota' . $new_foto,
            ];
        }

        // $data->update($data_update);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dirubah',
            'Data' => [
                'id' => $data->id,
                'jabatan' => $request->jabatan,
                'nama' => $request->nama,
                'foto' => 'public/uploads/anggota' . $new_foto,
            ],
            $data->update($data_update)
        ],200);
    }

    public function anggotaDelete($id){
        $data = anggotaModel::findOrFail($id);
        $data->delete();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dihapus'], 200);
    }
    
    public function blogIndex()
    {
        $data = blogModel::all();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function blogData($id){
        $data = blogModel::find($id);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    } 

    public function blogStore(Request $request){
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
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data blog berhasil ditambah',
            'Data' => [
                'id' => $data->id,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => 'public/uploads/blog/' . $new_foto,
                'slug' => Str::slug($request->judul)
            ]
        ],200);
    }
    public function blogEdit(Request $request,$id){
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        $data = blogModel::findOrFail($id);

        if($request->has('foto')){
            $foto = $request->foto;
            $new_foto = time() . $foto->getClientOriginalName();
            $foto->move('public/uploads/blog/', $new_foto);

            $data_update = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => 'public/uploads/blog/' . $new_foto,
                'slug' => Str::slug($request->judul)
            ];
        } else {
            $data_update = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => 'public/uploads/blog/' . $new_foto,
                'slug' => Str::slug($request->judul)
            ];
        }
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data blog berhasil dirubah',
            'Data' => [
                'id' => $data->id,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => 'public/uploads/blog/' . $new_foto,
                'slug' => Str::slug($request->judul)
            ],
            $data->update($data_update)
        ],200);
    }

    public function blogDelete($id){
        $data = blogModel::findOrFail($id);
        $data->delete();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data blog berhasil dihapus'], 200);
    }

    public function UserIndex(){
        $data = User::all();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function UserData($id){
        $data = User::find($id);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function UserStore(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil ditambah',
            'Data' => [
                'id' => $data->id,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]
        ],200);
    }

    public function UserEdit(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $data = User::findOrFail($id);

        if($request){

            $data_update = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role
            ];
        } else {
            $data_update = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role
            ];
        }

        // $data->update($data_update);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dirubah',
            'Data' => [
                'id' => $data->id,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role
            ],
            $data->update($data_update)
        ],200);
    }

    public function UserDelete($id){
        $data = User::findOrFail($id);
        $data->delete();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dihapus'], 200);
    }

    public function qnaIndex(){
        $data = qnaModel::all();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function qnaData($id){
        $data = qnaModel::find($id);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function qnaStore(Request $request){

        $this->validate($request, [
            'pertanyaan' => 'required',
            'jawaban' => 'required'

        ]);

        $data = qnaModel::create([
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
        ]);

        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil ditambah',
            'Data' => [
                'id' => $data->id,
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban
            ]
        ],200);
    }

    public function qnaEdit(Request $request, $id){
        $this->validate($request, [
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ]);

        $data = qnaModel::findOrFail($id);

        if($request){

            $data_update = [
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban
            ];
        }

        // $data->update($data_update);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dirubah',
            'Data' => [
                'id' => $data->id,
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban
            ],
            $data->update($data_update)
        ],200);
    }

    public function qnaDelete($id){
        $data = qnaModel::findOrFail($id);
        $data->delete();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dihapus'], 200);
    }

    public function ContactIndex(){
        $data = ContactModel::all();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function ContactEdit(Request $request, $id){
        $this->validate($request, [
            'nomor' => 'required',
            'alamat' => 'required'
        ]);

        $data = ContactModel::findOrFail($id);

        if($request){

            $data_update = [
                'nomor' => $request->nomor,
                'alamat' => $request->alamat
            ];
        }

        // $data->update($data_update);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dirubah',
            'Data' => [
                'pertanyaan' => $request->nomor,
                'alamat' => $request->alamat
            ],
            $data->update($data_update)
        ],200);
    }

}
