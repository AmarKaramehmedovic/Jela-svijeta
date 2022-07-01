<?php

namespace App\Http\Controllers;

use App\Http\Resources\MealResource;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use App\Models\Meal;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tag;
use function PHPUnit\Framework\containsEqual;
use function PHPUnit\Framework\stringContains;

class MealApiController extends Controller
{

    public function index(Request $request)
    {
        $meal_query = Meal::query();

        if ($request->category) {
            $input_category_id = $request->input('category');
            $meal_query->whereHas('category', function ($query) use ($input_category_id) {
                $query->where('id', $input_category_id);
            })->get();
        }

        if($request->tags){
            $input_tags = $request->input('tags');
            $input_tags_arr = explode(',', $input_tags);

            $meal_query->whereHas('tags', function ($query) use ($input_tags_arr) {
                $query->whereIn('id', $input_tags_arr);
            })->get();
        }

        $input_with = $request->input('with');
        if (str_contains($input_with, 'category')) {
            $meal_query->with('category')->get();
        }
        if (str_contains($input_with, 'tags')) {
            $meal_query->with('tags')->get();
        }
        if (str_contains($input_with, 'ingredients')) {
            $meal_query->with('ingredients')->get();
        }

        if($request->diff_time){
            $date1_unix = $request->input('diff_time');
            $date1 = gmdate("Y-m-d H:i:s", $date1_unix);

            $meal_query->where('created_at', '>', $date1)->get();
        }

        if ($request->per_page) {
            $per_page = $request->per_page;
        }else{
            $per_page = 5;
        }

        return MealResource::collection($meal_query->paginate($per_page));
    }

}
