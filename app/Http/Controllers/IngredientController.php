<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Validator;
use App\Ingredient;
use App\Type;
use DB;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.ing.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Type::all();
        return view("pages.ing.create", compact('data'));
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
            'name.required' => 'Nama Harus diisi',
            'name.min' => 'Nama Minimal 2 karakter',
            'type.required' => 'Tipe Bahan Haris diisi',
            'calorie.required' => 'Kalori harus diisi',
            'calorie.numeric' => 'Hanya diisi Angka',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
            'type' => 'required',
            'calorie' => 'required|numeric',
        ], $messages);
        if ($validator->fails()) {
            return response()->json(["errors" => $validator->errors()], 422);
        }

        $data = Ingredient::create([
            'name' => $request->name,
            'calorie' => $request->calorie,
            'type_id' => $request->type,
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
        $tipe = Type::all();
        $data = Ingredient::findOrFail($id);
        return view("pages.ing.edit", [
            'tipe' => $tipe,
            'data' => $data,
        ]);
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
            'name.required' => 'Nama Harus diisi',
            'name.min' => 'Nama Minimal 2 karakter',
            'type.required' => 'Tipe Bahan Haris diisi',
            'calorie.required' => 'Kalori harus diisi',
            'calorie.numeric' => 'Hanya diisi Angka',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
            'type' => 'required',
            'calorie' => 'required|numeric',
        ], $messages);
        if ($validator->fails()) {
            return response()->json(["errors" => $validator->errors()], 422);
        }

        $data = Ingredient::findOrFail($id);

        $data->update([
            'name' => $request->name,
            'calorie' => $request->calorie,
            'type_id' => $request->type,
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
        $a = \App\Food::where('ingredient_id', $id)->get();
        if (count($a) > 0) {
            return response()->json(['msg' => 'Bahan ini terdapat di salah satu makanan'], 401);
        }
        $data = Ingredient::findOrFail($id);
        $data->delete();

        return response()->json(['msg' => "$data->name Berhasil dihapus"],200);
    }

    public function datatables()
    {
        $bahan = Ingredient::query()->orderBy('created_at', 'DESC')->with('type');

        return DataTables::of($bahan)
            
            ->addColumn('action', function($bahan){
                return view('pages.ing.action', [
                    'model' => $bahan,
                    'url_edit' => route('bahan.edit', $bahan->id),
                    'url_delete' => route('bahan.destroy', $bahan->id),
                ]);
            })->rawColumns(['action'])->addIndexColumn()->make(true);
    }

    public function findIngredient()
    {
        $data = Ingredient::where('name', 'LIKE', "%". request('q'). "%")->get();
        return response()->json(["items" => $data], 200);
    }
}
