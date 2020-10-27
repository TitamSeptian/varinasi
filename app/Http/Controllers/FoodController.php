<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Ingredient;
use App\FoodDetail;
use App\CalorieUse;
use Validator;
use Auth;
use Date;
use DataTables;
use DB;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.food.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	// dd($request);
        $messages = [
            'name.required' => 'Nama Harus diisi',
            'name.min' => 'Nama Minimal 2 karakter',
            'calorie.required' => 'Kalori harus diisi',
            'calorie.numeric' => 'Hanya diisi Angka',
            'ingredient.required' => 'Bahan harus diisi'
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
            'calorie' => 'required|numeric',
            'ingredient' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return response()->json(["errors" => $validator->errors()], 422);
        }

        $food = Food::create([
        	'name' => $request->name,
        	'calorie' => $request->calorie
        ]);

        if (count($request->ingredient) > 0) {
        	foreach($request->ingredient as $key => $value){
        		$data = [
        			'food_id' => $food->id,
        			'ingredient_id' => $request->ingredient[$key],
        		];
        		$resIngredient = FoodDetail::create($data);
        	}
        }else{
        	return response()->json(['msg' => 'Terjadi kesalahan dengan bahan bahan'], 401);
        }

        return response()->json(['msg' => "$food->name Berhasil Ditambahkan"], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Food::findOrFail($id);
        // dd($data);
        return view('pages.food.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Food::findOrFail($id);
        return view('pages.food.edit', compact('data'));
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
        return response()->json(["msg" => "Terjadi Kesalahan"], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Food::findOrFail($id);
        $calorieUses = CalorieUse::where('food_id', $id)->get();
        if (count($calorieUses) > 0 ) {
            return response()->json(['msg', "$data->name sedang digunukan"],401);
        }
        FoodDetail::where('food_id', $id)->delete();
        $data->delete();
        return response()->json(['msg' => "$data->name Berhasil dihapus"],200);
    }


    public function datatables()
    {
    	$food = Food::query()->orderBy('created_at', 'DESC');

        return DataTables::of($food)
            ->addColumn('action', function($food){
                return view('pages.food.action', [
                    'model' => $food,
                    'url_show' => route('makanan.show', $food->id),
                    'url_edit' => route('makanan.edit', $food->id),
                    'url_delete' => route('makanan.destroy', $food->id),
                ]);
            })->rawColumns(['action'])->addIndexColumn()->make(true);
    }

    public function allMakanan()
    {
        $data = Food::paginate(2);
        $ingredient = Ingredient::all();
        return view("pages.makan", [
            "data" => $data,
            "ingredient" => $ingredient,
        ]);
    }

    public function showFood($id)
    {
        $data = Food::findOrFail($id);
        return view('pages.showFood ', compact('data'));
    }

    public function eating(Request $request, $id)
    {

        $messages = [
            'qty.numeric' => 'Hanya diisi Angka',
            'qty.required' => 'Qty harus diisi',
            'qty.min' => 'Qty Minimal satu'
        ];
        $validator = Validator::make($request->all(), [
            'qty' => 'required|numeric|min:1',
        ], $messages);

        if ($validator->fails()) {
            return response()->json(["errors" => $validator->errors()], 422);
        }
        // dd($request);
        $food = Food::findOrFail($id);

        $data = CalorieUse::create([
            "food_id" => $id,
            "user_id" => Auth::id(),
            "calorie" => $food->calorie,
            "date" => Date::now()->format("Y-m-d"),
            "qty" => $request->qty,
        ]);

        return response()->json(["msg" => "Anda Memakan $food->name sebanyak $data->qty"]);
    }
}
