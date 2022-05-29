<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{
    public function edit($id){
        $data = ContactModel::findOrFail($id);
        return view('admin.contact.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'nomor' => 'required',
            'alamat' => 'required'
        ]);

        $data = ContactModel::findOrFail($id);

        $data_update = [
                'nomor' => $request->nomor,
                'alamat' => $request->alamat
        ];

        $data->update($data_update);
        return redirect()->route('contact.edit',1)->with('success', 'Data berhasil diperbarui');
    }
}
