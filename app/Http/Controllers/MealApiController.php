<?php

namespace App\Http\Controllers;

use App\Http\Resources\MealResource;
use Illuminate\Http\Request;
use App\Models\Meal;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tag;

class MealApiController extends Controller
{
    public function index()
    {
        return MealResource::collection(Meal::paginate());
    }

    public function showPerPage(Request $request)
    {
        $per_page = $request->input('per_page');
        return MealResource::collection(Meal::paginate($per_page));
    }

//    public function showByCategory(Request $request)
//    {
//        $meals = DB::select('select * from meals where category_id = ?', [$request->input('category')]);
//        return ['meals' => $meals];
//    }
}
