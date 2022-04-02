<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\qnaModel;

class qnaController extends Controller
{
    public function index()
    {
        $data = qnaModel::all();
        return view('admin.qna.index', compact('data'));
    }

    public function create()
    {
        return view('admin.qna.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'pertanyaan' => 'required',
            'jawaban' => 'required'

        ]);

        $data = qnaModel::create([
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban
        ]);

        return redirect()->route('QNA.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = qnaModel::findOrFail($id);
        return view('admin.qna.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ]);

        $data = qnaModel::findOrFail($id);

        $data_update = [
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban
        ];

        $data->update($data_update);
        return redirect()->route('QNA.index')->with('success', 'Deskripsi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = qnaModel::findOrFail($id);
        $data->delete();
        return redirect()->route('QNA.index')->with('success', 'Data telah berhasil dihapus');
    }
}
