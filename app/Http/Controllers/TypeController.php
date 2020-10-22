<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use DataTables;
use Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.type.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Nama Harus di isi',
            'name.min' => 'Nama Minimal 2 karakter',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
        ], $messages);
        if ($validator->fails()) {
            return response()->json(["errors" => $validator->errors()], 422);
        }

        $data = Type::create([
            'name' => $request->name,
        ]);
        return response()->json(['msg' => "$data->name Berhasil Ditambahkan"], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Type::findOrFail($id);
        return view('pages.type.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'name.required' => 'Nama Harus di isi',
            'name.min' => 'Nama Minimal 2 karakter',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
        ], $messages);
        if ($validator->fails()) {
            return response()->json(["errors" => $validator->errors()], 422);
        }

        $data = Type::findOrFail($id);

        $data->update([
            'name' => $request->name,
        ]);
        return response()->json(['msg' => "$data->name Berhasil Diedit"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = \App\Food::where('ingredient_id', $id)->get();
        if (count($paket) > 0) {
            return response()->json(['msg' => 'Tipe bahan ini terdapat di salah satu makanan'], 401);
        }
        $data = Type::findOrFail($id);
        $data->delete();

        return response()->json(['msg' => "$data->name Berhasil dihapus"],200);
    }

    public function datatables()
    {
        $tipe = Type::query()->orderBy('created_at', 'DESC');

        return DataTables::of($tipe)
            ->addColumn('action', function($tipe){
                return view('pages.type.action', [
                    'model' => $tipe,
                    'url_edit' => route('tipe.edit', $tipe->id),
                    'url_delete' => route('tipe.destroy', $tipe->id),
                ]);
            })->rawColumns(['action'])->addIndexColumn()->make(true);
    }
}
