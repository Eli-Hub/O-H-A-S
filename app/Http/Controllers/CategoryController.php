<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{


    public function index()
    {
        return view('layouts.content.category.index');
    }



    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'category_name' => 'required|string|max:255',
             'amount' => 'required|numeric',
        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }

        $cat = new Category;
        $cat->category_name = $request->category_name;
        $cat->amount = $request->amount;

        if ($cat->save()) {
            return response()->json(['data' => $cat, 'message' => 'Category records saved successfully.']);
        }
        return response()->json('failed');
    }




    public function update(Request $request)
    {
        $v = Validator::make($request->all(), [
            'category_A' => 'required|string|max:255',
            // 'amount_A' => 'required|numeric',
        ]);
        if ($v->fails()) {
            return response()->json(['status' => 'fail', 'error' => $v->errors()]);
        }

        $cat = Category::find($request->id);
        $cat->category_A = $request->category_A;
        $cat->amount_A = $request->amount_A;
        $cat->category_B = $request->category_B;
        $cat->amount_B = $request->amount_B;
        $cat->category_C = $request->category_C;
        $cat->amount_C = $request->amount_C;
        $cat->category_D = $request->category_D;
        $cat->amount_D = $request->amount_D;
        if ($cat->save()) {
            return response()->json(['data' => $cat, 'message' => 'Changes saved successfully.']);
        }
        return response()->json('failed');
    }




    public function categories()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return response()->json(['data' => $categories]);
    }




    public function category(Request $request)
    {
        $category = Category::find($request->id);
        return response()->json($category);
    }




    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->delete()) {
            return response()->json(['message' => 'Category records deleted successfully.']);
        }

        return response()->json('failed');
    }
}
